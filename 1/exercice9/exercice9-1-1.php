<?php
$choix = null;
$a = null;
$b = null;
$c = null;
$max = null;
$somme = null;
$produit = null;
$moyenne = null;

63
echo "<br>";

$a = 4;
$b = 8;
$c = 2;
$choix = 3;

switch ($choix) {
    case 1:
        $somme = $a + $b + $c;
        echo "La somme des trois nombres est : " . $somme;
        break;
    case 2:
        $produit = $a * $b * $c;
        echo "Le produit des trois nombres est :" . $produit;
        break;
    case 3:
        $moyenne = $a + $b + $c / 3;
        echo "La moyenne des trois nombres est : " . $moyenne;
        break;
    default:
        echo "Couleur non reconnue.";
        break;
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$max = $a;

if ($b > $a) {

    $max = $b;

}

if ($c > $max) {

    $max = $c;


}

if ($a == $b && $b == $c) {
    echo "Les nombres A, B et C sont égaux.";
} else {
    echo "Le nombre le plus grand est : " . $max;
}

?>