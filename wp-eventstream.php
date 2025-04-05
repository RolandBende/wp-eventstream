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

defined( 'ABSPATH' ) || exit;

define( 'WPEVENTSTREAM_VERSION', '1.0.0' );

define( 'WPEVENTSTREAM_TEXT_DOMAIN', 'wp-eventstream' );

define( 'WPEVENTSTREAM_PLUGIN', __FILE__ );

define( 'WPEVENTSTREAM_PLUGIN_BASENAME', plugin_basename( WPEVENTSTREAM_PLUGIN ) );

define( 'WPEVENTSTREAM_PLUGIN_NAME', trim( dirname( WPEVENTSTREAM_PLUGIN_BASENAME ), '/' ) );

define( 'WPEVENTSTREAM_PLUGIN_DIR', untrailingslashit( dirname( WPEVENTSTREAM_PLUGIN ) ) );

require_once WPEVENTSTREAM_PLUGIN_DIR . '/bootstrap.php';