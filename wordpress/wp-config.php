<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'woedpress' );

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
define( 'AUTH_KEY',         ')sq>B*!mdwm1h.xa1?PbhV/eR,1dh>l&P4f[N0IN.tf4:HC#v{1A, #rC236rr.L' );
define( 'SECURE_AUTH_KEY',  '}j_PQP>LZh1(g4Q]}az3^]*9OU=%^sK-<#emQ<r0(E? a;<kK=;(ArVYp4|dR%s[' );
define( 'LOGGED_IN_KEY',    '_>Y_Kgl7JWY{d044BWab@m6O-]b+ib^.M1SOu[[ wNXojhZqA4,9N}e[Gsq]=0V-' );
define( 'NONCE_KEY',        'w3oa?*b[/8!!F5y<x_{>!Zn!)5VLIQY#D6-tO~ w*o~<YSDyl7(yO$P48bPqyF_P' );
define( 'AUTH_SALT',        'QWh{1=kfsZ&Futb!X#ms2&4S~i#t1;mk#M0w0bi8YI$>YH~Gw/|~+8)9b_+!es4x' );
define( 'SECURE_AUTH_SALT', '[=v/#s:Ny(Xa(F:$Klc&MpkOgEZ|Z<9n`/b@8x&sVjFWEsf!A4|L-{^BtJqei88Q' );
define( 'LOGGED_IN_SALT',   'DnE[$A:a<5w^WlN/U%C0]tQpo-1;drSu36~wvwDirazyVXT#;+*|WSq|e$L_Yy~d' );
define( 'NONCE_SALT',       'sBKlQ8AXSv)bYl`RlTlcX#BjuET~}F7{cm1 :+NVgx4gD-rd[5vV:_C/mH#*#ct{' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
