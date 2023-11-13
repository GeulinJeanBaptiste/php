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

    // strlen($title) >= 100 permet de limiter le titre à 100
    if (strlen($title) >= 100 || strlen($title) === 0  || (strlen($content) >= 1000 || strlen($title) === 0) || (empty($user))) :
        $errors = 'Contenu, titre ou utilisateur trop long ou non remplie';
    endif;

    // =====
    // IMAGE
    // =====

    $target_dir = "uploads/";
    $uploadfile = $target_dir . basename($_FILES['image']['name']);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
        $imageInsert = basename($_FILES['image']['name']);
    } else {
        $errors[] = 'Erreur d\'upload avec votre image !!!';
    };

    // =====
    // IMAGE
    // =====


    if (empty($errors)) :

        $noteNew = $connexion->prepare('INSERT INTO note (title,content,user_id,image)
        VALUES (:title , :content , :user_id, :image)');
        $noteNew->bindValue(':title', $title, PDO::PARAM_STR);
        $noteNew->bindValue(':content', $content, PDO::PARAM_STR);
        $noteNew->bindValue(':user_id', $user, PDO::PARAM_INT);
        $noteNew->bindValue(':image', $imageInsert, PDO::PARAM_STR);


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
