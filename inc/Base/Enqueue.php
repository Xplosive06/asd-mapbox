<?php

/**
 *  @package AsdMapBox
 */

namespace Inc\Base;

class Enqueue
{
  public function register()
  {
    add_action('admin_enqueue_scripts', array($this, 'enqueue'));
  }

  function enqueue()
  {
    // enqueue all our scripts
    wp_enqueue_style('mypluginstyle', PLUGIN_URL . 'assets/css/style.css');
    wp_enqueue_script('mypluginscript', PLUGIN_URL . 'assets/js/fixstepindicator.js');
    wp_enqueue_script('mypluginscript', PLUGIN_URL . 'assets/js/map.js');
    wp_enqueue_script('mypluginscript', PLUGIN_URL . 'assets/js/nextprev.js');
    wp_enqueue_script('mypluginscript', PLUGIN_URL . 'assets/js/showtab.js');
  }
}
