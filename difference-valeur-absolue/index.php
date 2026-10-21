
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de la Valeur Absolue</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: inline-block;
            width: 150px;
        }

        input[type="number"] {
            padding: 5px;
            width: 150px;
        }

        button {
            padding: 5px 15px;
            margin-right: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h1>Calculer la valeur absolue de la différence</h1>

    <form action="contact-resultat.php" method="POST"
          enctype="multipart/form-data">

        <div class="form-group">
            <label for="nb1">Nombre 1 :</label>
            <input type="number" id="nb1" name="nombre1"
                   step="any" required>
        </div>

        <div class="form-group">
            <label for="nb2">Nombre 2 :</label>
            <input type="number" id="nb2" name="nombre2"
                   step="any" required>
        </div>

        <div class="form-group">
            <label for="capture-ecran">Capture d'écran :</label>
            <input type="file" name="capture-ecran"
                   id="capture-ecran"
                   accept=".png,.jpg,.gif" required>
        </div>

        <button type="reset">Annuler</button>
        <button type="submit">Calculer et envoyer</button>

    </form>

</body>
</html>
