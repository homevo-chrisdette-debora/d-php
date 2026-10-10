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

   
    $nbr1 = 5;
    $nbr2 = 10;

    $difference = $nbr1 - $nbr2;

    $valeurAbsolue = null;;



    // deuxième syntaxe

    if ($difference >= 0) {
      
        $valeurAbsolue = $difference;
        echo "la valeur absolue de la différence est : " . $valeurAbsolue;
    } else {

        $valeurAbsolue = -$difference;
        echo "la veleur absolue de la différence est : " .  $valeurAbsolue;
    }


    





    ?>
</body>

</html>