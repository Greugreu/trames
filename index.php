<?php

require 'functions/debug.php';
/*include 'functions/functions.php';*/

$fichier = file_get_contents('./files/cars.json');

$json = json_decode($fichier, true);

foreach ($json as $cars) {
    $keys = array_keys($cars);
}

function cmp($a, $b)
{
    return strcmp($a["Displacement"], $b["Displacement"]);
}


usort($json, "cmp");

while (list($key, $value) = each($json)) {
    echo "\$Displacement[$key]: " . $value["Displacement"] . "\n";
}

/*
 * rebuild le tableau
 * faire des titres des liens avec argument d'url la clé
 * changer la fonction cmp avec la clé en argument
 * aller chercher la clé dans $get
 * injection de la clé dans la fonction et dans usort
 * réaffichage du tableau rangé en fonction de la clé
 */
