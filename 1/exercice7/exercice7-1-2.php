<?php
$a = 6;
$b = 5;
$c = 10;
$max = null;

if (!(is_int($a)) || !(is_int($b)) || !(is_int($c))) {

    echo "Les nombres A, B et C doivent  être des nombres réels";

} else {
    if ($a > $b) {

        $max = $a;

    } else {

        $max = $b;
    }

    if ($c > $max) {

        $max = $c;

        echo "Le nombre le plus grand est : " . $max;
    } else {
        echo "Les nombres A, B et C sont égaux";
    }


}




?>