<?php

require_once 'vendor/autoload.php';

session_start();

// init configuration 
$clientID = '543460347284-4l0d3692l2vbaal9efhdq83oj614o5on.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/loginPhp/dashboard.php';
  
// create Client Request to access Google API 
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Connect to database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "loginPhpDb";

$conn = mysqli_connect($hostname, $username, $password, $database);
