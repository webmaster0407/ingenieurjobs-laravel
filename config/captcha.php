<?php

return [
	'characters' => [
		'2', '3', '4', '6', '7', '8', '9',
		'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'm', 'n', 'p', 'q', 'r', 't', 'u', 'x', 'y', 'z',
		'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'M', 'N', 'P', 'Q', 'R', 'T', 'U', 'X', 'Y', 'Z'
	],
	
	'default' => [
		'length'    => mt_rand(5, 9),
		'width'     => 180,
		'height'    => 50,
		'quality'   => 90,
		'math'      => false,
		'expire'    => 60, // Stateless/API captcha expiration
		'encrypt'   => true,
		'sensitive' => false,
	],
	
	'math' => [
		'length'  => 5,
		'width'   => 180,
		'height'  => 50,
		'quality' => 90,
		'math'    => true, // Enable Math Captcha
		'encrypt' => true,
		'expire'  => 60,
	],
	
	'flat' => [
		'length'     => mt_rand(4, 6),
		'width'      => 160,
		'height'     => 50,
		'quality'    => 90,
		'lines'      => mt_rand(1, 5),
		'angle'      => mt_rand(0, 20),
		'bgImage'    => false,
		'bgColor'    => '#ecf2f4',
		'fontColors' => ['#2c3e50', '#c0392b', '#16a085', '#c0392b', '#8e44ad', '#303f9f', '#f57c00', '#795548'],
		'contrast'   => mt_rand(-20, 5),
		'encrypt'    => true,
		'expire'     => 60,
		'sensitive'  => false,
	],
	
	'inverse' => [
		'length'    => mt_rand(4, 6),
		'width'     => 160,
		'height'    => 50,
		'quality'   => 90,
		'sensitive' => true,
		'angle'     => mt_rand(0, 20),
		'sharpen'   => mt_rand(0, 10),
		'blur'      => mt_rand(0, 4),
		'invert'    => true,
		'contrast'  => mt_rand(-20, 5),
		'expire'    => 60,
	],
	
	'mini' => [
		'length' => 3,
		'width'  => 60,
		'height' => 32,
		'expire' => 60,
	],
	
	'custom' => [
		'length'     => mt_rand(4, 6),
		'width'      => 160,
		'height'     => 50,
		'quality'    => 90,
		'math'       => false, // Enable Math Captcha
		'expire'     => 60,    // Stateless/API captcha expiration
		'encrypt'    => false,
		'lines'      => mt_rand(1, 5),
		'bgImage'    => false,
		'bgColor'    => '#ecf2f4',
		'fontColors' => ['#2c3e50', '#c0392b', '#16a085', '#c0392b', '#8e44ad', '#303f9f', '#f57c00', '#795548'],
		'sensitive'  => false,
		'angle'      => mt_rand(0, 20),
		'sharpen'    => mt_rand(0, 10),
		'blur'       => mt_rand(0, 4),
		'invert'     => false,
		'contrast'   => mt_rand(-20, 5),
	],
];
