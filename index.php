<?php
require './fonction.php';

// dd($_SERVER['REQUEST_URI']);

// dd(parse_url($_SERVER['REQUEST_URI'])['path']);
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if ($uri === '/php/'):
    echo'Je suis à la racine de mon dossier travail.';
elseif($uri == './php/contact/'):
        echo'contact.php';
endif;
