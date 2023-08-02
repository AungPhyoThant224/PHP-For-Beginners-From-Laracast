<?php

$heading = "Notes";

$config = require('config.php');
$db = new Database($config);

$notes = $db->query("select * from notes where userId = 1", [])->get();

require 'views/notes/index.view.php';