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

$fruits = [
    'banane' => 'jaune',
    'pomme' => 'rouge',
    'kiwi' => 'vert',
];

// dd($fruits['pomme']);

// $fruits['poire'] = 'vert';

// dd($fruits);

$chaine = implode(",", $fruits);
dd($chaine);
require './index.view.php';
