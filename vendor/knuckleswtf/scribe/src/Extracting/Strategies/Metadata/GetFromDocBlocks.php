<?php

namespace Knuckles\Scribe\Extracting\Strategies\Metadata;

use Illuminate\Routing\Route;
use Knuckles\Scribe\Extracting\RouteDocBlocker;
use Knuckles\Scribe\Extracting\Strategies\Strategy;
use Mpociot\Reflection\DocBlock;
use Mpociot\Reflection\DocBlock\Tag;
use ReflectionClass;
use ReflectionFunctionAbstract;

class GetFromDocBlocks extends Strategy
{
    public $stage = 'metadata';

    public function __invoke(Route $route, ReflectionClass $controller, ReflectionFunctionAbstract $method, array $routeRules, array $alreadyExtractedData = [])
    {
        $docBlocks = RouteDocBlocker::getDocBlocksFromRoute($route);
        /** @var DocBlock $methodDocBlock */
        $methodDocBlock = $docBlocks['method'];
        $classDocBlock = $docBlocks['class'];

        return $this->getMetadataFromDocBlock($methodDocBlock, $classDocBlock);
    }

    public function getMetadataFromDocBlock(DocBlock $methodDocBlock, DocBlock $classDocBlock): array
    {
        [$routeGroupName, $routeGroupDescription, $routeTitle] = $this->getRouteGroupDescriptionAndTitle($methodDocBlock, $classDocBlock);

        return [
            'groupName' => $routeGroupName,
            'groupDescription' => $routeGroupDescription,
            'title' => $routeTitle ?: $methodDocBlock->getShortDescription(),
            'description' => $methodDocBlock->getLongDescription()->getContents(),
            'authenticated' => $this->getAuthStatusFromDocBlock($methodDocBlock, $classDocBlock),
        ];
    }

    /**
     * @param DocBlock $methodDocBlock Method docblock
     * @param DocBlock $classDocBlock Class docblock
     *
     * @return bool
     */
    protected function getAuthStatusFromDocBlock(DocBlock $methodDocBlock, DocBlock $classDocBlock = null)
    {
        foreach ($methodDocBlock->getTags() as $tag) {
            if (strtolower($tag->getName()) === 'authenticated') {
                return true;
            }

            if (strtolower($tag->getName()) === 'unauthenticated') {
                return false;
            }
        }

        return $classDocBlock
            ? $this->getAuthStatusFromDocBlock($classDocBlock)
            : $this->config->get('auth.default', false);
    }

    /**
     * @param DocBlock $methodDocBlock
     * @param DocBlock $controllerDocBlock
     *
     * @return array The route group name, the group description, and the route title
     */
    protected function getRouteGroupDescriptionAndTitle(DocBlock $methodDocBlock, DocBlock $controllerDocBlock)
    {
        // @group tag on the method overrides that on the controller
        if (!empty($methodDocBlock->getTags())) {
            foreach ($methodDocBlock->getTags() as $tag) {
                if ($tag->getName() === 'group') {
                    $routeGroupParts = explode("\n", trim($tag->getContent()));
                    $routeGroupName = array_shift($routeGroupParts);
                    $routeGroupDescription = trim(implode("\n", $routeGroupParts));

                    // If the route has no title (the methodDocBlock's "short description"),
                    // we'll assume the routeGroupDescription is actually the title
                    // Something like this:
                    // /**
                    //   * Fetch cars. <-- This is route title.
                    //   * @group Cars <-- This is group name.
                    //   * APIs for cars. <-- This is group description (not required).
                    //   **/
                    // VS
                    // /**
                    //   * @group Cars <-- This is group name.
                    //   * Fetch cars. <-- This is route title, NOT group description.
                    //   **/

                    // BTW, this is a spaghetti way of doing this.
                    // It shall be refactored soon. Deus vult!💪
                    if (empty($methodDocBlock->getShortDescription())) {
                        return [$routeGroupName, '', $routeGroupDescription];
                    }

                    return [$routeGroupName, $routeGroupDescription, $methodDocBlock->getShortDescription()];
                }
            }
        }

        foreach ($controllerDocBlock->getTags() as $tag) {
            if ($tag->getName() === 'group') {
                $routeGroupParts = explode("\n", trim($tag->getContent()));
                $routeGroupName = array_shift($routeGroupParts);
                $routeGroupDescription = implode("\n", $routeGroupParts);

                return [$routeGroupName, $routeGroupDescription, $methodDocBlock->getShortDescription()];
            }
        }

        return [$this->config->get('default_group'), '', $methodDocBlock->getShortDescription()];
    }
}
