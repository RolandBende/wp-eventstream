=== WP EventStream ===
Contributors: yourusername
Tags: tracking, analytics, json, woocommerce, events, endpoint
Requires at least: 5.5
Tested up to: 6.5
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Real-time event tracking for WordPress and WooCommerce. Sends key user interactions to a custom endpoint in JSON format.

== Description ==

WP EventStream tracks key user interactions on your WordPress and WooCommerce site, including:

- Page views
- Search events
- Archive (category/tag) views
- Product views
- Add to cart
- Purchases

Each event is sent to a user-defined endpoint as a structured JSON payload, enabling custom analytics pipelines or server-side logging.

== Installation ==

1. Upload the plugin folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the "Plugins" menu in WordPress.
3. Go to Settings > WP EventStream to configure your endpoint URL.

== Frequently Asked Questions ==

= Can I customize which events are tracked? =  
Yes, developers can use filters to add or remove event types.

= Is this GDPR compliant? =  
This plugin does not store data itself and respects user privacy. However, you are responsible for handling data on the receiving server side.

== Screenshots ==

1. Settings page for endpoint configuration.
2. Example JSON payload.

== Changelog ==

= 1.0.0 =
* Initial release with core tracking: pageView, search, archiveView, viewItem, addToCart, purchase.

== Upgrade Notice ==

= 1.0.0 =
First stable release of WP EventStream.

== License ==

This plugin is licensed under the GPLv2 or later.