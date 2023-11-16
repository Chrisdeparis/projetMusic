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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'music' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ':HC9:%nO{t5W9agFtbQ;R.kI_Q+Np?< Omj/7Yl@c`}~)&Dl@tOT{}*-ExG.+( >' );
define( 'SECURE_AUTH_KEY',  '~K#cV*1!lv&`3z]{H7,V_p.&[A8C!`nA,6T2o$ &+~0[$(HAwa-aFFIi%j5P!K&S' );
define( 'LOGGED_IN_KEY',    'QQY~+IzRd^5oUk;p#<CRYcR@^ELFlWc-sO7h{Xf/&)vf}A[P? 7`eW)sX=o9~;qp' );
define( 'NONCE_KEY',        ':+jQ-TCTz%&?9*X!!BUuxnK6rC(995apL8wfAiEU[~m`Dfmmn-NkJ# R2=&TMvq>' );
define( 'AUTH_SALT',        '|6qXDvaRH_!sNlS,?jz:cO [`~N|&%~Eg6gCwgR7& zH8|UuSY{xe$&{}|Og#@Jt' );
define( 'SECURE_AUTH_SALT', '(<8g.5j=ss2q|jnBC~>-_V5`)JnUt2Sah]$:N(rc[*bFM;JOS=M@{W%PQqgdwx&a' );
define( 'LOGGED_IN_SALT',   '>A:J8YriP7A1P{^_t(,l8U;[<U(SII^b_E5$jyR%uEZT,4~NWcHXR5rS6pqc#m,C' );
define( 'NONCE_SALT',       'Rp*[^D2}Jdjf7Z 0/wy~a]J]w8S7D7u*tyvf1]b3BsZA62q|^m<u5E^$-r)X>CKK' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
