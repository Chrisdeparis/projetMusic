<?php

require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    'e4b00631e6bf42248c0e34342d138f3c',
    'b2bcd05795244ac38d2b4c12bc030bfa',
    'http://localhost/wordpress/callback.php'
);

$state = $_GET['state'];

// Fetch the stored state value from somewhere. A session for example

if ($state !== $storedState) {
    // The state returned isn't the same as the one we've stored, we shouldn't continue
    die('State mismatch');
}

// Request a access token using the code from Spotify
$session->requestAccessToken($_GET['code']);

$accessToken = $session->getAccessToken();
$refreshToken = $session->getRefreshToken();

// Store the access and refresh tokens somewhere. In a session for example

// Send the user along and fetch some data!
header('Location: app.php');
die();
