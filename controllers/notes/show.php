<?php

use Core\Database;

$heading = "Note";

$config = require basePath('config.php');
$db = new Database($config);

$currentUserId = 1;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->findOrFail();

    authorize($note['userId'] === $currentUserId);

    $db->query("delete from notes where id = :id", [
        'id' => $_POST['id'],
    ]);

    header('location:/notes');
    exit();
}
else{
    $note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->findOrFail();

    authorize($note['userId'] === $currentUserId);

    view('notes/show.view.php', [
        'heading' => $heading,
        'note' => $note,
    ]);
}
