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
define( 'DB_NAME', 'tanggapcovid19' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K+e!IDM2P_5:.HUQIdk$ieE}Xfl<D$s!_(5J^dK2,z!Kn(aeLTcWu{z,`3BN/?3^' );
define( 'SECURE_AUTH_KEY',  'dAHxc^E[`jv0[Twf[Wai@& m2.d[?W( L!g$Y0.4SUEYm<GxoHhFR`v#7Hk>TL;Q' );
define( 'LOGGED_IN_KEY',    'h<AkM#9`cs#k9#lDuW8vF{x|)&&CV$Yc9t9b<%b$$TZ=PN_96zCg#EudJ6(&]j]`' );
define( 'NONCE_KEY',        '8LssDX?XYEe/3>ZaJ)BDncpllbjE}kNV:IGz}N-2^WDW8wHIYRCaqKxNm Ah#hFe' );
define( 'AUTH_SALT',        ' .3qFx.%;4qH:;ZPo7Q:X|>0J|ICw: `_hLbe$LyGYYZ<<AQ6|&4i_iEL*SmB{7r' );
define( 'SECURE_AUTH_SALT', '}BFOL4>Tg?fFh[xo)M/%c4B:a7sq`yb<ePSphO5 }VbMPx7){6<xo{H )7MJ0*:c' );
define( 'LOGGED_IN_SALT',   'id)U(&TBjeZU&DCf?cu95r @j9 2b37*y)!08#{4xz[aM{!VaFSCx_6ob=??EWhV' );
define( 'NONCE_SALT',       '<~!2%SdR;<9;dO-|Rz(Y!6g}DHpT&ll|u$:%&1l]tbibZ]JD7^>TUDWNH@{SvDh2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
