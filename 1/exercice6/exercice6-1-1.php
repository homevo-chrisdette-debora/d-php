<?php
$a = 0;
$b = 5;

if (!(is_int($a)) || !(is_int($b))) {

    echo "Les nombres A et B doivent  être des entier";

} else {
    if ($a != 0 && $b != 0) {

        echo "l'équation est : " . "x =" . -$b / $a;
    }

    if ($a != 0 && $b == 0) {
        echo ("l'équation est  x =" . 0);
    }

    if (($a == 0 && $b == 0) || ($a == 0 && $b != 0)) {
        echo "Pas solution pour cette équation";
    }
}




?>