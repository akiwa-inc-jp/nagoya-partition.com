<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'sddb0040037000');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'sd_dba_LTQxNzA2');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'FL6MfO#S');

/** MySQL のホスト名 */
define('DB_HOST', 'sddb0040037000.cgidb');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J->hvz{O^gqdG~0yl~b&2]bobh=[I!0&UZ2@n?}^+EyM6|%wvO`1Ws#]>1fPs?gb');
define('SECURE_AUTH_KEY',  'G6nlD(J>isdIQ,6$]g3>Vl61Mi>?a^Mj2XdRYZmkN~2+.$%[ ^`:#ZWrsGv6uu$g');
define('LOGGED_IN_KEY',    'DR7dC;97K=W+L2X<Q`!cLP${SX+F>l)cK*Z*L3X;nlr~di/wDRa{0A4QKt%[qEa`');
define('NONCE_KEY',        'NV#c^{Yz75hn WCNdc3v;?cnG7()}%g]^?g9 8y/F~=S~oIS|%a;|X#`l+~t:>7!');
define('AUTH_SALT',        'xPO^- _3QtTUTuU1FjFP&w|/JE5<R*VVWczwg~OZ9hB(sx^pgyg_|McSu45s{]kg');
define('SECURE_AUTH_SALT', '|s:gg-5sZtvR^.DBAe3Q|cm@8.gEe?Wh@3QuUh%V5v(F8dlm79@>Sq46N%Ss+FzV');
define('LOGGED_IN_SALT',   'va>T@JKGcM`c:YxyK:;8WoNJsX%o^dW]VIB-.v^U%9^[C5&1z8GJGVZfp#x`4*,2');
define('NONCE_SALT',       '>_$rJ>Jwb%6QChaAS.g!y8HviVEN|Ex)$lwtWF/t,ZXVi&::(A&J&4#gn}~ZV_vX');

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
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
