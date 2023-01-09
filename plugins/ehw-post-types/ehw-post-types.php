<?php

/**
 * Plugin Name:       Events Post Types and Taxononomies
 * Plugin URI:        https://github.com/codewizard13/ehw-tutwrk-linkedin-wp-custom-post-type
 * Description:       A simple plugin for creating event custom posts types
 * Version:           1.0.0
 * Author:            Eric Hepperle
 * Author URI:        https://erichepperle.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ehw-post-types
 * Domain Path:       /languages
 */

 if (! defined('WPINC')) {die;}

 define('EHW_VERSION', '1.0.0');
 define('EHWDOMAIN', 'ehw-post-types');
 define('EHWPATH', plugin_dir_path(__FILE__));

 require_once(EHWPATH . '/post-types/register.php');
 add_action('init', 'ehw_register_event_type');