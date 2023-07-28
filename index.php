<?php
require 'functions.php';
//require 'router.php';

require 'Database.php';

$config = require ('config.php');

$id = $_GET['id'];
$query = "select * from posts where id = :id";
$db = new Database($config);

$posts = $db->query($query, ['id' => $id])->fetchAll();

dd($posts);