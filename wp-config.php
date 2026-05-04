<?php
define( 'WP_CACHE', true );

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_39645014_wp957' );

/** Database username */
define( 'DB_USER', '39645014_1' );

/** Database password */
define( 'DB_PASSWORD', '5!U.SEp44G' );

/** Database hostname */
define( 'DB_HOST', 'sql301.byetcluster.com' );

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
define( 'AUTH_KEY',         'qnqve3mnzefbub6jzfpt8rpkx8dbdfdia19gesk3gx1vmhu0gp7yikqthnoc9d3y' );
define( 'SECURE_AUTH_KEY',  'm1sn7i1mlssuilg0vi2f5njcecydpmihk4lbl7c0ynz1odqdfkhruecxov7qyvmr' );
define( 'LOGGED_IN_KEY',    'joihxzkudui3i72cyz9ayselpfvxba1pmnke6fhpk4mxvw43h9s8hel15235lwjm' );
define( 'NONCE_KEY',        'mytv1om3knd45fehboj9aybimbtntjknr0gz2ujpghn277vpgluftajxspklvyi3' );
define( 'AUTH_SALT',        'xft9wvulsm5dgq14hjnvt832h5xg2xvnnhcfppl8ljvwzh62mdpjuu8jrtmfds2z' );
define( 'SECURE_AUTH_SALT', '2w5kzhyyaazdxojldmjmzqqifobg6vzxapszrwz0orrrdv4kew7gyzrgvxw9l3dp' );
define( 'LOGGED_IN_SALT',   'i6ch6ci8pljgo1udjus2rwfhnvxfoyklxzasmnrhe8zefplvjpkizppcj8md5gdn' );
define( 'NONCE_SALT',       'xvstbsfvh1gabbw280noq0o9kpthj5wyay4yltlgv6iylyigtlwp2vage1v3ijtv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpjs_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
