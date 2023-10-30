<?php
require 'models/Database.php';


// USER 
$requete = 'SELECT * FROM user';
$users = $connexion->query($requete)->fetchAll();
$errors = "";

// NOTE 


if ( !isset($_GET['id']) || !is_numeric($_GET['id']) || empty($_GET['id']) ) :
    abort();
endif;

$id = $_GET['id'];

$note = $connexion->prepare('SELECT 
n.id,
u.user_id,
n.title,
n.content,
n.created_at,
u.name
FROM note AS n
INNER JOIN user AS u 
ON n.user_id = u.user_id
WHERE n.id = :id');
$noteUpdate->bindParam(':id', $id);
$noteUpdate->execute();
$noteUpdate = $noteUpdate->fetch();

if ( empty($note) || $note === false ) :
    abort();
endif;

// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

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
    VALUES (:title , :content , :user_id)');
        $noteNew->bindValue(':title', $title, PDO::PARAM_STR);
        $noteNew->bindValue(':content', $content, PDO::PARAM_STR);
        $noteNew->bindValue(':user_id', $author, PDO::PARAM_INT);

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

require 'views/note-update.view.php';
