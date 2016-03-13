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

define('WP_REDIS_HOST', '<%= @redishost %>');
 
define('WP_HOME','<%= @wphome %>');
define('WP_SITEURL','<%= @wpsiteurl %>');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '<%= @dbname %>');

/** MySQL database username */
define('DB_USER', '<%= @dbuser %>');

/** MySQL database password */
define('DB_PASSWORD', '<%= @dbpassword %>');

/** MySQL hostname */
define('DB_HOST', '<%= @dbhost %>');

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
define('AUTH_KEY',         '$O| 8tq&T;@_*,*f:2_>{[-=?{!s&V^{*s+ym}sz{.&w,7p@Pzn=m)z(Ho+pf+9c');
define('SECURE_AUTH_KEY',  '0#VEu*jC_ktW(n;YNQ3|A+<s0RRa8I*8uq{N3fLN~IF(_C0k2t7%mvtcORIR!zH(');
define('LOGGED_IN_KEY',    '8`L?/-e@C4eu$X&U}<J5Gx|=!w! E`& :j<-~ZO`o|:bt3o_pgAEw@=V$1|:L%{A');
define('NONCE_KEY',        'y>9Y`Vd1hzDj|^ZGL8yv532|(T%94Po`&x1Ix90#%QS/5-]-Z1_:$0:3]j]T&mV6');
define('AUTH_SALT',        '1<Xdml-X^g1PYy#6c|+F+E+uD|ngMbgncLel@!L7cKh3!+!h*jn1^G]EleiaJ-T{');
define('SECURE_AUTH_SALT', '++EX~[y-X/~)a##6h?:8xn+|an/,STM_Y$uoeJ!NGc4[|ghh^nr{LCd?rn+8%+fS');
define('LOGGED_IN_SALT',   'H0tAAzPZee[zI3H%!RET>d;_GJv{/MwO/ZmFOHuuI&MB;,_+qo!{F>`z8z9_9j%c');
define('NONCE_SALT',       'V-f~g*f+i? Qb>9Q2L}~:xilf|>9@nlz~%5|+1B7qiw&;0`O?,0hm-j6@Pn2+(:-');

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
