<?php
require './fonction.php';

// dd($_SERVER['REQUEST_URI']);

// dd(parse_url($_SERVER['REQUEST_URI'])['path']);
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/php' => 'controllers/index.php',
    '/php/contact' => 'controllers/contact.php',
    '/php/notes' => 'controllers/notes.php',
];
