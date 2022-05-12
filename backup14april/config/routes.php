<?php 

return [
    'post' => '{slug}-{hashableId}',
    'search' => '{countryCode}/search',
    'searchPostsByUserId' => '{countryCode}/users/{id}/jobs',
    'searchPostsByUsername' => '{countryCode}/profile/{username}',
    'searchPostsByTag' => '{countryCode}/tag/{tag}',
    'searchPostsByCity' => '{countryCode}/jobs/{city}/{id}',
    'searchPostsBySubCat' => '{countryCode}/category/{catSlug}/{subCatSlug}',
    'searchPostsByCat' => '{countryCode}/category/{catSlug}',
    'searchPostsByCompanyId' => '{countryCode}/companies/{id}/jobs',
    'login' => 'login',
    'logout' => 'logout',
    'register' => 'register',
    'companies' => '{countryCode}/companies',
    'pageBySlug' => 'page/{slug}',
    'sitemap' => '{countryCode}/sitemap',
    'countries' => 'countries',
    'contact' => 'contact',
    'pricing' => 'pricing',
];
