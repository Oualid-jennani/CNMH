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
define( 'DB_NAME', 'cnmh' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'TdP@uxR3_LCOq/ }=0E(@}Gp$mvn xdtWShn8rs[u~}RR/D4,_hi ],wXwtY?UmE' );
define( 'SECURE_AUTH_KEY',  '~q%W_)}D.sIOb(dcDE^1$~39g-C>kU${lZ9!3+_ p/;ktf_g<KKp.Ds2/d}ah!kR' );
define( 'LOGGED_IN_KEY',    ',6}?ap{9S`[vDf3]8w?JT}OZyZ?RNZy:S]YH4VHv{u+Q*evE)dvGBPL?(z11z)%W' );
define( 'NONCE_KEY',        'Hg:Q11Df%,scJtn91:Z)I4+/h+mLziI9WeX*87<w%_`WFQ{b?w^u%Pt)-1#<3Z.E' );
define( 'AUTH_SALT',        'eG7N2w<9Q^- Z/M|K&6*A5I8tgE9eo]eH $A&q#0Y!(f}w~z3yZk)UC;#S##Op)u' );
define( 'SECURE_AUTH_SALT', 'ZeNWsGAiDRvQ=CEy&q,O3#g{&!t2.._IK(tdlI4v=zx.jNCigQsCU8Elw5>)Yj+]' );
define( 'LOGGED_IN_SALT',   'ILvpzv)(<-~E?T`m>dSB%J*oOeiWv%zy?i%?BMbO7#y^?//oN8!}HwjJ!m`pQPve' );
define( 'NONCE_SALT',       'S!hF.~;-TrSyPXE,W(BJ!s15&H{C2Jst8ixohodE3YPhpu[RH(U7cY@L Dj?W<8r' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
