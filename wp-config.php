<?php

define('WP_MEMORY_LIMIT', '128M');
define('W3TC_DYNAMIC_SECURITY', '0hkhj3498rkhjiu3789dshj8!s8d4x');

$http_hosts = array(
  'localhost' => 'origgamiserver-network', //geralmente eh origgamiserver-network, ou origgamiserver-internet, ou local
  'origgamiserver.dlinkddns.com' => 'origgamiserver-network',
  '192.168.1.1'=>'origgamiserver-network',
  '192.168.1.2'=>'origgamiserver-network',
  '192.168.1.3'=>'origgamiserver-network',
  '192.168.1.4'=>'origgamiserver-network',
  '192.168.1.5'=>'origgamiserver-network',
  '192.168.1.6'=>'origgamiserver-network',
  '192.168.1.7'=>'origgamiserver-network',
  '192.168.1.8'=>'origgamiserver-network',
  '192.168.1.9'=>'origgamiserver-network',
  '192.168.1.10'=>'origgamiserver-network',
  'dev.dentrofabrica.com.br' => 'development',
  'test.dentrofabrica.com.br' => 'staging',
  'dentrofabrica.com.br' => 'production',
  'www.dentrofabrica.com.br' => 'production'
);

//Nome da pasta onde esta localizado o site no htdocs, ex: c:\xampp\htdocs\smoke
function getLocalSiteFolder(){
	return 'smoke';
}

// Get the hostname
$current_http_host = $_SERVER['HTTP_HOST'];
function getProtocol(){
  return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";  
}

// Loop through $http_hosts to see if there’s a match
foreach($http_hosts as $http_host => $environment) {
  if($http_host==$current_http_host){
    define('ENVIRONMENT', $environment);
    break;
  }  
}

// Exit if ENVIRONMENT is undefined
if (!defined('ENVIRONMENT')) exit('No database configured for this host: <strong>'.$http_host.'</strong>');

// Location of environment-specific configuration
$wp_db_config = 'wp-config/wp-db-' . ENVIRONMENT . '.php'; 

// Check to see if the configuration file for the environment exists
if (file_exists(__DIR__ . '/' . $wp_db_config)) {
  require_once($wp_db_config);
} else {
  // Exit if configuration file does not exist
  exit('No database configuration found for this host');
}

//Chaves únicas de autenticação e salts. Gerar por esse endereco: https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         '+2GbQ} )sJY?&,jBzL[E=| X0-9q,)wr8#U07+&cC#s=`2-?Gd[N7pv6# $pg?zv');
define('SECURE_AUTH_KEY',  'i~RA:U>[YE>`?2=o@qXKGv9s1{+`vAp/pJv&g%_n,8m=t<W+SlRT7o>VKm3p&U=g');
define('LOGGED_IN_KEY',    'llol(6^3;N93nLwi{,HscO6*J$y?Z)^`m+(oTXp[kia(<zl$V(w1?4j34{znzD=A');
define('NONCE_KEY',        'UyJ94Zumw|wbx|FqR!rf!yR#k}UaU8oJ;eA6Dy7-Gu-jjf:lvOG|aR[zqY6B|ZPB');
define('AUTH_SALT',        ']VlDHS7J_;@LrNnKgP6954I,%Ey3M+y/^3H1)1mfRFN4Z`4dKNml.E.aK<aBV|hc');
define('SECURE_AUTH_SALT', 'U)rYaR_n7#6QUCPu+B@X T,Vx}dc8xMv3sA/vWy<[$nP`NN3^O3)HE4 +0f><6T5');
define('LOGGED_IN_SALT',   '3H+VHxX;:T_*B4cm,EW|]nDtpug>AH/Hyk, c}D!$&y6IYAj+<bF`D6#<,j85a6|');
define('NONCE_SALT',       '1N^QS<UbKC73]Gdo|D;-I-GCUqbO9lkoD}ySc|>Y8d,*S!-B@#XnADP&gjsinexX');

/* That’s all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

?>