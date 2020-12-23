<?php
/**
 * Plugin name: update test
 * Description: This plugin is a plugin with the sole purpose of being automatically updated.
 * Version: 0.0.9
 * Requires at least: 5.6
 * Requires PHP: 7.4
 * Requires Snow Monkey: 12.0.0
 *
 * @package megane
 * @author megane9988
 * @license GPL-2.0+
 */


// パスを定数化
define( 'MGN_UPDATE_TEST_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'MGN_UPDATE_TEST_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );

require_once MGN_UPDATE_TEST_PATH . '/inc/auto-update.php';

// /**
//  * テキストドメインを宣言
//  */
// function rje_pattern_load_textdomain() {
// 	load_plugin_textdomain( 'rui-jin-en-pattern', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
// }
// add_action( 'plugins_loaded', 'rje_pattern_load_textdomain' );

// require_once MGN_UPDATE_TEST_PATH . '/inc/is-snow-monkey-theme.php';
// require_once MGN_UPDATE_TEST_PATH . '/inc/is-snow-monkey-blocks-plugin.php';
// require_once MGN_UPDATE_TEST_PATH . '/inc/load-register-block.php';
