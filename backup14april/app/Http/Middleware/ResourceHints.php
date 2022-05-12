<?php
/**
 * JobClass - Job Board Web Application
 * Copyright (c) BeDigit. All Rights Reserved
 *
 * Website: https://laraclassifier.com/jobclass
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from CodeCanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class ResourceHints
{
	/**
	 * @param \Illuminate\Http\Request $request
	 * @param Closure $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// Exception for Install & Upgrade Routes
		if (
			Str::contains(Route::currentRouteAction(), 'InstallController')
			|| Str::contains(Route::currentRouteAction(), 'UpgradeController')
		) {
			return $next($request);
		}
		
		$response = $next($request);
		
		// Exception for Empty content
		if (empty($response->getContent())) {
			return $response;
		}
		
		if (!config('larapen.resource-hints.active')) {
			return $response;
		}
		
		// Get HTML
		$buffer = $response->getContent();
		
		// Apply Lazy Loading HTML transformation
		$buffer = $this->applyResourceHints($buffer);
		
		// Output the minified HTML
		return $response->setContent($buffer);
	}
	
	/**
	 * Apply the Resource Hints
	 * iframe, img, style, script, font, document
	 *
	 * @param $buffer
	 * @return string|string[]
	 */
	private function applyResourceHints($buffer)
	{
		$newContent = '';
		
		$newContent .= $this->preload();
		$newContent .= $this->prefetch();
		$newContent .= $this->prerender();
		$newContent .= $this->preconnect();
		$newContent .= $this->dnsPrefetch();
		
		if (!empty($newContent)) {
			$buffer = str_replace('</head>', $newContent . '</head>', $buffer);
		}
		
		return $buffer;
	}
	
	/*
	 * preload is a new web standard that offers more control on how particular resources are fetched for current navigation.
	 * This is the updated version of subresource prefetching which was deprecated in January 2016.
	 * This directive can be defined within a <link> element for example as <link rel="preload">.
	 * Generally it is best to preload your most important resources such as images, CSS, JavaScript, and font files.
	 * This is not to be confused with browser preloading in which only resources declared in HTML are preloaded.
	 * The preload directive actually overcomes this limitation and allows resources which are initiated
	 * via CSS and JavaScript to be preloaded and define when each resource should be applied.
	 *
	 * preload is different from prefetch in that it focuses on fetching a resource for the current navigation.
	 * prefetch focuses on fetching a resource for the next navigation. It is also important to note that preload does not block the window's onload event.
	 *
	 * Example: <link rel="preload" href="/css/mystyles.css" as="style">
	 *          <link rel="preload" href="myFont.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	 */
	private function preload()
	{
		$entries = (array)config('larapen.resource-hints.preload');
		
		$out = '';
		if (!empty($entries)) {
			foreach($entries as $entry) {
				if (
					isset($entry['href'], $entry['as'], $entry['type'])
					&& !empty($entry['href']) && empty($entry['as']) && empty($entry['type'])
					&& is_string($entry['href']) && is_string($entry['as']) && is_string($entry['type'])
				) {
					if (isset($entry['crossorigin'])) {
						$out .= '<link rel="preload" href="'
							. $entry['href'] . '" as="'
							. $entry['as'] . '" type="'
							. $entry['type'] . '" crossorigin="'
							. $entry['crossorigin'] . '">';
					} else {
						$out .= '<link rel="preload" href="' . $entry['href'] . '" as="' . $entry['as'] . '" type="' . $entry['type'] . '">';
					}
					// $out .=  "\n";
				}
			}
		}
		
		return $out;
	}
	
	/*
	 * prefetch is a low priority resource hint that allows the browser to fetch resources in the background (idle time)
	 * that might be needed later, and store them in the browser's cache.
	 * Once a page has finished loading it begins downloading additional resources and if a user then clicks on a prefetched link,
	 * it will load the content instantly. There are three different types of prefetching, link, DNS, and prerendering which we will go into more below.
	 *
	 * Examples:
	 * HTM: <link rel="prefetch" href="/uploads/images/pic.png">
	 * HTTP header: Link: </uploads/images/pic.png>; rel=prefetch
	 */
	private function prefetch()
	{
		$entries = (array)config('larapen.resource-hints.prefetch');
		
		$out = '';
		if (!empty($entries)) {
			foreach($entries as $entry) {
				if (is_string($entry)) {
					$out .= '<link rel="prefetch" href="' . $entry . '">';
					// $out .=  "\n";
				}
			}
		}
		
		return $out;
	}
	
	/*
	 * Prerendering is very similar to prefetching in that it gathers resources that the user may navigate to next.
	 * The difference is that prerendering actually renders the entire page in the background,
	 * all the assets of a document. Below is an example.
	 *
	 * Example: <link rel="prerender" href="https://www.keycdn.com">
	 */
	private function prerender()
	{
		$entries = (array)config('larapen.resource-hints.prerender');
		
		$out = '';
		if (!empty($entries)) {
			foreach($entries as $entry) {
				if (is_string($entry)) {
					$out .= '<link rel="prerender" href="' . $entry . '">';
					// $out .=  "\n";
				}
			}
		}
		
		return $out;
	}
	
	/*
	 * The preconnect directive allows the browser to setup early connections before an HTTP request is actually sent to the server.
	 * This includes DNS lookups, TLS negotiations, TCP handshakes. This in turn eliminates roundtrip latency and saves time for users.
	 *
	 * Example: <link rel="preconnect" href="https://example.net/">
	 *          <link rel="preconnect" href="https://cdn.domain.com" crossorigin>
	 */
	private function preconnect()
	{
		$entries = (array)config('larapen.resource-hints.preconnect');
		
		$out = '';
		if (!empty($entries)) {
			foreach($entries as $entry) {
				$out .= '<link rel="preconnect" href="' . $entry . '">';
				if (isset($entry['href']) && !empty($entry['href']) && is_string($entry['href'])) {
					if (isset($entry['crossorigin'])) {
						$out .= '<link rel="preload" href="' . $entry['href'] . '" crossorigin>';
					} else {
						$out .= '<link rel="preload" href="' . $entry['href'] . '">';
					}
					// $out .=  "\n";
				}
			}
		}
		
		return $out;
	}
	
	/*
	 * DNS prefetching allows the browser to perform DNS lookups on a page in the background while the user is browsing.
	 * This minimizes latency as the DNS lookup has already taken place once the user clicks on a link.
	 * DNS prefetching can be added to a specific URL by adding the rel="dns-prefetch" tag to the link attribute.
	 * We suggest using this on things such as Google fonts, Google Analytics, and your CDN.
	 *
	 * Examples:
	 * <!-- Prefetch DNS for external assets -->
	 * <link rel="dns-prefetch" href="//fonts.googleapis.com">
	 * <link rel="dns-prefetch" href="//www.google-analytics.com">
	 * <link rel="dns-prefetch" href="//cdn.domain.com">
	 */
	private function dnsPrefetch()
	{
		$entries = (array)config('larapen.resource-hints.dnsPrefetch');
		
		$out = '';
		if (!empty($entries)) {
			foreach($entries as $entry) {
				if (is_string($entry)) {
					$entry = str_replace(['http://', 'https://'], '', $entry);
					$out .= '<link rel="dns-prefetch" href="//' . $entry . '">';
					// $out .=  "\n";
				}
			}
		}
		
		return $out;
	}
}
