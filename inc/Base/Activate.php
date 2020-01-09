<?php
/**
 *  @package AsdMapBox
 */

namespace Inc\Base;

class Activate
{
  public static function activate() {
    flush_rewrite_rules();

    if (get_option('asd_mapbox')) {
      return;
    }

    $default = array();

		update_option( 'asd_mapbox', $default );
  }
}