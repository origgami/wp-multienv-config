<?php
if (!defined('ABSPATH')) exit();
$http_host = $_SERVER['HTTP_HOST'];
$siteFolder = getLocalSiteFolder();
$protocol=getProtocol();

define('DB_NAME',     'smoke');
define('DB_USER',     'root');
define('DB_PASSWORD', '');
define('DB_HOST',     'localhost');
define('DB_CHARSET',  'utf8');
define('DB_COLLATE',  '');

define('WP_HOME', $protocol.$http_host.'/'.$siteFolder);
define('WP_SITEURL', $protocol.$http_host.'/'.$siteFolder);
define('WP_CONTENT_URL', $protocol.$http_host.'/'.$siteFolder.'/wp-content');
define('DOMAIN_CURRENT_SITE', $http_host);

$table_prefix = 'wp_';

define('WP_DEBUG', true); // or false

if (WP_DEBUG) {
	define('WP_DEBUG_LOG', true);
	define('WP_DEBUG_DISPLAY', false);
	@ini_set('display_errors',0);
}

?>