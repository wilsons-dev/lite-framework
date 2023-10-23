<?php 
// $dir = "'/'";

$uri = parse_url($dir.$_SERVER['REQUEST_URI'])['path'];
// $uri = $_SERVER['REQUEST_URI'];
// dd($uri);

$routes = [
    '/'             => 'controllers/index.php',
    // This is how you route files 
    // '/about'         => 'controllers/about.php',

];

if(array_key_exists($uri, $routes)) {
    include($routes[$uri]);
} else {
    include('controllers/404.php');
}
