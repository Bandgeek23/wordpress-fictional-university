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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jtls8TlqP7nmQuyNwgy8UsqDLri7rwFGcPQzTujkJzjaOoMf6Y006/fOomf+ngaHBlALcmN5jE14x++AmZdZ4w==');
define('SECURE_AUTH_KEY',  'zyuRyk5eJA74wtGGJ7/bx5wRfWaV9g0a8ua7EwWKk2uIZ3n1DLQTr+5o7mJg9DYaTLcG19SlUdz/tVmZKZUJDA==');
define('LOGGED_IN_KEY',    '2HL/NtWC3IS4ta95WWC2wVukeJBoiUBMoGT5OF/CZe2rqaC/6crg2ebsXaMyrfx7i5Ch5sOO/cQE82a7SP1xgQ==');
define('NONCE_KEY',        'y47I8DGihQRv+bEN1OWS6oEJJPrcydbw1QJVg7c+tLugQFpW+XgZzgTmm+CqytXqZ7E+2jm9Sf4bf7M4Lcertw==');
define('AUTH_SALT',        'pDioUIgfS1Yyppa7YxbyOR8LGBpOGnuMG0hPR8GR/2LdLSp5gGQSrsJatYEsskKUoHTMWP9GJcDCd7a7t2tGBg==');
define('SECURE_AUTH_SALT', 'wdk5JdKYCyktD90xeydDolw5R1X8CP61PhYeYu5TZ467ZZv2eC3Tmhs92IMs6Gp6EGYaEuQkf3mZ2nmI2FsItA==');
define('LOGGED_IN_SALT',   'mGYSckKEDcB9viVHZmQaeb8n5sXvhXzE/dBElZhbDc6IpCtfxo3avzVJHB5oPTAoxTBTmmABXwGltcePMioc4A==');
define('NONCE_SALT',       'g8ReSfds1JeP29vIoVxc/o6OiMcM5+rRhygXuavLxL0XM6OftkkT/3MS+haa3MCYmvmg5N79QOPKW8IdO3h/RA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
