<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class){
//    dd($class);
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require basePath("{$class}.php");
});

require basePath('bootstrap.php');

$router = new \Core\Router();

require basePath('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
