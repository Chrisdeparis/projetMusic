<?php
/**
 * Template Name: Spotify Authorization
 */

// Replace these values with your Spotify app credentials
$clientId     = 'e4b00631e6bf42248c0e34342d138f3c';
$clientSecret = 'b2bcd05795244ac38d2b4c12bc030bfa';
$redirectUri  = 'http://localhost/wordpress/callback.php';

// Step 1: Redirect the user to the Spotify authorization page
$scopes  = 'user-read-private user-read-email'; // Specify the scopes you need
$authUrl = 'https://accounts.spotify.com/authorize?' . http_build_query([
        'response_type' => 'code',
        'client_id'     => $clientId,
        'scope'         => $scopes,
        'redirect_uri'  => $redirectUri,
    ]);

// Check if the user is logged in, if not redirect them to the login page
if (!is_user_logged_in()) {
    auth_redirect();
}

// Display header, content, etc., for your WordPress theme
get_header();

// Output the Spotify authorization link
echo '<a href="' . esc_url($authUrl) . '">Authorize with Spotify</a>';

// Handle the redirect from Spotify after user authorization
if (isset($_GET['code'])) {
    // Step 3: Exchange the authorization code for an access token
    $authorizationCode = sanitize_text_field($_GET['code']);

    $tokenUrl = 'https://accounts.spotify.com/api/token';
    $tokenData = [
        'grant_type'    => 'authorization_code',
        'code'          => $authorizationCode,
        'redirect_uri'  => $redirectUri,
    ];

    $authHeader = 'Basic ' . base64_encode($clientId . ':' . $clientSecret);

    $tokenOptions = [
        'http' => [
            'header'  => "Authorization: $authHeader",
            'method'  => 'POST',
            'content' => http_build_query($tokenData),
        ],
    ];

    $tokenContext = stream_context_create($tokenOptions);
    $tokenResult  = file_get_contents($tokenUrl, false, $tokenContext);

    if ($tokenResult === false) {
        die('Error getting access token');
    }

    $tokenInfo = json_decode($tokenResult, true);

    // Step 4: Use the access token as needed
    $accessToken = $tokenInfo['access_token'];
    $tokenType    = $tokenInfo['token_type'];
    $expiresIn    = $tokenInfo['expires_in'];

    // Make API calls with $accessToken, and refresh the token if needed
    // ...

    // Output the access token for testing purposes (remove in production)
    echo '<p>Access Token: ' . esc_html($accessToken) . '</p>';
} else {
    // Handle errors or user denial
    echo '<p>Authorization denied or an error occurred.</p>';
}

// Display footer, etc., for your WordPress theme
get_footer();
