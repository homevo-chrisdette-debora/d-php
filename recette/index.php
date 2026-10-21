<?php
require_once(__DIR__ . '/variable.php');
require_once(__DIR__ . '/fonction.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des recettes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    
    <div class="container">
        <!-- inclusion de l'entete de page du site -->
        <?php require_once __DIR__ . '/entete_de_page.php'; ?>

        <main>
            <h1>
                Affichage des recettes
            </h1>

            <?php foreach (obtenirRecettes($recettes) as $recette) { ?>
                <article>
                    <h2>
                        <?php echo ($recette['titre']) ?>
                    </h2>
                    <p>
                        <?php echo ($recette['recette']) ?>
                    </p>
                    <i>
                        <?php echo (afficherAuteur($recette['auteur'], $utilisateurs)) ?>
                    </i>
                </article>
            <?php } ?>
        </main>
    
    </div>
    
    <!-- inclusion du bas de page du site -->
    <?php require_once __DIR__ . '/pied_de_page.php'; ?>

</body>
</html>