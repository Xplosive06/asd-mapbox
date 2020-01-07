<?php

/**
 *  @package AsdMapBox
 */

namespace Inc\Base;

use \Inc\Base\BaseController;

class Enqueue extends BaseController
{
  public function register()
  {
    add_action('admin_enqueue_scripts', array($this, 'enqueue'));
  }

  function enqueue()
  {
    // enqueue all our scripts
    wp_enqueue_style('mypluginstyle', $this->plugin_url . 'assets/css/style.css');
    wp_enqueue_script('mypluginscript', $this->plugin_url . 'assets/js/fixstepindicator.js');
    wp_enqueue_script('mypluginscript', $this->plugin_url . 'assets/js/map.js');
    wp_enqueue_script('mypluginscript', $this->plugin_url . 'assets/js/nextprev.js');
    wp_enqueue_script('mypluginscript', $this->plugin_url . 'assets/js/showtab.js');
  }
}
