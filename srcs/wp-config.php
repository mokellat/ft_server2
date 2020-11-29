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
define( 'DB_USER', 'mokellat' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define('AUTH_KEY',         'i*rE-R{z|^F]|Iu-$mrS?$M11ONI^EjtsU2i/UxgDtIup,hj9,k:=@Sywb<7LEGJ');
define('SECURE_AUTH_KEY',  'DW7ulY643g4AzE6r~1+*QFt$7HKICNe+uch$p>|~od*3O2Eq8k[/=EDLB>z}lE|M');
define('LOGGED_IN_KEY',    'd3%i.@-]<ebUluNOqETP.l5uE{O9[!o.h$+v4wp=[LYi(kd[lZ$SmD;}|Cd*=|wH');
define('NONCE_KEY',        '>i..j[n.}[cO9#((-}NTskv@o@Q{V--C/Mp/=/W]U:w=m+p01/4dl$,G|45|^w#c');
define('AUTH_SALT',        'xa5!24xuYYw68q CRSUIyE+nnsY`dwFEeX7d7-3-@WY<FTI|n^fGZe%jAe&@=&^6');
define('SECURE_AUTH_SALT', 'BKW8(DEe+*g9lS91<.Wj>)=T$Oz|bCIGa(;G1G]2l[2t;4tXd|{Uuci r!aZ;y,t');
define('LOGGED_IN_SALT',   ';I$hWAjL7wx3iE1y-Gmaq(f]D(9N|8vA=Fwob%Kd&[|,F+C:<.:) IJu:m/(abt<');
define('NONCE_SALT',       'Q+M,tIf}2(%H&wcOL=_9Xol-#e^7/RP&;I05V{*+8I1Q%!_duoYDvPe+Mb#e+*Z8');

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