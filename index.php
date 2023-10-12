<?php
require './fonction.php';
$titre = "Formulaire";

// dbug($_POST);
// Afficher des phrases avec des informations du formulaire: 
// votre nom est :
// votre email est :
// votre commentaire est :
// votre niveau est :
// vos competences sont :

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
    <form action="" method="POST">
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
require './index.view.php';
