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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpassignment' );

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
define( 'AUTH_KEY',         'G]shdP/i+o4}W4X.[B`t$#h~Bv/#c;n~$cxkUsj~.{EEX[j*J859MfP?G@xLLEAn' );
define( 'SECURE_AUTH_KEY',  'nLsv,2~3JK&!y,QT$KDhg%_7>})TP+W23Ue,UhlF0j3#C8ft%:ZcG+$Dp1U#6g=h' );
define( 'LOGGED_IN_KEY',    '`P&fQ31=bi/)|i_,@_+SZPySRH_1HprtO<Ap6/o*6*1$!t) vTLvy5t~d&H`f]4b' );
define( 'NONCE_KEY',        'Ok4SSLD>0l_6S.UaqrHqwLv_ph9p:#riu7`oDFj{j&:<Y+KO.I[Qp u eq8j_1-.' );
define( 'AUTH_SALT',        'B!!h+}m+BRaA+Lh>kEhv=s$WY9aQBNy1irB.Y=9=Guh f!=.D`5Ir!>bN[aTW/_B' );
define( 'SECURE_AUTH_SALT', 'c;,ptuHU{-Oc}uJK&rPBdOBc3@klQD!ENt;G_%X=6|bn`U)_>Pms5F*>9rc-f7A$' );
define( 'LOGGED_IN_SALT',   'A)r^VHq!7t]wEH4VWT+ybye6hJi]Ou.ty8&L(iUNzAEm}F&xy8a_|*cfe%.g7=hU' );
define( 'NONCE_SALT',       'yaNk;7b;;9i9t#p%WSYv?VnHCKtI<mB>}uUO#~KA~+?$[rJcp/1seD.g&5U]xRYl' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
