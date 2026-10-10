<?php
$etudiants = [
    "Alice", "Benoit", "Chloé", "David", "Emma",
    "Farid", "Julie", "Karim", "Lina", "Marc"
];

$nom = readline("Entrer le nom à supprimer : ");

$pos = -1;
$i = 0;
$trouver = false;

while ($i < 10 && $trouver == false) {

    if (strtolower($etudiants[$i]) == strtolower($nom)) {
        $pos = $i;
        $trouver = true;
    }

    $i++;
}

if ($pos === -1) {
    echo "Nom invalide.";
} else {

    for ($i = $pos; $i < 9; $i++) {
        $etudiants[$i] = $etudiants[$i + 1];
    }

    $etudiants[9] = "";
}

?>