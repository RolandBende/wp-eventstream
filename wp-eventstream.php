<?php
/*
Plugin Name: WP EventStream
Plugin URI: https://github.com/RolandBende/wp-eventstream
Description: Real-time event tracking for WordPress & WooCommerce. Sends user interactions to a custom endpoint.
Author: Roland Bende
Author URI: https://rolandbende.com
License: GPLv2 or later
Text Domain: wp-eventstream
Version: 1.0.0
*/

defined('ABSPATH') || exit;

define('WP_EVENTSTREAM_VERSION',               '1.0.0');
define('WP_EVENTSTREAM_FILE',                  __FILE__);
define('WP_EVENTSTREAM_PLUGIN_BASENAME',       plugin_basename(WP_EVENTSTREAM_FILE));
define('WP_EVENTSTREAM_PLUGIN_NAME',           trim(dirname(WP_EVENTSTREAM_PLUGIN_BASENAME), '/'));
define('WP_EVENTSTREAM_TEXT_DOMAIN',           WP_EVENTSTREAM_PLUGIN_NAME);
define('WP_EVENTSTREAM_PATH',                  realpath(plugin_dir_path(WP_EVENTSTREAM_FILE)) . '/');
define('WP_EVENTSTREAM_INC_PATH',              realpath(WP_EVENTSTREAM_PATH . 'includes/') . '/');

require_once WP_EVENTSTREAM_INC_PATH . 'bootstrap.php';
