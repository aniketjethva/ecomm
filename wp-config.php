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
define( 'DB_NAME', 'e_comm_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin@123' );

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
define( 'AUTH_KEY',         'L:F#[j~]}cBAfdRdTfNij+j>>4;OG%#N?u#(N[sW)euX8ADeSv5(S*6_:?6zcGA$' );
define( 'SECURE_AUTH_KEY',  'iUiI[9=GtDp=}m}ew=AK-4>ser5 NV}t_=BRQ_@Tz6_*a!BzaS}v/H@UP}^nM({6' );
define( 'LOGGED_IN_KEY',    'jI)>S,rOkH-p mpX>3bUqB;1zkfo!9u~L=^B/BBM(,LShpWDL+VbU9WaY(j/C{L@' );
define( 'NONCE_KEY',        '4Gl15V37}75tG$KW]!k#6qPSec:6@9}Myc{fL<gGyd-{V%0:^kUozCo>4>rrhsqh' );
define( 'AUTH_SALT',        'oFasS)`.wIyt~<S5./ASIk9>$C#WvJ@X,Kaz>wj)q6_c4[b.P9?RMYsT_K,pAztV' );
define( 'SECURE_AUTH_SALT', 'Sh Pf/ZGIY-WSC3Db#~E ;Pr=swHKh(N9wjje,<&&t1#r-v[UbrS;0eQXwzPAx`t' );
define( 'LOGGED_IN_SALT',   'wsu^r9rw^f&DVUs1*71h>ZkD-AGfyY&$6:sM,eAR0RHGmrpN<Fc;I1W8pO!r]-[U' );
define( 'NONCE_SALT',       '?qk#3;&tN>OsTf}h Y{)NZSf]v,rHAA&L5VZ@bVMS@i0o)[R:mPHLZ]eftpm0.k4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ec_';

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

