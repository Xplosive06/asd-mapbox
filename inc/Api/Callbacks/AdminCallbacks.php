<?php

/**
 *  @package AsdMapBox
 */

namespace Inc\Api\Callbacks;

use Inc\Base\BaseController;

class AdminCallbacks extends BaseController
{
  public function adminDashboard()
  {
    return require_once(plugin_dir_path(dirname(__FILE__, 3)) . "/templates/admin.php");
  }

  public function settingsDashboard()
  {
    return require_once(plugin_dir_path(dirname(__FILE__, 3)) . "/templates/settings.php");
  }

  public function optionsDashboard()
  {
    return require_once(plugin_dir_path(dirname(__FILE__, 3)) . "/templates/options.php");
  }

  public function asdMapboxTextExample()
  {
    $value = esc_attr(get_option('text_example'));
    echo '<input type="text" class="regular-text" name="text_example" value="' . $value . '" placeholder="Write Something Here!">';
  }

  public function asdMapboxFirstName()
  {
    $value = esc_attr(get_option('first_name'));
    echo '<input type="text" class="regular-text" name="first_name" value="' . $value . '" placeholder="Write Your First Name!">';
  }
}
