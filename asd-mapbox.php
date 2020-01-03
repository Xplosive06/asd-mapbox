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

define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));

if (class_exists('Inc\\Init')) {
	Inc\Init::register_services();
}