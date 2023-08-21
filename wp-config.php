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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         '<L@$%s{$iW-]5e`jR!%$Saq -iA1wL)z3|Nglw^Eo.uSv B,;T-Qr0GgjBQu7%qO' );
define( 'SECURE_AUTH_KEY',  '6S!?K<1(R&s6WYJ-]=f%ezi;%4%sBI2Z)l`lXs98W{[si5;vX3mRpA`)ITej~J-x' );
define( 'LOGGED_IN_KEY',    ':$8?x~|^c~m(t81fn-V(/b|%tLZL-=O(dE`+GGeDKbWNJ}64q2uY[3dC]yqs<HWC' );
define( 'NONCE_KEY',        'R7ZW9Yk@/O%}O]y#neT!epRLfWti`+#n7CxObt&0}N):g-*<*9 *1p9wF4VYDB|J' );
define( 'AUTH_SALT',        'm&lmA=P(o1>WTn^W]|{K@NXItIYYKn[{||.b?fiL&&,%J<_8n*ls*=uD{U!(e&l/' );
define( 'SECURE_AUTH_SALT', '$a9-[t*BgpAQm,uUS7R,zoj,%1fk?Dor^<oag+]G/2<*,kti J|pyt]ef;F`*|YN' );
define( 'LOGGED_IN_SALT',   'E;CjEHMfVzUfRu.V{]=^fX!y<id.9|j,)Yi}= *<!s_b^ Q:845>K)o18) [rWfQ' );
define( 'NONCE_SALT',       'BP*EOmp:NT09lrt9@EV[mP$n=UN5,CPTH|[0TnP9?Xc-t{)33!4,TWPLC(o-7 -n' );

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
