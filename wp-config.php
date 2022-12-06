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
define( 'DB_NAME', 'demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ';A:m7B=_zE@y%AnJuQ-!.NyagKInBK$X#~N=Loz@N.)7u~! 8iF;1VKIVKok)Q2B' );
define( 'SECURE_AUTH_KEY',  '[tA%PQWS|<4:;V(Y-hO^|fiQNebF5r5O;~Tr#NS gN{P!>Xp{UVN.D#]$D`PHQ)H' );
define( 'LOGGED_IN_KEY',    'Uiz }Qexy{![1XFF)|;V<!0-8;|pK[aJgp#Rj7qAVi{c;KAkF|E%{^og9otz-dPu' );
define( 'NONCE_KEY',        '|g4|o2$cfPYW=+%IQC~k~zd1kBhG]F*,PsL]=L[J[H9J~({@jfqZRlo&zkBpo ft' );
define( 'AUTH_SALT',        'r<AZrqG#,Wc;$oqw[+b-S|;+xKc{DHb4>_}w=6iBL]c&1$^SLX?8Kpr{+6BWkYa ' );
define( 'SECURE_AUTH_SALT', '`mcopeNE=u*t}/! !wg8ywk8aHnaM))wkR]=V;Ax}TY{73]b8wlwqw4~=A=!k%+3' );
define( 'LOGGED_IN_SALT',   'c7s!XEvdz:8!?+w@ 2ZAmfA2~2CCOYOEZ2`jO-m^3(B1H6Ae:!IQ:=/3vJV-3?v<' );
define( 'NONCE_SALT',       '3_R$ix7B}9V#?&~> =5I1pc)Y{guqB7j(ty7!.~y&+W6Se/uvI$x+mAn!@W[HB^9' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'demo_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
