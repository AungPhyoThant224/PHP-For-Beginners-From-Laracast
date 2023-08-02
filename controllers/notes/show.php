<?php

$heading = "Note";

$config = require basePath('config.php');
$db = new Database($config);

$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($note['userId'] === 1);

view('notes/show.view.php', [
    'heading' => $heading,
    'note' => $note,
]);