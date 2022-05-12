<?php

namespace Larapen\Feed\Http;

use App\Http\Controllers\Web\FrontController;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use Spatie\Feed\Feed;

class FeedController extends FrontController
{
	public function __construct()
	{
		parent::__construct();
		
		// Update feed's config values
		[$title, $description, $keywords] = getMetaTag('home');
		Config::set('feed.feeds.main.title', $title);
		Config::set('feed.feeds.main.description', $description);
		Config::set('feed.feeds.main.language', ietfLangTag(config('app.locale')));
	}
	
	public function __invoke()
	{
		$feeds = config('feed.feeds');
		
		$name = Str::after(app('router')->currentRouteName(), 'feeds.');
		
		$feed = $feeds[$name] ?? null;
		
		abort_unless($feed, 404);
		
		$items = $this->resolveFeedItems($feed['items']);
		
		return new Feed(
			$feed['title'],
			$items,
			request()->url(),
			$feed['view'] ?? 'feed::feed',
			$feed['description'] ?? '',
			$feed['language'] ?? ''
		);
	}
	
	protected function resolveFeedItems($resolver): Collection
	{
		$resolver = Arr::wrap($resolver);
		
		$items = app()->call(
			array_shift($resolver), $resolver
		);
		
		return $items;
	}
}
