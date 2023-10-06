<?php


require './fonction.php';

$titre = "Boucles php";



/* $planetes = ['mars', 'terre', 'uranus', 'venus', 'jupiter', 'mercure'];
$planetes2 = [
    'm' => 'mars',
    't' => 'terre',
    'u' => 'uranus',
    'v' => 'venus',
    'j' => 'jupiter',
    'm' => 'mercure'
];

dbug($planetes); */

/* foreach ($planetes as $planete) {
    // echo "$planetes<br>";
    echo ucwords($planete) . '<br>';
}
 */
/* foreach ($planetes2 as $planete) {
    // echo "$planetes<br>";
    echo ucwords($planete) . '<br>';
} */

/* foreach ($planetes as $clef => $valeur) {
    echo $clef . ' : ' . $valeur . '<br>';
};
foreach ($planetes2 as $clef => $valeur) {
    echo $clef . ' : ' . $valeur . '<br>';
};
foreach ($planetes2 as $clef => $valeur) :
    echo $clef . ' : ' . $valeur . '<br>';
endforeach;
 */

$user = [
    'nom' => 'Doupet',
    'email' => 'ldoupe@yaya.com',
    'competence' => ['php', 'react', 'python']
];
dbug($user);
//Afficher dans une liste UL toutes les données de ce user avec for each.
foreach ($user as $key => $value) :
    echo $key . ' : ' . $value;
endforeach;






require './index.view.php';
