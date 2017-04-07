<?php
// HTTP
define('HTTP_SERVER', 'http://' . $_SERVER['SERVER_NAME'].'/store/');

// HTTPS
define('HTTPS_SERVER', 'http://' . $_SERVER['SERVER_NAME'].'/store/');

define('DIR_APPLICATION', $_SERVER['DOCUMENT_ROOT'].'/store/catalog/');
define('DIR_SYSTEM', $_SERVER['DOCUMENT_ROOT'].'/store/system/');
define('DIR_IMAGE', $_SERVER['DOCUMENT_ROOT'].'/store/image/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_SYSTEM . 'storage/cache/');
define('DIR_DOWNLOAD', DIR_SYSTEM . 'storage/download/');
define('DIR_LOGS', DIR_SYSTEM . 'storage/logs/');
define('DIR_MODIFICATION', DIR_SYSTEM . 'storage/modification/');
define('DIR_UPLOAD', DIR_SYSTEM . 'storage/upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', '');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_DATABASE', '');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
