<?php
require 'models/Database.php';
$id = $_GET['id'];

$note = $connexion->prepare('SELECT * FROM note 
INNER JOIN user  
ON note.user_id = user.user_id
WHERE note.id = :id');
$note->bindParam(':id', $id);
$note->execute();
$note = $note->fetch(PDO::FETCH_ASSOC);

require 'controllers/note-delete.php'
?>