<?php
/**
 * RandomColor 1.0.4
 *
 * PHP port of David Merfield JavaScript randomColor
 * https://github.com/davidmerfield/randomColor
 *
 *
 * The MIT License (MIT)
 *
 * Copyright (c) 2014 Damien "Mistic" Sorel
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace App\Helpers;

class RandomColor
{
	static public $dictionary = null;
	
	private function __construct() {}
	
	static public function one(array $options = [])
	{
		$h = self::_pickHue($options);
		$s = self::_pickSaturation($h, $options);
		$v = self::_pickBrightness($h, $s, $options);
		
		return self::format(compact('h', 's', 'v'), @$options['format']);
	}
	
	static public function many(int $count, array $options = []): array
	{
		$colors = [];
		
		for ($i = 0; $i < $count; $i++) {
			$colors[] = self::one($options);
		}
		
		return $colors;
	}
	
	static public function format(array $hsv, string $format = null)
	{
		$format = !empty($format) ? $format : 'hex';
		
		switch ($format) {
			case 'hsv':
				return $hsv;
			
			case 'hsl':
				return self::hsv2hsl($hsv);
			
			case 'hslCss':
				$hsl = self::hsv2hsl($hsv);
				
				return 'hsl(' . $hsl['h'] . ',' . $hsl['s'] . '%,' . $hsl['l'] . '%)';
			
			case 'rgb':
				return self::hsv2rgb($hsv);
			
			case 'rgbCss':
				return 'rgb(' . implode(',', self::hsv2rgb($hsv)) . ')';
			
			case 'hex':
			default:
				return self::hsv2hex($hsv);
		}
	}
	
	static private function _pickHue(array $options)
	{
		$range = self::_getHueRange($options);
		
		if (empty($range)) {
			return 0;
		}
		
		$hue = self::_rand($range, $options);
		
		// Instead of storing red as two separate ranges,
		// we group them, using negative numbers
		if ($hue < 0) {
			$hue = 360 + $hue;
		}
		
		return $hue;
	}
	
	static private function _pickSaturation(int $h, array $options)
	{
		if (@$options['hue'] === 'monochrome') {
			return 0;
		}
		if (@$options['luminosity'] === 'random') {
			return self::_rand([0, 100], $options);
		}
		
		$colorInfo = self::_getColorInfo($h);
		$range = $colorInfo['s'];
		
		switch (@$options['luminosity']) {
			case 'bright':
				$range[0] = 55;
				break;
			
			case 'dark':
				$range[0] = $range[1] - 10;
				break;
			
			case 'light':
				$range[1] = 55;
				break;
		}
		
		return self::_rand($range, $options);
	}
	
	static private function _pickBrightness(int $h, int $s, array $options)
	{
		if (@$options['luminosity'] === 'random') {
			$range = [0, 100];
		} else {
			$range = [
				self::_getMinimumBrightness($h, $s),
				100,
			];
			
			switch (@$options['luminosity']) {
				case 'dark':
					$range[1] = $range[0] + 20;
					break;
				
				case 'light':
					$range[0] = ($range[1] + $range[0]) / 2;
					break;
			}
		}
		
		return self::_rand($range, $options);
	}
	
	static private function _getHueRange(array $options)
	{
		$ranges = [];
		
		if (isset($options['hue'])) {
			if (!is_array($options['hue'])) {
				$options['hue'] = [$options['hue']];
			}
			
			foreach ($options['hue'] as $hue) {
				if ($hue === 'random') {
					$ranges[] = [0, 360];
				} else if (isset(self::$dictionary[$hue])) {
					$ranges[] = self::$dictionary[$hue]['h'];
				} else if (is_numeric($hue)) {
					$hue = intval($hue);
					
					if ($hue <= 360 && $hue >= 0) {
						$ranges[] = [$hue, $hue];
					}
				}
			}
		}
		
		if (($l = count($ranges)) === 0) {
			return [0, 360];
		} else if ($l === 1) {
			return $ranges[0];
		} else {
			return $ranges[self::_rand([0, $l - 1], $options)];
		}
	}
	
	static private function _getMinimumBrightness(int $h, int $s)
	{
		$colorInfo = self::_getColorInfo($h);
		$bounds = $colorInfo['bounds'];
		
		for ($i = 0, $l = count($bounds); $i < $l - 1; $i++) {
			$s1 = $bounds[$i][0];
			$v1 = $bounds[$i][1];
			$s2 = $bounds[$i + 1][0];
			$v2 = $bounds[$i + 1][1];
			
			if ($s >= $s1 && $s <= $s2) {
				$m = ($v2 - $v1) / ($s2 - $s1);
				$b = $v1 - $m * $s1;
				
				return $m * $s + $b;
			}
		}
		
		return 0;
	}
	
	static private function _getColorInfo(int $h)
	{
		// Maps red colors to make picking hue easier
		if ($h >= 334 && $h <= 360) {
			$h -= 360;
		}
		
		foreach (self::$dictionary as $color) {
			if ($color['h'] !== null && $h >= $color['h'][0] && $h <= $color['h'][1]) {
				return $color;
			}
		}
	}
	
	static private function _rand(array $bounds, array $options)
	{
		if (isset($options['prng'])) {
			return $options['prng']($bounds[0], $bounds[1]);
		} else {
			return mt_rand($bounds[0], $bounds[1]);
		}
	}
	
	static public function hsv2hex(array $hsv): string
	{
		$rgb = self::hsv2rgb($hsv);
		$hex = '#';
		
		foreach ($rgb as $c) {
			$hex .= str_pad(dechex($c), 2, '0', STR_PAD_LEFT);
		}
		
		return $hex;
	}
	
	static public function hsv2hsl(array $hsv): ?array
	{
		extract($hsv);
		
		if (!isset($h)) return null;
		if (!isset($s)) return null;
		if (!isset($v)) return null;
		
		$s /= 100;
		$v /= 100;
		$k = (2 - $s) * $v;
		
		return [
			'h' => $h,
			's' => round($s * $v / ($k < 1 ? $k : 2 - $k), 4) * 100,
			'l' => $k / 2 * 100,
		];
	}
	
	static public function hsv2rgb(array $hsv): ?array
	{
		extract($hsv);
		
		if (!isset($h)) return null;
		if (!isset($s)) return null;
		if (!isset($v)) return null;
		
		$h /= 360;
		$s /= 100;
		$v /= 100;
		
		$i = floor($h * 6);
		$f = $h * 6 - $i;
		
		$m = $v * (1 - $s);
		$n = $v * (1 - $s * $f);
		$k = $v * (1 - $s * (1 - $f));
		
		$r = 1;
		$g = 1;
		$b = 1;
		
		switch ($i) {
			case 0:
				[$r, $g, $b] = [$v, $k, $m];
				break;
			case 1:
				[$r, $g, $b] = [$n, $v, $m];
				break;
			case 2:
				[$r, $g, $b] = [$m, $v, $k];
				break;
			case 3:
				[$r, $g, $b] = [$m, $n, $v];
				break;
			case 4:
				[$r, $g, $b] = [$k, $m, $v];
				break;
			case 5:
			case 6:
				[$r, $g, $b] = [$v, $m, $n];
				break;
		}
		
		return [
			'r' => floor($r * 255),
			'g' => floor($g * 255),
			'b' => floor($b * 255),
		];
	}
}

/*
 * h=hueRange
 * s=saturationRange : bounds[0][0] ; bounds[-][0]
 */
