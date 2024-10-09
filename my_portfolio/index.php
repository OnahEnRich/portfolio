<?php

require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/projects' => 'controllers/projects.php',
];

if(array_key_exists($uri, $routes)){
    require $routes[$uri];
}else{
    http_response_code(404);

    echo "Sorry, Page not found";

    die();
}