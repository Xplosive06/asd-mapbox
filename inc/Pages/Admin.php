<?php

/**
 *  @package AsdMapBox
 */

namespace Inc\Pages;

use \Inc\Api\SettingsApi;
use \Inc\Base\BaseController;
use \Inc\Api\Callbacks\AdminCallbacks;

class Admin extends BaseController
{

  public $settings;
  public $callbacks;
  public $pages = array();
  public $subpages = array();

  public function register()
  {
    $this->settings = new SettingsApi();

    $this->callbacks = new AdminCallbacks();

    $this->setPages();

    $this->setSubpages();

    $this->settings->addPages($this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
  }

  public function addAdminMenu()
	{
		foreach ( $this->admin_pages as $page ) {
			add_menu_page( $page['page_title'], $page['menu_title'], $page['capability'], $page['menu_slug'], $page['callback'], $page['icon_url'], $page['position'] );
		}
  }
  
  public function setPages() {
    $this->pages = array(

      array(
        'page_title' => 'ASD MapBOX',
        'menu_title' => 'ASD MapBox',
        'capability' => 'manage_options',
        'menu_slug' => 'asd_mapbox',
        'callback' => array($this->callbacks, 'adminDashboard'),
        'icon_url' => 'dashicons-admin-site-alt3',
        'position' => 110
      )
    );
  }

  public function setSubpages () {
    $this->subpages = array(
      array(
        'parent_slug' => 'asd_mapbox',
        'page_title' => 'Settings',
        'menu_title' => 'Settings',
        'capability' => 'manage_options',
        'menu_slug' => 'asd_mapbox_set',
        'callback' => function() {
          echo '<h1>Settings</h1>';
        }
      ),
      array(
        'parent_slug' => 'asd_mapbox',
        'page_title' => 'Options List',
        'menu_title' => 'Options',
        'capability' => 'manage_options',
        'menu_slug' => 'asd_mapbox_list',
        'callback' => function() {
          echo '<h1>Options List</h1>';
        }
      ),
    );
  }
}
