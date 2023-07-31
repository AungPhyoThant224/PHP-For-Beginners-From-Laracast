<?php

$heading = "Crate Note";

$config = require ('config.php');
$db = new Database($config);

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $errors = [];

    if(strlen($_POST['body']) === 0){
        $errors['body'] = 'A body is required';
    }

    if(strlen($_POST['body']) > 1000){
        $errors['body'] = 'The body cannot be more than 1,000 character';
    }

    if(empty($errors)){
        $db->query("INSERT INTO notes(body, userId) VALUES(:body, :userId)", [
            "body" => $_POST['body'],
            "userId" => 1,
        ]);
    }
}

require 'views/note-create.view.php';