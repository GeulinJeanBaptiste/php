<?php

require 'models/Database.php';
$requete = 'SELECT * FROM user';
$users = $connexion->query($requete)->fetchAll();
$errors = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') :

    $title = trim(filter_var(
        $_POST['title'],
        FILTER_SANITIZE_FULL_SPECIAL_CHARS
    ));
    $content = trim(filter_var(
        $_POST['content'],
        FILTER_SANITIZE_FULL_SPECIAL_CHARS
    ));
    $user = trim(filter_var(
        $_POST['user'],
        FILTER_SANITIZE_FULL_SPECIAL_CHARS
    ));
    if (strlen($title) >= 10 || strlen($title) === 0  || (strlen($content) >= 1000 || strlen($title) === 0) || (empty($user))) :
        $errors = 'Contenu, titre ou utilisateur trop long ou non remplie';
    endif;
    if (empty($errors)) :
        $noteNew = $connexion->prepare('INSERT INTO note (title,content,user_id)
    VALUES (:title , :content , :user_id)
    ');
        $noteNew->bindParam(':title', $_POST['title']);
        $noteNew->bindParam(':content', $_POST['content']);
        $noteNew->bindParam(':user_id', $_POST['user']);
        $noteNew->execute();
        header('Location: /notes');
        exit();
    endif;
endif;

require 'views/note-new.view.php';
