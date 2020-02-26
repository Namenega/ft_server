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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'gverhelp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lol' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'GR/T(}jm+dct-[={@gO;kD#*rMqD ._9+b[)8^|0:6A*2f4o$f@-V{D_HB4=<WHN');
define('SECURE_AUTH_KEY',  'Z?1iATC;W+qMm]N-$Kf&[OBo}K#34.H^.&LD#(CMY^dJ=#9F;eb(^DU)VDWxwIXj');
define('LOGGED_IN_KEY',    'oE45=V[82-u.qx2mV,E9V-c}:L|-w`<:IPAyUr 3##n]dI p)r{7<QgT|isS!( 1');
define('NONCE_KEY',        'nU-t _%:Er;::|}fayt6vT+TB^DdP|[syos8Eh&yPf|$EI^=|POEo6C]YUAX26gN');
define('AUTH_SALT',        ':|J-MA=5}]XB+4J/%Vgf|ax_be3+RrQ&C&N$h2&g@9w*%{Ef)%@Dy`f6@s;|5|5R');
define('SECURE_AUTH_SALT', '`qBH7s~3+#hbsk^CtS4ln&0+A1+YlB~jNoRi|+>tk>x?3`[iK1w~gEyJHVOiL_pv');
define('LOGGED_IN_SALT',   'qDZPc(EUj:j5*&P5DC{F^R*EIuySv^o5n6#;H.m+Jc*$rAzLTQ3(~rh8aRdz6D6s');
define('NONCE_SALT',       '/7;jbt_C)|fkYcDuzOmEr&F!#w*FU#$0</E/$OUu$$|;pYC838&(r};,>N+q(oXk');
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
define( 'WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
