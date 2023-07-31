<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/contact' => 'controllers/contact.php',
    '/ourMission' => 'controllers/ourMission.php',
];
function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        abort();
    }
}

function abort($responseCode = 404){
    http_response_code($responseCode);
    require "views/${responseCode}.php";
    die();
}

routeToController($uri, $routes);