<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'deltahouse-vFML' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Uhfe=,W]fK>X$dHl5gLgc+9{J=1kN5NQ*b%+aNioN~kY=cNn23K_LB<<#}mNv18|' );
define( 'SECURE_AUTH_KEY',   '1]^ak; rUnk?7l%w#Q6t6%R)=(0yHna6oyfCz3%g&MNd[Px@s~Xo.TUxx)yq__$o' );
define( 'LOGGED_IN_KEY',     '`:95-oo`wRAvT4~ bH *u/V!R/zunIUy8ZMgJO8L3Eu(@CH.TQ:V^[|3K|NdlpD ' );
define( 'NONCE_KEY',         'PF@-dizOE-LCc|}7]wMJdHz@P56u!>C&*wri^5x}vr>m^]#!{A<Y^`oRiKo.s5U[' );
define( 'AUTH_SALT',         'WDry|Nh]3[)Te+0FoY&L-8~z4lyRm f0Ljb4*hIAzD9B<<+zl4B]>:rV@CKmO>B_' );
define( 'SECURE_AUTH_SALT',  'MclDTk0 5%#uUA;|25q|4FeDzaU$J/1W(FwJrbxK548t=[$;Usix3P63}aSq%mi]' );
define( 'LOGGED_IN_SALT',    ',t21e=_75DJ<{$,D*~,dabC_:{Ri`sqKM?ByLAU-[$(T=o{Di(jz^:=zzir:OwqM' );
define( 'NONCE_SALT',        'j($vwGn/>*UJgzNGV9R$kfi0/eM*=^HZG5!2cCI#G,9Q|d2USKDFM &lE,S!|^6o' );
define( 'WP_CACHE_KEY_SALT', 'wh2QSk7{wPH#DQ<79hy%* /C^nmD]Pk#hvBC@G7xt{n(=JlV@gf}j]M6yxooG~Qe' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
