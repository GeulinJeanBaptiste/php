<?php

require 'models/Database.php';

$users = $connexion->query('SELECT * FROM user')->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    $noteNew = $connexion->prepare('INSERT INTO note (title,content,user_id)
    VALUES (:title , :content , :user_id)
    ');
    $noteNew->bindParam(':title', $_POST['title']);
    $noteNew->bindParam(':content', $_POST['content']);
    $noteNew->bindParam(':user_id', $_POST['user']);
    $noteNew->execute();
    header('Location /notes');
    exit();
endif;


require 'views/note-new.view.php';
