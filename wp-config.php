<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'belvue');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kAT9~?_v7DoI^8#Zp+9^YGn1r=nrfeD8tG1QDLy4CE9dB(X*UzN+nl+Gh9&}|K+Y');
define('SECURE_AUTH_KEY',  'Qf2]9h!DA+9fYNgW~6bMg|+}H)]|Y-Gxcw;3|o/<b=<h3dI<Rl?x-$w876nMoMjr');
define('LOGGED_IN_KEY',    '29h9~mfp_p2n!=$USRM#X:-`XHb?&UMR5Dqrq2q|KrB-CWfbm!:-XsC=K~?CtII#');
define('NONCE_KEY',        'A=l<y]<,!p<H<7QIy^gGf.-wTz+^J)*T3n;~m1RTYyq(U-D`xVS27+8f3+J&hD3n');
define('AUTH_SALT',        'u|4,FcnNN.IV9/.#N`7b?&^>k}Yokl70;(e0P1;+{+k]]$sCmU%|{6%75~Z@| lz');
define('SECURE_AUTH_SALT', 'N0t933@R+U$>;@2GFWPZv%!{,27]mp<])iS<%eU1$Lgt+0&^FslxC*zmI.4NRd}S');
define('LOGGED_IN_SALT',   'A}0-CL03JT_j5oDQ~q6:v;@RQCZ.rye3S9Mg/5[&. p|c7HmOv$Q|O8Sw_ss0F,Q');
define('NONCE_SALT',       'Rz[ <N-2s?;4G&gJ*D*.Y+DdZQ6|GP[NB3&7am~i+PIJc#ucfL%9VBw#^WpNb6D>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'belvue_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
