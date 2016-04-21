<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_REDIS_HOST','wordpress.ug7ewu.0001.euw1.cache.amazonaws.com');
define('WP_HOME','http://wordpress-1656493999.eu-west-1.elb.amazonaws.com');
define('WP_SITEURL','http://wordpress-1656493999.eu-west-1.elb.amazonaws.com');

define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.ccp8ahye9cfr.eu-west-1.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         '`}24^[w`+5Hk#,;j[`2AHj>>-u>=V&jYrdw}IkU)mg^6:T EZgm}q{pjjy+bbEmw');
define('SECURE_AUTH_KEY',  'qbf6~[KS+:pnGxWtmB.$w<0Vld=Z2fQ4 AAU9v^w*zILk*kD2YtrgY1up20Hx=2n');
define('LOGGED_IN_KEY',    '.g;g}`;7:8!jZ@n/PEZ;g)Ox^[YQO0pW(3j@D=e61Rt5$joCv#eL#%eTGcu&r9R%');
define('NONCE_KEY',        'ys@PW_?#$k|uLG6^U==8gOS+g*5UVq!I)z)#OnS6)^jGj$8J5@=6cC|In`q3Q)_^');
define('AUTH_SALT',        ' dF@X~4^o1Z,yZbP]|Fv`J*Pg}0vh0h^v}(/W3$_@~AUmtDAWj!qU^(^?-zhf@V/');
define('SECURE_AUTH_SALT', '&;CqHw_.3mF?`$Z7?!-iO-?hqD!F;,xs5=fqsDZ722&AM1ye6:dx1V}Y$1M)(Rhe');
define('LOGGED_IN_SALT',   'UVAk0ecVe:d<bnQBwUxr%~^[=~;(gk{;7]Od^v$G3Nz>#t{1`nY!bhbAI7Mpxf!S');
define('NONCE_SALT',       ':*C4C[]:Z,;OY-FF2++D3jKW*pW;<.y6JoRX`a_)dBNjh^3f~U!}.dv}mK%2&z-Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
