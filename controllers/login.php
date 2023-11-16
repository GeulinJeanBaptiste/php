<?php
session_start();
require 'models/Database.php';

// Traitement du login



if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    $errors = [];

    $email = trim(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));

    $motdepasse = $_POST['motdepasse'];

    if (strlen($email) === 0) :
        $errors[] = 'Email vide !!!';
    endif;

    if (strlen($email) === 50) :
        $errors[] = 'Email trop long !!!';
    endif;

    if (empty($errors)) :
        $loginUser = $connexion->prepare('SELECT * FROM user WHERE email = :email AND motdepasse = :motdepasse AND status = 1');

        $loginUser->bindValue(':email', $email, PDO::PARAM_STR);
        $loginUser->bindValue(':motdepasse', $motdepasse, PDO::PARAM_STR);
        $loginUser->execute();
        $loginUser = $loginUser->fetch();

        if (!is_array($loginUser)) :
            $errors[] = 'Email ou Mot de passe oncorrect !';
        else :
            // SESSION
            $_SESSION['islogged'] = true;
            $_SESSION['userId'] = $loginUser['user_id'];

            header('Location: /notes');
            die();
        endif;
    endif;

endif;


require 'Views/login.view.php';
