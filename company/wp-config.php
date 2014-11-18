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
define('DB_NAME', 'company');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '#UpJsdr~p0 P>?em{+t959wz9p}A2a73[h3i{kIaS8&?rqf%/oTX4_^#NaE)/5>h');
define('SECURE_AUTH_KEY',  'aX%iZdWzWC34Q)f.) Qa-eGC,gvNp]NE/( ]wi=Si_5w/Z$TiZO#w4}v.1]=9-C ');
define('LOGGED_IN_KEY',    '7L] 6N7Rzq,$_*NI/6hOTutmrZ}S_fF@E%C|r30* K/6+/-6qn~?OA?c)8VWyMV$');
define('NONCE_KEY',        'V`bKI3J5}2wXZ4`O5X[PdJ`G>32c!W+N`SZd-{<&MD:V83p }gxZKqA4g@=OW/l+');
define('AUTH_SALT',        'XK&k_sKWlxK_rya;YY0GN}6YC[6xAbO)-gX[ghw1bD<jvppw|u7+7mEj(5nDy8M;');
define('SECURE_AUTH_SALT', 'G(2kYL_(]6)ywjxWB:yw;m&!~t|ZY4$K(_?F*-vY5vn H5MYd+wLiecy-a{qYHdT');
define('LOGGED_IN_SALT',   ' XD)d=Gw9iEL%gIed-7qn^c+[9-|-~,THgQjCOf>Xpn):~G]q)WNr$]xA?)khJ@P');
define('NONCE_SALT',       '>+ZBCWsD)%:I$U;_}W&A&CUxcqpTflW-grO3URIQ_SBB+1sdhT9B`+:-k#o}RT5}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cp_';

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
