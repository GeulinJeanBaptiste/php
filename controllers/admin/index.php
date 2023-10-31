<?php
require 'models/Database.php';

$notes = $connexion->query('SELECT * FROM note ORDER BY id DESC')->fetchAll();

/* $requete = 'SELECT * FROM user';
$users = $connexion->query($requete)->fetchAll(); */

require 'views/admin/index.view.php';

