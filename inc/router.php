<?php 
// $dir = "'tasgigs/'";

$uri = parse_url($dir.$_SERVER['REQUEST_URI'])['path'];
// $uri = $_SERVER['REQUEST_URI'];
// dd($uri);

$routes = [
    '/'             => 'controllers/index.php',
    '/about'        => 'controllers/about.php',
    '/artists'      => 'controllers/artists.php',
    '/artist'       => 'controllers/artist.php',
    '/profile'      => 'controllers/profile.php',
    '/support'     => 'controllers/support.php',
    '/login'        => 'controllers/login.php',
    '/register'     => 'controllers/register.php',
    '/release'      => 'controllers/release.php',
    '/events'       => 'controllers/events.php',
    '/venues'       => 'controllers/venues.php',
    '/venue'        => 'controllers/venue.php',
    '/news'         => 'controllers/news.php',
    '/article' => 'controllers/article.php',
    '/privacy'      => 'controllers/privacy.php',
    '/forgot'       => 'controllers/forgot.php',
    '/data-request' => 'controllers/data-request.php',
];

if(array_key_exists($uri, $routes)) {
    include($routes[$uri]);
} else {
    include('controllers/404.php');
}