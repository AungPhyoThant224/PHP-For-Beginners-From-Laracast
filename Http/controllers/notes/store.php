<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::container()->resolve(Database::class);

$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
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