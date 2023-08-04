<?php

use Core\App;
use Core\Database;

$heading = "Note";

$db = App::container()->resolve(Database::class);

$currentUserId = 1;

$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($note['userId'] === $currentUserId);

view('notes/edit.view.php',[
    'heading' => 'Edit Note',
    'errors' => [],
    'note'=> $note,
]);