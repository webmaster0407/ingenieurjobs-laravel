<?php
use Illuminate\Support\Facades\Route;

// Categories' Jobs Pages
$noIndexCategoriesPermalinkPages = (
	config('settings.seo.no_index_categories')
	&& str_contains(Route::currentRouteAction(), 'Web\Search\CategoryController')
);
$noIndexCategoriesQueryStringPages = (
	config('settings.seo.no_index_categories_qs')
	&& str_contains(Route::currentRouteAction(), 'Web\Search\SearchController')
	&& (isset($cat) && !empty($cat))
);

// Cities' Jobs Pages
$noIndexCitiesPermalinkPages = (
	config('settings.seo.no_index_cities')
	&& str_contains(Route::currentRouteAction(), 'Web\Search\CityController')
);
$noIndexCitiesQueryStringPages = (
	config('settings.seo.no_index_cities_qs')
	&& str_contains(Route::currentRouteAction(), 'Web\Search\SearchController')
	&& (isset($city) && !empty($city))
);

// Users' Jobs Pages
$noIndexUsersByIdPages = (
	config('settings.seo.no_index_users')
	&& str_contains(Route::currentRouteAction(), 'Web\Search\UserController@index')
);
$noIndexUsersByUsernamePages = (
	config('settings.seo.no_index_users_username')
	&& str_contains(Route::currentRouteAction(), 'Web\Search\UserController@profile')
);

// Tags' Jobs Pages
$noIndexTagsPages = (
	config('settings.seo.no_index_tags')
	&& str_contains(Route::currentRouteAction(), 'Web\Search\TagController')
);

// Companies' Jobs Pages
$noIndexCompaniesPages = (
	config('settings.seo.no_index_companies')
	&& str_contains(Route::currentRouteAction(), 'Web\Search\CompanyController')
);

// Filters (and Orders) on Jobs Pages (Except Pagination)
$noIndexFiltersOnEntriesPages = (
	config('settings.seo.no_index_filters_orders')
	&& str_contains(Route::currentRouteAction(), 'Web\Search\\')
	&& !empty(request()->except(['page']))
);

// "No result" Pages (Empty Searches Results Pages)
$noIndexNoResultPages = (
	config('settings.seo.no_index_no_entry_found')
	&& str_contains(Route::currentRouteAction(), 'Web\Search\\')
	&& (
		isset($posts)
		&& $posts instanceof Illuminate\Pagination\LengthAwarePaginator
		&& $posts->count() <= 0
	)
);

// Jobs Report Pages
$noIndexListingsReportPages = (
	config('settings.seo.no_index_listing_report')
	&& str_contains(Route::currentRouteAction(), 'Web\Post\ReportController')
);

// All Website Pages
$noIndexAllPages = (config('settings.seo.no_index_all'));
?>
@if (
		$noIndexAllPages
		|| $noIndexCategoriesPermalinkPages
		|| $noIndexCategoriesQueryStringPages
		|| $noIndexCitiesPermalinkPages
		|| $noIndexCitiesQueryStringPages
		|| $noIndexUsersByIdPages
		|| $noIndexUsersByUsernamePages
		|| $noIndexCompaniesPages
		|| $noIndexTagsPages
		|| $noIndexFiltersOnEntriesPages
		|| $noIndexNoResultPages
		|| $noIndexListingsReportPages
	)
	<meta name="robots" content="noindex,nofollow">
	<meta name="googlebot" content="noindex">
@endif