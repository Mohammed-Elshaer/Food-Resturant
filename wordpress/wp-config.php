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
define( 'DB_NAME', 'food' );

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
define( 'AUTH_KEY',         '<QI,+?XZ!&kH|,5P@nugY*6eYr1RL&gDJ|LZci<mJmzMza%n9J{apvHUsCYqWA4M' );
define( 'SECURE_AUTH_KEY',  'j:wC+*?q=)=V0Yvd=C|h8[2F8,+=|pb @WkOzP}q.ty`j2gdO5%)lCtS)n^s%n<0' );
define( 'LOGGED_IN_KEY',    'C2[svSslPy(7R?NE:G)8<kLF}=q?,TB.oyO*ur9tG _ (QzhuhH}50xqDVtNeQY ' );
define( 'NONCE_KEY',        '~5heg|1~vzr7pkt6-nWn9*(zVC}EBo -F7A$c$G@O*e@{W`^}+@IWzlPk*C:RsG/' );
define( 'AUTH_SALT',        'bw{B&Kh;!7GPj_M>tf:yO,_X]49]$RU)&y+25N1.*Yn&D~oP) hb&QIX+A[2>ul/' );
define( 'SECURE_AUTH_SALT', '_g%|,9SC43.FSDA@UxDVk8iMrMJzfGIal1:d87Ub5vu^-EWQG z;dB@{C-x=Owe$' );
define( 'LOGGED_IN_SALT',   'pvImqBItwX+Z9;6U!Wp3R<G?69c^3mSKJR[,&!SI#Z?Z1c(.m RaR=TgZc`Wo)#t' );
define( 'NONCE_SALT',       'W|ik/-U<G[=A}l!K@h,BO6`:q3p8|l2@xr$~Qsr{)NqD|6sP!4&/*G(4Z_QC7%fU' );

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
