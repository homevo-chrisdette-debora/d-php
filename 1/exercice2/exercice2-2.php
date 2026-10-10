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

    $annee = 2000;
    $anneeActuelle = date('Y');

    $age = $anneeActuelle - $annee;



    // deuxième syntaxe

    if ($age < 10) {
        echo "les enfants ont plus de 10 ans.";
    } else {
        echo "les enfants ont moins de 10 ans.";
    }


    
?>
</body>

</html>