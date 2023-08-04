<?php

use Core\Response;

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($responseCode = RESPONSE::NOT_FOUND){
    http_response_code($responseCode);
    require basePath("views/{$responseCode}.php");
    die();
}
function authorize($condition, $status = Response::FORBIDDEN){
    if (!$condition){
        abort($status);
    }
}

function basePath($path){
    return BASE_PATH . $path;
}

function view($path, $attributes = []){
    extract($attributes);
    require basePath('views/' . $path);
}

function redirect($path){
    header("location:{$path}");
    exit();
}