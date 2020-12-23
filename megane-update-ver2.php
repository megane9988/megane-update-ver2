<?php
/**
 * Plugin name: 類人猿ブロックパターン（ベータ）test
 * Description: This plugin is a plugin with the sole purpose of being automatically updated.
 * Version: 1.0.0
 * Requires at least: 5.6
 * Requires PHP: 5.6
 * Requires Snow Monkey: 12.0.0
 *
 * @package megane
 * @author megane9988
 * @license GPL-2.0+
 */


/**
 * 定数を宣言
 */
define( 'RJE_PLUGIN_URL', plugins_url( '', __FILE__ ) );  // このプラグインのURL
define( 'RJE_PLUGIN_PATH', plugin_dir_path( __FILE__ ) ); // このプラグインのパス
define( 'RJE_BASENAME', plugin_basename( __FILE__ ) );    // このプラグインのベースネーム


use Inc2734\WP_GitHub_Plugin_Updater\Bootstrap as Updater;

/**
 * アップデートの有無の検知及び実施
 */
class RJEAutoUpdate {
	// 必ず実施する項目として_plugins_loadedを実施.
	public function __construct() {
		add_action( 'plugins_loaded', array( $this, '_plugins_loaded' ) );
	}
	// 実施する項目
	public function _plugins_loaded() {

		//翻訳ファイルの読み込み
		load_plugin_textdomain( 'ruijinen-block-patterns-beta', false, dirname( RJE_BASENAME ) . '/languages/' );

		// アップデート通知機能の読み込みによる、アップデートの有無の確認.
		add_action( 'init', array( $this, '_activate_autoupdate' ) );
	}

	/**
	 * Activate auto update using GitHub 自動アップデートの参照先の設定
	 *
	 * @return void
	 */
	public function _activate_autoupdate() {
		new Updater(
			plugin_basename( __FILE__ ),
			'megane9988',
			'megane-update-ver2'
		);
	}
}

new RJEAutoUpdate();

/**
 * inc ファイルの読み込み
 */
// Snow Monkey および Snow Monkey Blocks が有効化されていない場合の処理
// require_once RJE_PLUGIN_PATH . 'inc/activate.php';
// ブロックスタイル及びブロックパターンの設定の読み込み
// require_once RJE_PLUGIN_PATH . 'inc/load-register-block.php';
// 管理画面に通知を表示
// require_once RJE_PLUGIN_PATH . 'inc/notification-widget.php';

// composerの読み込み
require_once RJE_PLUGIN_PATH . '/vendor/autoload.php';
