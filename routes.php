<?php

//return [
//    '/' => 'controllers/index.php',
//    '/about' => 'controllers/about.php',
//    '/notes' => 'controllers/notes/index.php',
//    '/note-create' => 'controllers/notes/create.php',
//    '/note' => 'controllers/notes/show.php',
//    '/contact' => 'controllers/contact.php',
//    '/our-mission' => 'controllers/our-mission.php',
//];

$router -> get('/', 'controllers/index.php');
$router -> get('/about', 'controllers/about.php');
$router -> get('/contact', 'controllers/contact.php');
$router -> get('/our-mission', 'controllers/our-mission.php');

$router -> get('/notes', 'controllers/notes/index.php');
$router -> get('/note', 'controllers/notes/show.php');
$router -> delete('/note', 'controllers/notes/destory.php');

$router -> get('/note/edit', 'controllers/notes/edit.php');
$router -> patch('/note', 'controllers/notes/update.php');

$router -> get('/notes/create', 'controllers/notes/create.php');
$router -> post('/notes', 'controllers/notes/store.php');