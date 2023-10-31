<?php

require 'models/Database.php';
$requete = 'SELECT * FROM user';
$users = $connexion->query($requete)->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    $errors = [];
    $user = trim(filter_var($_POST['user'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));

    if (strlen($user) >= 20 || (empty($user))) :
        $errors = 'nom utilisateur trop long';
    endif;

    $newUser = $connexion->prepare('INSERT INTO user (title,content,user_id)
    VALUES (:title , :content , :user_id)');
    $newUser->bindValue(':user_id', $user, PDO::PARAM_INT);

    $newUser->execute();

endif;


require 'views/new-user.view.php';
