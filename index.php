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

$couleur = 'violet';
/* switch ($couleur) {
    case 'rouge':
        echo 'Votre couleur favorite est le rouge';
        break;
    case 'bleu':
        echo 'Votre couleur favorite est le bleu';
        break;
    case 'vert':
        echo 'Votre couleur favorite est le vert';
        break;
    default:
        echo 'Votre couleur favorite est ni le rouge, ni le bleu, ni le vert';
} */

$return_value = match($couleur) {
    'rouge' => 'Votre couleur prefere est le rouge',
    'bleu' => 'Votre couleur prefere est le bleu',
    'vert'=>'Votre couleur prefere est le vert',
    default =>'Votre couleur favorite est ni le rouge, ni le bleu, ni le vert',
};
dbug($return_value);





require './index.view.php';
