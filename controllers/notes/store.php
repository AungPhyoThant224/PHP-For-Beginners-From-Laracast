<?php

use Core\Database;
use Core\Validator;

$config = require basePath('config.php');
$db = new Database($config);

$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body is required';
}

if (! empty($errors)) {
    view('notes/create.view.php',[
        'heading' => $heading,
        'errors' => $errors,
    ]);
}

$db->query("INSERT INTO notes(body, userId) VALUES(:body, :userId)", [
    "body" => $_POST['body'],
    "userId" => 1,
]);

header('location:/notes');
die();