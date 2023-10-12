<?php
require './fonction.php';
$titre = "Formulaire";

// dbug($_POST);
// dbug($_REQUEST);
dbug(htmlspecialchars($_GET['nom']));




// Afficher des phrases avec des informations du formulaire: 
// votre nom est :
// votre email est :
// votre commentaire est :
// votre niveau est :
// vos competences sont :
// if (isset($_POST['submitted'])) :
if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    echo "Votre nom est : " . $_POST['nom'] . ".<br>";
    echo "Votre email est : " . $_POST['email'] . ".<br>";
    echo "Votre commentaire est : " . $_POST['commentaire'] . ".<br>";
    echo "Votre niveau est : " . $_POST['niveau'] . ".<br>";
    echo "Vos competences sont : "  . implode(",", $_POST['competence']) . ".<br>";
endif;
