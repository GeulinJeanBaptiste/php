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

/* $person1 = [
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
dbug("L'email de " . $people[1]['prenom'] . " " . $people[1]['nom'] . " est " . $people[1]['email']); */

// Afficher les phrases suivantes :
// Le nom de Lucie est Dupond.
// L'email de Michel MOURAD est moumi@caramail.com.

// $jsonPeople = json_encode($people);

// dbug($jsonPeople);

$jsonPerson = '{
    "nom" : "Pontpasneuf",
    "prenom" : "Albert",
    "email" : "pontal@free.fr",
    "couleur" : ["rouge","vert","jaune"],
    "image" : "https://ximg.es/128x128/000/fff"
}';

$jsonPersonArrayPhp = json_decode($jsonPerson, true);

dbug($jsonPersonArrayPhp);

// Afficher une card pour cette personne.

// figure>img>figcaption>ul>li*2
?>
<figure>
    <img src="<?= $jsonPersonArrayPhp['image'] ?>">
    <figcaption>
        <ul>
            <li><?= $jsonPersonArrayPhp['prenom'] ?><?= $jsonPersonArrayPhp['nom'] ?></li>
            <li><?= $jsonPersonArrayPhp['email'] ?></li>
        </ul>
    </figcaption>
    </img>
</figure>
<?php
$urlApi = ('https://pokeapi.co/api/v2/pokemon/ditto');
$jsonApi = file_get_contents($urlApi);
$jsonApiArray = json_decode($jsonApi, true);
// dd($jsonApiArray['abilities'][0]['ability']['name']);












require './index.view.php';
?>