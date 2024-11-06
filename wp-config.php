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
define( 'DB_NAME', 'cellvers_wp755' );

/** Database username  cellvers_wp755*/
define( 'DB_USER', 'cellvers_wp755' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname m1.SwG1(p7 */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '8oejxktltnw1wh2acmu97d345ne5zrf12a5djvhsaiudnhf8icu0jyuxxvtjiuyv' );
define( 'SECURE_AUTH_KEY',  'vylzyl968vuuzgghah0qvmrsgm11unm7qsjtopndlqzkwsbvwspbrk0u5jvm90s0' );
define( 'LOGGED_IN_KEY',    'urapcavat6or2aqkcwjy0ntlo0glkeszlmsmrzfk1jgyr0drmyjwwh3yxy5oshtv' );
define( 'NONCE_KEY',        'kd1msfmqudypa88sztzkg81zq7tlzdtixam3ifac5qehwo2ojx6coecebppnsenl' );
define( 'AUTH_SALT',        '1feq9viz5advqapq2xx9yk8wkptvn2siavmgf9yfq6vrojyeggd4dy6hqyxrdgcg' );
define( 'SECURE_AUTH_SALT', 'tnz4rybfp7gmwvutqqskmqqtzsolrpei9dmaursel4cg9jqol3efq5oi4wepsxgk' );
define( 'LOGGED_IN_SALT',   'kbx878gv2ly578fzoddjvydwkrrsmy8bhdr6gfviacawfg3ng4bfrelx1zoy23jq' );
define( 'NONCE_SALT',       '9sn9dmzyexkhefytwg97ot8qfqybsbun9ltubrec3h2yphjxrxic3vgejnlkn3nc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppt_';

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
