<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'admin_distrito' );

/** Database username */
define( 'DB_USER', 'admin_admin' );

/** Database password */
define( 'DB_PASSWORD', 'David102006' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<zSWw+F&gU+v@MrXQJkpuf}/4Esoo}oQ<)((AC63gn?1qQ[OJ:qzt.2[H@(-jr`3' );
define( 'SECURE_AUTH_KEY',  '{EGQF!Rgj9|e($UDiC6IUYqq;m|w9x:d8mG.E?Ki1]iRx=+jA%Tyh/FX[LC{/Ir4' );
define( 'LOGGED_IN_KEY',    'cw6)rK9ZFbRPd8?URl0+HU*LY=%wq.uBjKNAFC#d-wQ``7(/,Dx.96/HLn4BwRHD' );
define( 'NONCE_KEY',        'N{^*mV^v>,|C^mhf+/q&^d~:7i&h$tmV6IbV|[I+Wj{kJW}uKE?s~*eQ_VcreuN7' );
define( 'AUTH_SALT',        '$UaG!0A94Rn{$^{aOD{*:d<)=iR6,,*@$V<!,kYq.8SrCn2L}[eV;&3T[n.:nu#M' );
define( 'SECURE_AUTH_SALT', '@9(PIPh(>%_m%-Ir<?u7JVA7*D)qP_yw02_z|S,$: d;]$2]Lz,aMi]m8r8Dz6+9' );
define( 'LOGGED_IN_SALT',   '3;@X<vK^Eoc/i)A3[Q426e%en^|r/i&hW!KJbIS~-vIOW e!$iI)B[t*HzZ ?U+q' );
define( 'NONCE_SALT',       '*!; k{me=L8a x,tfOAbpUc!%5Q,{ 3USJ|R`;ulf+F%L@K3SQFaQ2&ON)U}<+Bb' );

/**#@-*/

/**
 * WordPress database table prefix.
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

define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
