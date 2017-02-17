<?php
/**
@author muni
@copyright http:www.smarttutorials.net
*/
require_once 'messages.php';
//site specific
define('BASE_PATH', 'http://localhost/cake/');
define('SITE_NAME', 'CakePHP Auth Login Tutorial'); 
	
//Database config
define('DB_HOST', 'localhost');
define('DB_NAME', 'cakelogin');
define('DB_USERNAME', '');
define('DB_PASSWORD', 'root');

//Social Logins
define('FACEBOOK_APP_ID', 'YOUR APP_ID');
define('FACEBOOK_APP_SECRET', 'YOUR APP_SECRET');
define('FACEBOOK_REDIRECT_URI', 'http://localhost/cakelogin/fb_login');


//Google App Details
define('GOOGLE_APP_NAME', 'Smart Login');
define('GOOGLE_OAUTH_CLIENT_ID', 'YOUR CLIENT_ID');
define('GOOGLE_OAUTH_CLIENT_SECRET', 'YOUR CLIENT_SECRET');
define('GOOGLE_OAUTH_REDIRECT_URI', 'http://localhost/cakelogin/google_login');
define("GOOGLE_SITE_NAME", 'http://localhost/');	
	
