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
define('DB_NAME', 'catalogo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'nK&wuEQP<u$Z8Xm:n@Rr#9q6p;XRM+_Mk~$r:ymFZH2lWOl+t78sQkR5F3v5>Gz,');
define('SECURE_AUTH_KEY',  '##q/Oy+@Ss2~](Uj$mP:I7ZtO>7,e,*G^{cIJ7`T1_tWGBF+ >[)QfTr*Dr_9F~C');
define('LOGGED_IN_KEY',    'lhQ`MPVK{ Y8Pi0~1`OM,r:~bx$9or}FiC m2e&h#:bTLt&@Zl}feSyS9o?}^99e');
define('NONCE_KEY',        '`El7M>c)1%2?Ggryp2vgTx4B,H>|@UR?(As[^6aYEOmEuOn8Hb ]H.d0qm:sP+UH');
define('AUTH_SALT',        '7].&QV+,ow|ApfIc:4WUj*.EBbALm44w#8Ffos=`o8B-q:+mIaOH&cKACocyoVzj');
define('SECURE_AUTH_SALT', 'btum48?C!?Thh5y/6Gqjz,Vq3)uKDb3G,Pj+1hx0gi.NpOkpWfb#7E3ymqp,n,k!');
define('LOGGED_IN_SALT',   '0m;jW5:c`DrF_b#8Iz#s.norq#LJl+_]-L#g2f4H0[(D1r|=:pWM)6>q-xFt6x<=');
define('NONCE_SALT',       '}56$o`??T;PVgtC.<]0QSw;bW`2)q^W%?4~1*K>7S4D7qpG/QfrSLx;.3e Sq<% ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
