<?php

use Core\Database;

$heading = "Note";

$config = require basePath('config.php');
$db = new Database($config);

$currentUserId = 1;

$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($note['userId'] === $currentUserId);

view('notes/show.view.php', [
    'heading' => $heading,
    'note' => $note,
]);
