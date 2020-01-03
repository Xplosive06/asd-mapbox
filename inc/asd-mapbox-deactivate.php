<?php

class AsdMapBoxDeactivate
{
  public static function deactivate() {
    flush_rewrite_rules();
  }
}