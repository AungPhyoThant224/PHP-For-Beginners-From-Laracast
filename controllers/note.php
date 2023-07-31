<?php

$heading = "Note";

$config = require ('config.php');
$db = new Database($config);

$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->fetch();

require 'views/note.view.php';