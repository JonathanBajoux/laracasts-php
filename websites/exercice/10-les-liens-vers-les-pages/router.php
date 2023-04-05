<?php
//requete url
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//condition refactoriser
$route = [
    '/home' => 'controllers/home.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/mission' => 'controllers/mission.php',
];

function routeToController($uri, $route)
{
    if (array_key_exists($uri, $route)) {
        require $route[$uri];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);

    require "view/{$code}.php";

    die();
}

routeToController($uri, $route);


//afficle le chemin
//dd($variable);

//condition simple
/*if ($uri === '/home') {
    require 'controllers/home.php';
} else if ($uri === '/about') {
    require 'controllers/about.php';
} else if ($uri === '/contact') {
    require 'controllers/contact.php';
} else if ($uri === '/mission') {
    require 'controllers/mission.php';
}*/