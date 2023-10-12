<?php
require './fonction.php';
$titre = "Formulaire";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Formulaire</title>
</head>

<body>
    <h1>formulaire</h1>
    <form action="./traitement.php" method="">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required>
        <label for="email">Email:</label>
        <input type="email" name="email">
        <label for="commentaire">Commentaire :
            <textarea name="commentaire" id="commentaire" cols="30" rows="10">
            </textarea>
        </label>
        <label for="niveau">Niveau :
            <input type="radio" name="niveau" value="debutant">Débutant
            <input type="radio" name="niveau" value="debutant">Intermediaire
            <input type="radio" name="niveau" value="debutant">Expert
        </label>
        <label for="competence">
            Competence :
            PHP<input type="checkbox" name="competence[]" value="php">
            Python<input type="checkbox" name="competence[]" value="Python">
            CSS<input type="checkbox" name="competence[]" value="CSS">
            Javascript<input type="checkbox" name="competence[]" value="Javascript">
        </label>
        <input type="submit" name="submitted" value="Valider">
    </form>
</body>

</html>

<?php

// echo "votre nom est " . $_POST["nom"] . ". ";
// echo "votre email est " . $_POST["email"] . ". ";
// echo "votre commentaire est " . $_POST["commentaire"] . ". ";
// echo "votre niveau est  " . $_POST["niveau"];
// $competence = implode(" ", $_POST["competence"]);
// echo "vos competence sont  " . $competence;

require './index.view.php';