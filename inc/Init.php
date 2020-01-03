<?php
/**
 *  @package AsdMapBox
 */

namespace Inc;

final class Init
{
  public static function register_services() {

  }
}

/* use Inc\Activate;
use Inc\Deactivate;

if (!class_exists('AsdMapBox')) {

	class AsdMapBox
	{
		public $plugin;

		function __construct()
		{
			$this->plugin = plugin_basename(__FILE__);
		}

		function register()
		{
			add_action('admin_enqueue_scripts', array($this, 'enqueue'));
			add_action('admin_menu', array($this, 'add_admin_pages'));
			add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
		}

		public function settings_link($links)
		{
			$settings_link = '<a href="admin.php?page=asd-mapbox">Settings</a>';
			array_push($links, $settings_link);
			return $links;
		}
		
		public function add_admin_pages()
		{
			add_menu_page('ASD MapBOX', 'ASD MapBOX', 'manage_options', 'asd-mapbox', array($this, 'admin_index'), 'dashicons-store', 110);
		}

		public function admin_index()
		{
			require_once plugin_dir_path(__FILE__) . 'templates/admin.php';
		}

		protected function create_post_type()
		{
			add_action('init', array($this, 'custom_post_type'));
		}

		function custom_post_type()
		{
			register_post_type('book', ['public' => true, 'label' => 'Books']);
		}

		function enqueue()
		{
			// enqueue all our scripts
			wp_enqueue_style('mypluginstyle', plugins_url('/assets/css/style.css', __FILE__));
			wp_enqueue_script('mypluginscript', plugins_url('/assets/js/fixstepindicator.js', __FILE__));
			wp_enqueue_script('mypluginscript', plugins_url('/assets/js/map.js', __FILE__));
			wp_enqueue_script('mypluginscript', plugins_url('/assets/js/nextprev.js', __FILE__));
			wp_enqueue_script('mypluginscript', plugins_url('/assets/js/showtab.js', __FILE__));
		}

		function activate()
		{
			Activate::activate();
		}
	}

	$asdMapBox = new AsdMapBox();
	$asdMapBox->register();
	// activation
	register_activation_hook(__FILE__, array($asdMapBox, 'activate'));
	// deactivation
	register_deactivation_hook(__FILE__, array('Deactivate', 'deactivate'));
}
 */