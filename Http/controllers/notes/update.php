<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::container()->resolve(Database::class);

$currentUserId = 1;

// find the corresponding note
$note = $db->query("select * from notes where id = :id", ['id' => $_POST['id']])->findOrFail();

// authorize thant current user can edit the note
authorize($note['userId'] === $currentUserId);

// validate the form
$errors = [];

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}

// if no validation errors, update the record in the notes database table.

if(count($errors)){
    view('notes/edit.view.php',[
        'heading' => 'Edit Note',
        'errors' => $errors,
        'note'=> $note,
    ]);
}

$db->query('update notes set body = :body where id = :id', [
    'id' => $_POST['id'],
    'body' => $_POST['body'],
]);

header('location: /notes');
die();