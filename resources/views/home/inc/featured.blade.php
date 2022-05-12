<?php
$widgetType = 'normal';
if (
	isset($widgetSponsoredPosts, $widgetSponsoredPosts->options)
	&& array_key_exists('items_in_carousel', $widgetSponsoredPosts->options)
	&& $widgetSponsoredPosts->options['items_in_carousel'] == '1'
) {
	$widgetType = 'carousel';
}
?>
@includeFirst([
		config('larapen.core.customizedViewPath') . 'search.inc.posts.widget.' . $widgetType,
		'search.inc.posts.widget.' . $widgetType
	],
	['widget' => ($widgetSponsoredPosts ?? null)]
)
