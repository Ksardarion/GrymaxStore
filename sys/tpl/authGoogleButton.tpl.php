<?php

$url = 'https://accounts.google.com/o/oauth2/auth';

$params = array(
    'redirect_uri'  => REDIRECT_FROM_GOOGLE,
    'response_type' => 'code',
    'client_id'     => GOOGLE_CLIENT_ID,
    'scope'         => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile'
);

echo $link = '<p><a href="' . $url . '?' . urldecode(http_build_query($params)) . '">Увійти за допомогою Google</a></p>';
?>