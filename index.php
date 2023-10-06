<?php


require './fonction.php';

$titre = "Tableaux php";


/* $tab1 = [];
$notes = [12,14,6,10];

$tab1[] = 'Janvier';
$tab1[] = 45;
$tab1[] = true;

array_push($tab1, 'Voiture', 10.5, [45,true,'Truc']);

$tabFusion = array_merge($tab1,$notes);
dbug($tabFusion);
dd($tabFusion[5][2]); */

// Tableaux associatif

/* $fruits = [
    'banane' => 'jaune',
    'pomme' => 'rouge',
    'kiwi' => 'vert',
]; */

// dd($fruits['pomme']);

// $fruits['poire'] = 'vert';

// dd($fruits);

// $chaine = implode(",", $fruits);
// $fruits2 = explode(",",$chaine);
// $phrase = "Une petite phrase courte.";
// $tabphrase = explode(" ",$phrase);

// dd($tabphrase);


/* $planetes = ['mars', 'terre', 'uranus', 'venus', 'jupiter', 'mercure'];
$planetes2 = [
    'm' => 'mars',
    't' => 'terre',
    'u' => 'uranus',
    'v' => 'venus',
    'j' => 'jupiter',
    'm' => 'mercure'
];
dbug($planetes2);
sort($planetes2);
dd($planetes2); */

// $tab = [];
// $tab[] = ['A', 'B', 'C'];
// $tab[] = ['Q', 'R', 'T'];
// $tab[] = ['E', 'U', 'P', 'I'];


// dbug($tab);
// Ecrire le mot ceppic avec les lettres du tableau $tab;
// dd($tab[0][2].$tab[2][0].$tab[2][2].$tab[2][2].$tab[2][3].$tab[0][2]);
// C=2 E= 0 P=2 i=3;

$person1 = [
    'nom' => 'Carle',
    'prenom' => 'Awa',
    'email' => 'cawa@wahoo.com'
];

$people = [
    $person1,
    [
        'nom' => 'Mourad',
        'prenom' => 'Michel',
        'email' => 'moumi@caramail.com'
    ],
    [
        'nom' => 'Dupond',
        'prenom' => 'Lucie',
        'email' => 'ludo@gimayle.com'
    ]
];

dbug($people);
dbug("Le prenom de " . $people[2]['prenom'] . " est " . $people[2]['nom']);
dbug("L'email de ".$people[1]['prenom']." ".$people[1]['nom']." est ".$people[1]['email']);


// Afficher les phrases suivantes :
// Le nom de Lucie est Dupond.
// L'email de Michel MOURAD est moumi@caramail.com.






require './index.view.php';