RandomColor::$dictionary = [
	'monochrome' => [
		'bounds' => [[0, 0], [100, 0]],
		'h'      => null,
		's'      => [0, 100],
	],
	'red'        => [
		'bounds' => [[20, 100], [30, 92], [40, 89], [50, 85], [60, 78], [70, 70], [80, 60], [90, 55], [100, 50]],
		'h'      => [-26, 18],
		's'      => [20, 100],
	],
	'orange'     => [
		'bounds' => [[20, 100], [30, 93], [40, 88], [50, 86], [60, 85], [70, 70], [100, 70]],
		'h'      => [19, 46],
		's'      => [20, 100],
	],
	'yellow'     => [
		'bounds' => [[25, 100], [40, 94], [50, 89], [60, 86], [70, 84], [80, 82], [90, 80], [100, 75]],
		'h'      => [47, 62],
		's'      => [25, 100],
	],
	'green'      => [
		'bounds' => [[30, 100], [40, 90], [50, 85], [60, 81], [70, 74], [80, 64], [90, 50], [100, 40]],
		'h'      => [63, 178],
		's'      => [30, 100],
	],
	'blue'       => [
		'bounds' => [[20, 100], [30, 86], [40, 80], [50, 74], [60, 60], [70, 52], [80, 44], [90, 39], [100, 35]],
		'h'      => [179, 257],
		's'      => [20, 100],
	],
	'purple'     => [
		'bounds' => [[20, 100], [30, 87], [40, 79], [50, 70], [60, 65], [70, 59], [80, 52], [90, 45], [100, 42]],
		'h'      => [258, 282],
		's'      => [20, 100],
	],
	'pink'       => [
		'bounds' => [[20, 100], [30, 90], [40, 86], [60, 84], [80, 80], [90, 75], [100, 73]],
		'h'      => [283, 334],
		's'      => [20, 100],
	],
];
