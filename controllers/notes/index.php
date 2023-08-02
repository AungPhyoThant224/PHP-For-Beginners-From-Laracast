<?php

$heading = "Notes";

$config = require basePath('config.php');
$db = new Database($config);

$notes = $db->query("select * from notes where userId = 1", [])->get();

view('notes/index.view.php', [
    'heading' => $heading,
    'notes' => $notes,
]);