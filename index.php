<?php


require './fonction.php';

$titre = "conditions php";






$user = [
    'nom' => 'Doupet',
    'email' => 'ldoupe@yaya.com',
    'competence' => ['php', 'react', 'python']
];

/* if/else/elsif 
/*
>
<
>=
<=
== comparaison d'egalite en valeur.
=== comparaison d'egalite en valeur et en type ( il doit être égale en tout).
!= 
!==
fin du commentaire */

//  $age = 20;
// if ($age >= 18) {
//     echo 'peut voter. ';
// } else {
//     echo 'Ne peut pas voter !!!';
// }
// echo($age >=18) ? 'Peut voter' : 'Ne peut pas voter !'; 
// if ($age >= 18) :
//     echo 'peut voter. ';
// else :
//     echo 'Ne peut pas voter !!!';
// endif; 

/* $heure = 10;
$heure = date('H');


if ($heure <= 12) :
    echo "On est le matin.";
elseif ($heure >= 18) :
    echo "On est le soir.";
else :
    echo "On est l'apres-midi.";
endif; */


/* $a = 20;
$b = 5;

if ($b === '5') :
    echo 'La variable $b n\'est pas égale à 5.';
endif; */

/* $vrai = false;
if ($vrai) :
    echo 'Vrai';
else :
    echo 'Faux';
endif; */

/* echo $vrai ? 'Vrai' : 'Faux'; */

// $votes = 7500;
// dbug($votes);
// $votesprécédents = 1254;
// ($votes > $votesprécédents) ? $votes-- : $votes++;
// dbug($votes);






require './index.view.php';
