<?php

/**
 * Plugin Name:       Business Directory Post Types and Taxonomies
 * Plugin URI:        http://github.com/jcasabona/lil-post-types/
 * Description:       A simple plugin for creating custom post types and taxonomies related to a business directory.
 * Version:           1.0.0
 * Author:            Joe Casabona
 * Author URI:        https:/casabona.org/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       lil-post-types
 * Domain Path:       /languages
 */

// IF WP isn't accessing this file, then don't let anything happen with this file
if (!defined('WPINC')) {
  die;
}

define('LIL_VERSION', '1.0.0');
define('LILDOMAIN', 'lil-post-types');
define('LILPATH', plugin_dir_path(__FILE__));
