<?php
/**
 *  Main template file
 * @package Thomas Marcus
 */
get_header();

// Inclure l'autoloader de Composer
require __DIR__ . '/../../../vendor/autoload.php';
// Inclure le fichier de configuration Guzzle
$guzzleConfig = include __DIR__ . '/guzzle-config.php';

// Utiliser les configurations avec Guzzle
$client = new \GuzzleHttp\Client(['verify' => $guzzleConfig['verify']]);

// Include the authentication script
include 'auth.php';


// index.php

echo '<a href="http://localhost/wordpress/callback.php">Se connecter avec Spotify</a>';



?>

<div class="container">
    <h1>Thomas Marcus Music</h1>
</div>

<?php get_footer(); ?>

