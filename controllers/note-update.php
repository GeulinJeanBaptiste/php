<?php
require 'models/Database.php';


// USER 
$requete = 'SELECT * FROM user';
$users = $connexion->query($requete)->fetchAll();
$errors = "";

// NOTE 


if (!isset($_GET['id']) || !is_numeric($_GET['id']) || empty($_GET['id'])) :
    abort();
endif;

$id = $_GET['id'];

$noteUpdate = $connexion->prepare('SELECT 
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

if (empty($noteUpdate) || $noteUpdate === false) :
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
        $_POST['author'],
        FILTER_SANITIZE_FULL_SPECIAL_CHARS
    ));
    $author = trim(filter_var(
        $_POST['author'],
        FILTER_SANITIZE_NUMBER_INT
    ));
    if (strlen($title) >= 100 || strlen($title) === 0  || (strlen($content) >= 1000 || strlen($title) === 0) || (empty($user))) :
        $errors = 'Contenu, titre ou utilisateur trop long ou non remplie';
    endif;
    if (empty($errors)) :
        // dd($_POST);
        $noteNew = $connexion->prepare('UPDATE note SET title = :title ,content = :content ,user_id = :user_id WHERE id = :id');
        $noteNew->bindValue(':title', $title, PDO::PARAM_STR);
        $noteNew->bindValue(':content', $content, PDO::PARAM_STR);
        $noteNew->bindValue(':user_id', $author, PDO::PARAM_INT);

        $noteNew->bindValue(':id', $id, PDO::PARAM_INT);


        $noteNew->execute();


        header('Location: /notes');
        exit();

    endif;
endif;

require 'views/note-update.view.php';
