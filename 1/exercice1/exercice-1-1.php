<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ma page web</title>
</head>

<body>
    <h1>Ma page web</h1>
    <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>


    <?php

    $a = 5;
    $b = 10;

    // première syntaxe

    if ($a > $b) {
        echo "$a est le plus grand";
    }


    if ($b > $a) {
        echo "$b est le plus grand";
    }


    if ($a == $b) {
        echo "Aucun n'est le plus grand, ils sont égaux";
    }





    ?>
</body>

</html>