<?php


require './fonction.php';

$titre = "Boucles php";



$planetes = ['mars', 'terre', 'uranus', 'venus', 'jupiter', 'mercure'];
$planetes2 = [
    'm' => 'mars',
    't' => 'terre',
    'u' => 'uranus',
    'v' => 'venus',
    'j' => 'jupiter',
    'm' => 'mercure'
];

dbug($planetes);

/* foreach ($planetes as $planete) {
    // echo "$planetes<br>";
    echo ucwords($planete) . '<br>';
}
 */
/* foreach ($planetes2 as $planete) {
    // echo "$planetes<br>";
    echo ucwords($planete) . '<br>';
} */

foreach($planetes as $clef => $valeur){
    echo $clef . ' : ' . $valeur . '<br>';
};
foreach($planetes2 as $clef => $valeur){
    echo $clef . ' : ' . $valeur . '<br>';
};






require './index.view.php';
