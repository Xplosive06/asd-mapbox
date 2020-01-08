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
    add_action('admin_enqueue_scripts', array($this, 'backEnqueue'));
    add_action('wp_enqueue_scripts', array($this, 'frontEnqueue'));
  }

  function backEnqueue()
  {
    // enqueue all our scripts
    wp_enqueue_style('back-style', $this->plugin_url . 'assets/css/style2.css');
    wp_enqueue_script('tabs-script', $this->plugin_url . 'assets/js/tabs.js');
  }

  function frontEnqueue()
  {
    // enqueue all our scripts
    wp_enqueue_style('front-style', $this->plugin_url . 'assets/css/style.css');
    wp_enqueue_script('map-script', $this->plugin_url . 'assets/js/map.js');
    wp_enqueue_script('fixstepindicator-script', $this->plugin_url . 'assets/js/fixstepindicator.js');
    wp_enqueue_script('nextprev-script', $this->plugin_url . 'assets/js/nextprev.js');
    wp_enqueue_script('showtab-script', $this->plugin_url . 'assets/js/showtab.js');
  }
}
