<?php

require_once 'vendor/autoload.php';
include 'db_connection.php';


// init configuration
$clientID = '64603179338-p984tmfnt1t548armn1ua3l7blvv0e67.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost:3000/login.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");







