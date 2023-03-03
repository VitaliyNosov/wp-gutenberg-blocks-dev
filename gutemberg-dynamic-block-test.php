<?php
/**
 * Plugin Name:       Example Dynamic
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Vitaliy Nosov
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       gutemberg-dynamic-block-test
 *
 * @package           custom-dynamic-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function custom_dynamic_block_gutemberg_dynamic_block_test_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'custom_dynamic_block_gutemberg_dynamic_block_test_block_init' );
