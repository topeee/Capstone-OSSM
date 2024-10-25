<?php

// Database configuration

use Google\AuthHandler\AuthHandlerFactory;
use Google\Service\AdExchangeBuyerII\Client;
use Google\Service\Resource;

define('DB_HOST', '153.92.15.26');
define('DB_USERNAME', 'u271593949_ossmdb');
define('DB_PASSWORD', 'UcMPAq^5');
define('DB_NAME', '153.92.15.26');
define('DB_USER_TBL', 'users');

// Google API configuration
define('GOOGLE_CLIENT_ID', '64603179338-p984tmfnt1t548armn1ua3l7blvv0e67.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_REDIRECT_URL', 'https://onestopsanmateo.online/');

// Start session
if(!session_id()){
    session_start();
}
require_once 'google-api-php-client-main/vendor/autoload.php';
// Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to onestopsanmateo.com');
$gClient->setClientId(GOOGLE_CLIENT_ID);
$gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
$gClient->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_oauthV2 = new Client($gClient);

