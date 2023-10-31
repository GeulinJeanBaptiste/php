<?php

require 'models/Database.php';
$requete = 'SELECT * FROM user';
$users = $connexion->query($requete)->fetchAll();
// $errors = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    $errors = [];
    // dd($_POST);
    $title = trim(filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $content = trim(filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $user = trim(filter_var($_POST['user'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));


    if (strlen($title) >= 100 || strlen($title) === 0  || (strlen($content) >= 1000 || strlen($title) === 0) || (empty($user))) :
        $errors = 'Contenu, titre ou utilisateur trop long ou non remplie';
    endif;

    if (empty($errors)) :

        $noteNew = $connexion->prepare('INSERT INTO note (title,content,user_id)
    VALUES (:title , :content , :user_id)');
        $noteNew->bindValue(':title', $title, PDO::PARAM_STR);
        $noteNew->bindValue(':content', $content, PDO::PARAM_STR);
        $noteNew->bindValue(':user_id', $user, PDO::PARAM_INT);

        $noteNew->execute();

        $lastInsertId = $connexion->lastInsertId();
        if ($lastInsertId) :

            header('Location: /notes');
            exit();
        else :
            abort();
        endif;
    endif;
endif;

require 'views/note-new.view.php';
