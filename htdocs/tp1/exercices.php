<?php
/**
 * 1.
 * Calculer de la moyenne
*/
$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;
$moyenne = 0;
echo 'La moyenne est de '.$moyenne.' / 20.';


/**
 * 2.
 * Calculer le prix ttc
 */
$prix_ht = 50;
$tva = 20;
$prix_ttc = 0;
echo 'Le prix TTC du produit est de ' . $prix_ttc . ' €.';


/**
 * 3.
 * Déclarer une variable $test qui contient la valeur 42. En utilisant la fonction var_dump(),
 * faire en sorte que le type de la variable $test soit string et que la valeur soit bien de 42.
*/



/**
 * 4.
 * Déclarer une variable $sexe qui contient une chaîne de caractères.
 * Créer une condition qui affiche un message différent en fonction de la valeur de la variable.
 */



/**
 * 5.
 * Déclarer une variable $heure qui contient la valeur de type integer de votre choix comprise entre 0 et 24.
 * Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.
 */


/**
 * 6.
 * En utilisant la boucle for, afficher la table de multiplication du chiffre 5.
 */


/**
 * 7.
 * Déclarer une variable avec le nom de votre choix et avec la valeur 0.
 * Tant que cette variable n'atteint pas 20, il faut :
 *     . l'afficher ;
 *     . incrémenter sa valeur de 2 ;
 * Si la valeur de la variable est égale à 10, la mettre en valeur avec la balise HTML appropriée.
 */


/**
 * 8.
 * Déclarer une variable de type array qui stocke les informations suivantes :
 *
 *   . France : Paris
 *   . Allemagne : Berlin
 *   . Italie : Rome
 *
 * Afficher les valeurs de tous les éléments du tableau en utilisant la boucle foreach.
 */


/**
 * 9.
 * En utilisant le tableau ci-dessous, afficher seulement les pays qui ont une population supérieure ou égale à 20 millions d'habitants.
 *
 */
$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
);

/**
 * 10.
 * En utilisant le tableau ci-dessous afficher la prase suivante pour chaque pays:
 *  #PAYS# : il y à #NOMBRE_HABITANT# d'habitants
 *
 * utiliser les functions de tableau exemple : array_map()
 */
$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
);

/**
 * 11.
 * En utilisant le tableau de keys ci-dessous, reordonner le pour le ranger par taille de longueur de chaine de caractere
 *
 */
$keys = array(
    "aze",
    "poi45p",
    "p8333335p",
    "x24p"
);

/* résultat une fois ordonné :
array(4) {
    [0]=>
    string(3) "aze"
    [1]=>
    string(4) "x24p"
    [2]=>
    string(6) "poi45p"
    [3]=>
    string(9) "p8333335p"
}*/