<?php

$routes = require basePath('routes.php');
function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require basePath($routes[$uri]);
    }else{
        abort();
    }
}

function abort($responseCode = RESPONSE::NOT_FOUND){
    http_response_code($responseCode);
    require basePath("views/{$responseCode}.php");
    die();
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
routeToController($uri, $routes);