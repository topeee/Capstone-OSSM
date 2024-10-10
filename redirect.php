<?php

require __DIR__ . "/vendor/autoload.php";

$client = new Google\Client;

$client->setClientId("64603179338-p984tmfnt1t548armn1ua3l7blvv0e67.apps.googleusercontent.com");
$client->setClientSecret("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");
$client->setRedirectUri("http://onestopsanmateo.online/redirect.php");

if ( ! isset($_GET["code"])) {

    exit("Login failed");

}

$token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);

$client->setAccessToken($token["access_token"]);

$oauth = new Google\Service\Oauth2($client);

$userinfo = $oauth->userinfo->get();

var_dump(
    $userinfo->email,
    $userinfo->familyName,
    $userinfo->givenName,
    $userinfo->name
);