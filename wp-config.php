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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'presonalblog' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'qwerty' );

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
define( 'AUTH_KEY',         'r*D,MiCvKXCMi3>Yy>2&[BjduUOTZ>aLD7&HN|J0$BJ1v%u3X>xp:||H*t7#(^S/' );
define( 'SECURE_AUTH_KEY',  'kfzb?Oz={J9pU2kVaO8tL>AuCl;r*H>_;Z$[}>{xle-FRXk29`2~$RUFy5%N3*v8' );
define( 'LOGGED_IN_KEY',    'aCwsoQ7K6$~!yJ03b/j<nxL)s`y)QSr5Ag2N5qFf7T#[s6_m+D<[J`wf#7B3<:<o' );
define( 'NONCE_KEY',        'yT34&LJ3-1a+E@zW_[[x=T{]1k/0olBN6zYweV(%~U4b!6MsLyQ3)z5&|`Yq7+AU' );
define( 'AUTH_SALT',        '=?t9p$:0Ns5JNM>* kWX{;WwK-2[;!gmk^sDhDF,b;, J0C4/>?_jydI[>QlrYOI' );
define( 'SECURE_AUTH_SALT', 'YxZWW}{Ps+0?R;KW -y5r.r9^4 ,f<##9]9h[OUto*v2$-6}CYp&r,w@1_Rtt!tG' );
define( 'LOGGED_IN_SALT',   'MG68h`fDucuuS?x2.=-!ldy*)CgXqC{A9A/7O$bFQN([WcN64%_vFzhF{E gJTo8' );
define( 'NONCE_SALT',       'xYmC@B84_bvp,<HGL%i-KmO).^eg8!Kf:5A)ywQaO&-a Qp2&c-GItR0^s3HM6Fk' );

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
