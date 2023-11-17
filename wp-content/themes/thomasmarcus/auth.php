<?php

require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    'e4b00631e6bf42248c0e34342d138f3c',
    'b2bcd05795244ac38d2b4c12bc030bfa',
    'http://localhost/wordpress/callback.php'
);

$state = $session->generateState();
$options = [
    'scope' => [
        'playlist-read-private',
        'user-read-private',
    ],
    'state' => $state,
];

header('Location: ' . $session->getAuthorizeUrl($options));
die();