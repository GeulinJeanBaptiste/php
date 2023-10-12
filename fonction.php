<?php

declare(strict_types=1);

function dbug($value)
{
    echo '<pre style="background-color:black; color:white;overflow: auto;padding: 10px;">';
    print_r($value);
    // var_dump($tableau);
    echo '</pre>';
}


function dd($value)
{
    dbug($value);
    die('Script php arrété !!!');
}

/* function calcul($a = 10, $b = 12)
{
    // $c = $a + $b;
    // return $c;
    // echo 'Calcul';
    return $a + $b;
}

echo calcul(0,10); */

// Créer une fonction qui calcul le prix TTC en lui passant un prix HT et la TVA.
// calculPrixTTC

// Crer une fonction qui calcul l'age d'une personne en lui donnant sa date de naissance.

/* function prixTTC($TVA, $HT)
{
    return $HT + ($HT * $TVA);
}
echo prixTTC(.20, 18); */

/* function Age($naissance, $annee = 2023)
{
    return $annee - $naissance;
}
echo Age(1985); */


/* function calculAge($anneeNaissance)
{
    $anneeEnCours = date("Y");
    return $anneeEnCours -$anneeNaissance;
}
echo calculAge(1990); */

/* $calcul = function ($nb) {
    return $nb + 1;
};
echo $calcul(25); */

/* function calcul(int | float $a, int | float $b): mixed
{
    return $a + $b;
}
echo calcul(5.6, 7); */

$x = 5;
$y = 3;

function calcul($xPasseEnParametre)
{
    // global $y;
    $y = 7;
    return $xPasseEnParametre + $y;
}
echo calcul(5);
dd($y);
