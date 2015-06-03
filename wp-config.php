<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'database_name_here');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'username_here');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'password_here');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

define('WP_HOME', 'http://localhost:8080');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E$-E8:+$}ldYuD!%_dQ+Q4Q0UF%%Sop+(i/Py(EZi7*3BBn+~}PLv0>sIm{}cNv-');
define('SECURE_AUTH_KEY',  '^<b#{f?aWYo75KfzCDQN#Uid~OD5Oz-IE2`e+Gum;P#Xk*rhQ+7@*{Z?Jvcsr-Qd');
define('LOGGED_IN_KEY',    '6KpE{]oK4!H$z`k)dDyJkO-?9i*|YB@I1_#B-Q=?}=hMtsyi8Zy9BgZYVqF+,o_,');
define('NONCE_KEY',        'h lgN|SlO1UT~#!eT;7Gh+`KBTbEn8r@0@}79v9I]%4*v_jt 5RY;^-0sRn+M$#S');
define('AUTH_SALT',        'sFV@sv61QhtA33Q/vH[/DH2-IFuCAhN)gJgGDP/Iv|u%+iFgU;Tp8+C-|aXyd8(;');
define('SECURE_AUTH_SALT', '!.t`CHs e ivBu g3174k,N1+ZLT$z_^/lD}hnM-y&?MH+[_K7=w&Os>Wso_vA@Y');
define('LOGGED_IN_SALT',   'Gbb?%<U9=I|`).{![EL^^@n&mI{l?m: /?#qd;Yhf~N$,TAY]hk-=^Du%OVso(bk');
define('NONCE_SALT',       '2L>+nA5LN -sF8tp}>9WzxQVvRlzb;wC_I|/%+q H s+H1`mlP`5 7iK<LBna/Iw');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', true);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
