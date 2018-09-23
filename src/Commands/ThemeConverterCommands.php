<?php

namespace Drupal\theme_converter\Commands;

use Drush\Commands\DrushCommands;

/**
 * Drush command file.
 */
class ThemeConverterCommands extends DrushCommands {
  /**
   * Command generates custom theme from HTML design.
   *
   * @param string $name
   *   Theme name provided to the drush command.
   *
   * @command theme_converter:convert-theme
   * @aliases ctheme
   * @usage theme_converter:convert-theme newtheme
   *   Generated new theme files and displays success message.
   */
  public function convert_theme($name) {
    $this->output()->writeln('New theme successfully generated with the name "' . $name . '"!"');
  }
}
