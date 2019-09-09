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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'mominur' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ogSetq6(7|[V/NA@$hR63,kDkydYTAo5Qg3o#&5CMd9^7+@a!!{B[INM)H/ 4_E^' );
define( 'SECURE_AUTH_KEY',  'mjGb&DpttRwMeMmp;cSicg?~_;=OCV^9Kf--luj<%Yu[yoG1M%!}RI!?}NFpHLDD' );
define( 'LOGGED_IN_KEY',    ']T.mU)!p@}bu=nb=1{,:79]y=[BEapuK||jL[y5U@9<o3N)cqa?bu0{A*u{Sda$j' );
define( 'NONCE_KEY',        '.24The$uea)>qcX/=?Kk>:eXR>oxb@%uz/#}@OT.=%2rMiHmvK2%yI: }rS~u;Xo' );
define( 'AUTH_SALT',        '|Y9{e&#J?Ajp:Ar0(v0}H)Uhljg3zAD&!i*U5Q5@NT&Z~9JQu5Fjqd~9KAd2ehC$' );
define( 'SECURE_AUTH_SALT', '{pZOlQVhpX;ON0<}-BR5P_ 2e2zEp+Uhv/QY~-IS8`YhaQ[stlS*FJNi3[K>6GMt' );
define( 'LOGGED_IN_SALT',   '(6vz4kO Ec?!Z{zrI)@w/g1#%c8+=qE^/Fpqo&mw0A30]ym+,;Lo*@^!I 3h(8CT' );
define( 'NONCE_SALT',       '5SQh#V8@;Vi%UMT,62JnfHp$ Z([{B6F08M]q[BT@LfS_h)uylfNK&de4q(Em!Bv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
