<?php

$heading = "Crate Note";

$config = require ('config.php');
$db = new Database($config);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $db->query("INSERT INTO notes(body, userId) VALUES(:body, :userId)", [
       "body" => $_POST['body'],
        "userId" => 1,
    ]);
}

require 'views/note-create.view.php';