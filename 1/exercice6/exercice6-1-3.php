<?php
$a = 0;
$b = 4;

if (!(is_int($a)) || !(is_int($b))) {
    echo "Les nombres A et B doivent  être des entier";
} else {

    if ($a != 0 && $b != 0) {

        echo "l'équation est : " . "x =" . -$b / $a;

    } else if ($a == 0 && $b == 0) {

        echo "L'équation a une infinité de solutions (0 = 0).";

    } else if  ($a != 0 && $b == 0) {

        echo ("l'équation est  x =" . 0);
        
    } else {

        echo "Pas solution pour cette équation";
    }

}




?>