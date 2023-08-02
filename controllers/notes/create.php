<?php

//require basePath('Validator.php');

$heading = "Crate Note";

$config = require basePath('config.php');
$db = new Database($config);

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(! Validator::string($_POST['body'], 1, 1000)){
        $errors['body'] = 'A body is required';
    }

    if(empty($errors)){
        $db->query("INSERT INTO notes(body, userId) VALUES(:body, :userId)", [
            "body" => $_POST['body'],
            "userId" => 1,
        ]);
    }
}

view('notes/create.view.php',[
    'heading' => $heading,
    'errors' => $errors,
]);