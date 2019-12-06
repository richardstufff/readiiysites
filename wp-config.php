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
define( 'DB_NAME', 'readiiysites_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'rC=s3Wk49FJ[NnoC&AS/#;bg(=cwZswyq^b;D~j.?(uMvW*0zjR2AJzI*drOeCJ7' );
define( 'SECURE_AUTH_KEY',  'zt;~AqPN.-<ZuNlTv,bi1Lo]O+JRs-i9)L2ad/1v #4C$kXIgl%huRF0^R,a|bsG' );
define( 'LOGGED_IN_KEY',    '-dR@ow`?EjG$Nu*lSvl [IZpDH]-ija]IG;@F46F=93n,[ZRq;ezTi=9ZB8-p &a' );
define( 'NONCE_KEY',        'LybTCD^>!UI~S=As:6y0}%qqu_y[Eh]C,Co*gi|M3Rd/]vZCu1#CVf2$- nHvd]D' );
define( 'AUTH_SALT',        'ugh1N*P;:Rwee6xCdV)e}DNbL@43RO^8%OUu&3@Lc>rN/|^:xY075}#zi^338x[o' );
define( 'SECURE_AUTH_SALT', 'n:,Ah8jw`ugl/5X+$ldV7I1=otvt9 4,PmE1GTR9s+ssBH7<3!dz|/AQB6u^;9/k' );
define( 'LOGGED_IN_SALT',   'CH@(kaYT<A-_uqdo)^J9cw+Z!1bVQfd{q?wa^(i8PZ0S[t`zA[n:Oq:k7+ULKet#' );
define( 'NONCE_SALT',       '[W6&VXO*J73op)y4 c7w{lh[+WIwCLQTG36na=T+6}P/RqTNyhuM:6g/rAn[,G6D' );

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
