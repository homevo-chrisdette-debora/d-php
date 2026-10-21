<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <?php require_once(__DIR__ . '/entete_de_page.php'); ?>
        <h1>Contactez nous</h1>
          <form id="formulaire-contact" action="submit_contact.php" method="POST" enctype="multipart/form-data" novalidate>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" required>
                <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
                <div class="invalid-feedback">Veuillez saisir une adresse email valide.</div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Votre message</label>
                <textarea class="form-control" placeholder="Exprimez vous" id="message" name="message" required></textarea>
                <div class="invalid-feedback">Veuillez saisir votre message.</div>
            </div>
            <div class="mb-3">
                <label for="capture-ecran" class="form-label">Votre capture d'écran (facultatif)</label>
                <input type="file" class="form-control" id="capture-ecran" name="capture-ecran" accept=".jpg,.jpeg,.gif,.png">
                <div class="form-text">Formats acceptés : png, jpg, jpeg, gif. Taille maximale : 2 Mo.</div>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
        <br/>
    </div>

    <?php require_once(__DIR__ . '/pied_de_page.php'); ?>
</body>
</html>