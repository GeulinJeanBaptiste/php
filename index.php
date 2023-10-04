<?php

// include('./header.php');

// include_once './header.php';
require './header.php';
require './fonction.php';


// un commentaire
/* un commentaire 
sur 
plusieurs
ligne */

// echo "<h1>CEPPIC PHP</h1>";
// $variable = 'une variable';
// $Variable = 'Une Variable';
// echo $variable;
// echo $variable . $Variable;
// echo $variable . " " . $Variable;
// echo "$variable";
// echo '$variable';
// echo "$variable . $Variable";
// echo "$variable . $Variable";

// $camelCase = 'une variable en camel case';
// $snake_case = 'une variable en snake case';
// $kebab-case = 'une variable en kebab case'; php ne prend pas le - pour les variable.
// $PascalCase = 'une variable en pascal case';
// $nombre = 45;
// $nombreDeciamle = 10.5;
// $booleen = false;

/* print_r($nombre);
var_dump($nombre);
var_dump($booleen); */
// var_dump($variable);

// $fruit1 = "pomme";
// $fruit2 = "banane";


/* echo "<p>$fruit1 <br> $fruit2</p>";
echo "<p>$fruit1" . "<br>" . "$fruit2</p>";
echo '<p>' . $fruit1  . '<br>'  . $fruit2 . '</p>'; */

// Ajourd'hui il fait beau

// echo 'Ajourd\'hui il fait beau'

// $resultat = '';
// $resultat .= '<h1>';
// $resultat .= 'Cours PHP';
// $resultat .= '</h1>';
// echo $resultat;


// echo $titre;

$tableau = [
    "groupe",
    23, 4.5,
    false,
    [1, 2, 3, true]
];

// dd($tableau);
// dbug($titre);

define('HOST',);




?>

<!-- Le retour PHP du serveur est toujours en html. -->

<?php
include('./footer.php');
?>