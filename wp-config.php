<?php
define('DB_NAME', getenv('DB_NAME') ?: 'fallback_database_name');
define('DB_USER', getenv('DB_USER') ?: 'fallback_user');
define('DB_PASSWORD', getenv('DB_PASSWORD') ?: 'fallback_password');


define('DB_HOST', '127.0.0.1:3306');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_ALLOW_REPAIR', true);


/**#@+
 * Уникальные ключи и соли для аутентификации.
 */
define('AUTH_KEY',         'qwe');
define('SECURE_AUTH_KEY',  'qwe');
define('LOGGED_IN_KEY',    'qwe');
define('NONCE_KEY',        'qwe');
define('AUTH_SALT',        'qwe');
define('SECURE_AUTH_SALT', 'qwe');
define('LOGGED_IN_SALT',   'qwe');
define('NONCE_SALT',       'qwe');
/**#@-*/

$table_prefix = 'wp_';


/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Устанавливает переменные WordPress и подключенные файлы. */
require_once(ABSPATH . 'wp-settings.php');
