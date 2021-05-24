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

define( 'DB_NAME', "ranaentp_desposit-claim" );


/** MySQL database username */

define( 'DB_USER', "ranaentp_depositer" );


/** MySQL database password */

define( 'DB_PASSWORD', "depositer123" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


define('WP_CACHE', false);

/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'z35wMwcaM}ZPF&`ZV-kL{>BRf&PS_1VKxN#tjszgE46tDmXx:X{K:+<>ZpVP;!@B' );

define( 'SECURE_AUTH_KEY',  'Bd$E3z}prj0by!~}?E2yO5P%KzFMI&CwKl~o)+s7ME_K2I#3s[($IyP4yr+RK$7 ' );

define( 'LOGGED_IN_KEY',    'd[d/0>6u(H:PLn8k`%g71v$<uz}+[A?L#.MBl7%B5<X8dkG2}>e:1t!f#^M*r<go' );

define( 'NONCE_KEY',        '#g$DTF1B>%i[rfNGEW4*e?o} 01ii[Eu@_fh2|dTK)<veu4NY)dzp}uBt{u&h>tj' );

define( 'AUTH_SALT',        'k1eHFbwlE^xmkf%Hz~)76;2m;m>y1qIcw;1CA3>e+1c>}V,}qIG-!=F#3:lLXrp0' );

define( 'SECURE_AUTH_SALT', '#V:)wrg&kF*iN&@/RZRpDQR$)V>!3l)5qd0cZS^%7,{0&*Sy[$S #+$@qKzzB79+' );

define( 'LOGGED_IN_SALT',   'n@B}mQr%Wa0i`Kk#`en]GZ1Q>%mw9dd<a;bXaR26@CKh:YThKAFOvrP.~Z{2os}*' );

define( 'NONCE_SALT',       '?<Zxbpgp12mVN&i3A<:5@7YhWZYOEpeqD)^VwmoRL2(nVp.*ejN*ayaJwX2I-jY+' );


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

define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

