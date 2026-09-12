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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',          '+H3T{g* opnzgtafzCkPO%(VuDn3f12j3NH]<%R0peLq6Tw_W=G#45lW<bPWMUN0' );
define( 'SECURE_AUTH_KEY',   'CSTVI{C7&b{tpaBmWz)4Axz`nuxJ YGn$~_o2i}pH1{Gsl~))R0=C3!vgZjrM(lt' );
define( 'LOGGED_IN_KEY',     ',PLZ1#$($x k8hPtU?Yw)/Ern~$NO`t?*lX3A_!{Ac,q[|z2<hNx5}KK6[);PLf+' );
define( 'NONCE_KEY',         'GcrKpF*<`g)l_PU;:jG(D%B3=^zpI7ic`NOGDkw;+U-{@eW9ryK+^ycGfV:F@kSA' );
define( 'AUTH_SALT',         'X_dM.V#SyppPGbgS)y`lZ]0mw.-yVlWo6IM4-B|CL0zA9}l?i[#Gf4>C2PQ6N_.C' );
define( 'SECURE_AUTH_SALT',  ',b:s1BoqG?_ oS45[oulmMBk#tO~5P#$ SrZY*sHz{7SS-0dFV$t`8UQiUn7sEhq' );
define( 'LOGGED_IN_SALT',    '^>`MSto.0,n?/`j_8vNmQ{*YJ-<=Hd{LI`R]Eq:oG>$`fjzT=rA/x46,oyC$,`c`' );
define( 'NONCE_SALT',        '65zHv#O^GhbZwajrO/v|Qqi8zaT8r7: j;E$4`<DnhFBrpL{;YIJH|}3Q_7^0/0;' );
define( 'WP_CACHE_KEY_SALT', 'vX!54]5(vj0xR{cHoX2Dn<7~0,@Z%W0b5-#%*8<%{w_+[OC.Tr&*a No#0[~,avm' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
