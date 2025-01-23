<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** Database username */
define('DB_USER', 'bn_wordpress');

/** Database password */
define('DB_PASSWORD', '%DATABASE_PASSWORD%');

/** Database hostname */
define('DB_HOST', '127.0.0.1:3306');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|0Y66txcLFwV6z@=-wJS7&~F+0Dz57]b?gfE5D6oWqj+9SyBlxfEh(>>r| |lxKH');
define('SECURE_AUTH_KEY',  'QD ?WfH|zClQH444swvcl$d0wMA8zahF$x5De{HC+`yeEWYz;Mi<8A-Un]n #dbi');
define('LOGGED_IN_KEY',    'Pw+5yW#5q+KGR1`&5)2uIT(E{W-o8Wr93BxGJk}gR{1Q$d4#E(%-|p-EV2Ha-@W4');
define('NONCE_KEY',        '@UIRA }AEtZAJsnNG|D?zpN17Jx|R[1}ZrpS:0sDit+nT0%7Nj,xy:q]]b[[QzJ0');
define('AUTH_SALT',        'k+/|%-9x-K+8,s-pEy|-BR2=W3|e/ns6bit:Avv|}|+Cs a6Jp:--fvZ8* j=[*Y');
define('SECURE_AUTH_SALT', 'OqIWv]h1~c;Ope{.MW=}nN2n|]8b{91*CQQ#(=qLM]6*nQDMf[/I/-VxanBG-]!5');
define('LOGGED_IN_SALT',   '|PRiBeaP>,k5d.Iw=U;k&0G$1=%`|fTg8:t|!r:qa+UJcLqD>t]kYKUwC6x<$+69');
define('NONCE_SALT',       '@z$!; iy0.M79[-KH!Q1z0?>E+u`,#y~zBSp$Xk~]N}3nzaQc%<.QNo>L-lGH[K!');

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
define('ENABLE_CACHE', true);
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */

$domain = "%DOMAIN%";
$fw_root = str_replace('/config', '', __DIR__);

define('WP_SITEURL', "https://{$domain}/wp");
define('WP_HOME', "https://{$domain}");
define('WP_CONTENT_DIR', "$fw_root/public/app");
define('WP_CONTENT_URL', 'https://' . $domain . '/app');

define('S3_UPLOADS_BUCKET', "faithworksuploads/$domain");
define('S3_UPLOADS_REGION', 'us-east-2');
define('S3_UPLOADS_KEY', '%AWS_KEY%');
define('S3_UPLOADS_SECRET', '%AWS_SECRET%');
// define('S3_UPLOADS_DISABLE_REPLACE_UPLOAD_URL', true);
define('AWS_ACCESS_KEY_ID', '%AWS_KEY%');
define('AWS_SECRET_ACCESS_KEY', '%AWS_SECRET%');

define('SMTP_USER', AWS_ACCESS_KEY_ID);
define('SMTP_PASS', '%SES_PASSWORD%');
define('SMTP_HOST', 'email-smtp.us-east-2.amazonaws.com');
define('SMTP_EMAIL', '%ADMIN_EMAIL%');
define('SMTP_PORT', 587);
define('SMTP_DEBUG', 0);

define('WP_AUTO_UPDATE_CORE', false);

require_once __DIR__ . '/../vendor/autoload.php';

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', "$fw_root/public/wp");
}
