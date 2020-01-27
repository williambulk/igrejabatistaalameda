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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'igrejabatistaalameda');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'WP_MEMORY_LIMIT', '256M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rKSyXPm?ux+f}=D uwhR)s3qZ-<dlMvUWlwo /WLZx,#%<i]DLIP/>QYc/7B}1&e');
define('SECURE_AUTH_KEY',  '@db|yhuNODX;Op,J:0K4@!RcU1T~SK=I].ey}KK--eM+0oOeU.(8azHeakcE-->^');
define('LOGGED_IN_KEY',    'U>(_q191oy|sv+lE@)6>=T=+U,/WbXI/~gzAoX:M&s*0fO!vPkAtG|Ime&tEpO;#');
define('NONCE_KEY',        '*^QXD;d~__Vovre^j-]sD!&A_q&v1oI&oG*YV>r4i,MS9kq%.L:vF,DzVEXGFm;)');
define('AUTH_SALT',        'dqKf<ScZ}K?4}[o+[J#,d=.B}2[U_-vPb9zZ?d3a_w8V3j8Bu7BMfo)g y~Y >(%');
define('SECURE_AUTH_SALT', 'MFy1eW}p3gu1FN!X+4L;Dj/Sxx<kCpR%W0P_+*i#s6/oD|ggu,02nF]/$cFH@o5P');
define('LOGGED_IN_SALT',   '`,DbJf&=+J&+vTtmxBQ[4?PozgNI+`^--v%qNole:Xz+-yY-u,d)@5dg)$;wWEQ9');
define('NONCE_SALT',       '&j}JW!7-BN 1B0TQ%d7cZ3MJndnMl`l+J/sb-Gc-t29bg4Yl|zt][#zoRQfp?%M,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */

/* That's all, stop editing! Happy blogging. */


/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','https://example.com');
 *  define('WP_SITEURL','https://example.com');
 *
*/

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//  Disable pingback.ping xmlrpc method to prevent Wordpress from participating in DDoS attacks
//  More info at: https://docs.bitnami.com/?page=apps&name=wordpress&section=how-to-re-enable-the-xml-rpc-pingback-feature

if ( !defined( 'WP_CLI' ) ) {
    // remove x-pingback HTTP header
    add_filter('wp_headers', function($headers) {
        unset($headers['X-Pingback']);
        return $headers;
    });
    // disable pingbacks
    add_filter( 'xmlrpc_methods', function( $methods ) {
            unset( $methods['pingback.ping'] );
            return $methods;
    });
    add_filter( 'auto_update_translation', '__return_false' );
}
