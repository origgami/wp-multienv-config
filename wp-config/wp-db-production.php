<?php
if (!defined('ABSPATH')) exit();
$http_host = $_SERVER['HTTP_HOST'];
$desiredHttpHost='www.isabellagusmao.com';
$protocol=getProtocol();

define('DB_NAME',     'isagusma_maindb');
define('DB_USER',     'isagusma_mainu');
define('DB_PASSWORD', 'df~IHJ+C&hqm');
define('DB_HOST',     'localhost');
define('DB_CHARSET',  'utf8');
define('DB_COLLATE',  '');

define('WP_HOME', $protocol.$desiredHttpHost);
define('WP_SITEURL', $protocol.$desiredHttpHost.'/wp/env1');
define('WP_CONTENT_URL', $protocol.$desiredHttpHost.'/wp/env1/wp-content');
define('DOMAIN_CURRENT_SITE', $desiredHttpHost);

$table_prefix = 'wp_';

define('WP_DEBUG', true); // or false

if (WP_DEBUG) {
	define('WP_DEBUG_LOG', true);
	define('WP_DEBUG_DISPLAY', false);
	@ini_set('display_errors',0);
}

?>