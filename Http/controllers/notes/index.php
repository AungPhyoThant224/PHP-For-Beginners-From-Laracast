<?php

use Core\App;
use Core\Database;

$heading = "Notes";

$db = App::container()->resolve(Database::class);

$notes = $db->query("select * from notes where userId = 1", [])->get();

view('notes/index.view.php', [
    'heading' => $heading,
    'notes' => $notes,
]);