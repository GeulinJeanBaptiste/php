<?php


require './fonction.php';

$titre = "Operateurs php";
$x = 4;
$y = 2;
$z = 5;

/* Operateurs 
+   addition
-   soustraction
*   multiplication
/   division
**  puissance
%   Division et il donne le reste. modulo.
 */
// $calcul = $x + $y;
// $calcul = $x % $y;
// $calcul = ($x + $y) *$y;
// $x += 5;
// $x %= 5;
// $i = 0;
// $i++; " Le ++ rajoute 1";
// dd($i); // $i = $i +1;
// $i += 1;
// $i--; "Le -- enleve 1";
// dd($i); // $i = $i +1;
// dd($x);
// $anneeDeNaissance = 1990;

// $age = date("Y")- $anneeDeNaissance;

// dd(date("Y"));
// dd($age);

// Calcul le prix TTC

$prixHT = 34;
$TVA = 10;

$prixTTC = $prixHT + (($prixHT * $TVA)/100);
dd($prixTTC);

// prixTTC ? 




require './index.view.php';
