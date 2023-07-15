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
define( 'DB_NAME', 'mydatabase1' );

/** MySQL database username */
define( 'DB_USER', 'mydatabase1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mydatabase1' );

/** MySQL hostname */
define( 'DB_HOST', 'mydatabase1.czjdgvo8oyen.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '1Ik[1Nv#[}yk1R|{g;~DTwE@Oaj&75fYt%.^Ls%p/cC>DNN3lp?_IfT0|X&Dj}=|' );
define( 'SECURE_AUTH_KEY',  'QF_2T2ma4d)Y;+&4AZ&GB<<l-+y2}ZX.:EpIN~&B< cr/j0@S&;G}Uy*QB&&3.nr' );
define( 'LOGGED_IN_KEY',    'Y%#2o-o|38B^(hX2tRJHPC+e8jomeQ^E$$M>a/xVn1;*IDYEJ_9vX7v8u?^6o_l3' );
define( 'NONCE_KEY',        'olbnIj[fM@dKo[eF9/7}u;F1`D;K:0t4;wi{+|he:RCS#gV)R&_<33N5>3OICkmP' );
define( 'AUTH_SALT',        'o]?6tl IU5gw3:wP.0qXF^lZ1+V<]tt,OVCdRxwd{po X6PmL=YQZzM>V@f5qDeX' );
define( 'SECURE_AUTH_SALT', 'sKil2GVbyYWog;71*75qzb:q,x /{oJ^U&gM*b+o$Vw4z?+aLvX>fUe216|&EB+f' );
define( 'LOGGED_IN_SALT',   ',b5*q42kkP  GqRlG41Ti,=$Mot]lK(|m$V[ZQi}43jzhLym%ShAT6&5LnhnC`J;' );
define( 'NONCE_SALT',       '0=o?0w<xB6Z.R{ *!w]v[1bkx/W~iX{Z|NLy2amEKtBL6%J?r9Ct0tUt.16{,mr|' );

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
