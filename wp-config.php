<?php

define('FS_METHOD', 'direct');

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbs600423' );

/** MySQL database username */
define( 'DB_USER', 'dbu736117' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PKUYUZYyaBoVhIAywGFY' );

/** MySQL hostname */
define( 'DB_HOST', 'db5000643912.hosting-data.io' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '!O`6&RGITda2P(H_M]P<Uh<PcDU}Sb(@CV=[KaS}MZm9Xo~G%HgtfF-w*y>(mTm~' );
define( 'SECURE_AUTH_KEY',   'nqs{ |$#};N@32_vZ2cLzwW(B*X=0vO6sGP?+6S!g1V%4sR,}-/]O}LIa)a3T7bB' );
define( 'LOGGED_IN_KEY',     'GFA:r*jJL: D!B&a<CCQPEa{prlO(h$]=hmu1;WYiU`{f bErZy/[~,DQ~naNJ[B' );
define( 'NONCE_KEY',         'fp?^1 @]~sp1lGpalO6a<4`@3Qt!Z`/[fH!MYL%5B9RBzy,{f;0Fe+UY1c/90V(1' );
define( 'AUTH_SALT',         'm+A!!*J-)k)3km:V?ASPs[}IS:co9m(J}4#50i%Td=0$U)o-!)G_nm6Lmn:cBF.2' );
define( 'SECURE_AUTH_SALT',  'fNV`0cJ0hF[[s!rlA{9M:Q+#5M$t*+&>r@XJa,8V]{do`DmudMP{m*AHFu}XdIW)' );
define( 'LOGGED_IN_SALT',    '?NpH=A#E_Zb(g2r$}~BKyk&>Jq_>=Mk==4O0bI87hS!hdqP!/CTN7=2{:)gJj/Mw' );
define( 'NONCE_SALT',        ':#?!Y%cyQ}zZU|)07H #W4ZFyh6`9gVlq(s2liQ#<FKJ)Hg;RJAEL{x3<EOcV(l`' );
define( 'WP_CACHE_KEY_SALT', 'DvG9:otr`n8^C)w%os.)M r@JSaJ{ZwQN=YEIFUTqC~5-@r7n?kJp0Ao/#0Z$KiN' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'qvMAuZTw';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
