<?php

/**
 *  @package AsdMapBox
 */

namespace Inc\Api\CallBacks;

use Inc\Base\BaseController;

class AdminCallbacks extends BaseController
{
  public function adminDashboard() {
    return require_once(plugin_dir_path(dirname(__FILE__, 3)) . "/templates/admin.php");
  }
}