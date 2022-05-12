<?php
$widgetType = 'normal';
if (
	isset($widgetLatestPosts, $widgetLatestPosts->options)
	&& array_key_exists('items_in_carousel', $widgetLatestPosts->options)
	&& $widgetLatestPosts->options['items_in_carousel'] == '1'
) {
	$widgetType = 'carousel';
}
?>
@includeFirst([
		config('larapen.core.customizedViewPath') . 'search.inc.posts.widget.' . $widgetType,
		'search.inc.posts.widget.' . $widgetType
	],
	['widget' => ($widgetLatestPosts ?? null)]
)
