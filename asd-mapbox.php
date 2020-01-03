<?php

/**
 *  @package AsdMapBox
 */
/*
Plugin Name: ASD MapBOX
Description: Add a form to a MapBox
Version: 0.1
Author: Mike Notta
*/

defined('ABSPATH') or die('Hey, what are you doing here? You silly human!');

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
	require dirname(__FILE__) . '/vendor/autoload.php';
}

if (class_exists('Inc\\Init')) {
	Inc\Init::register_services();
}