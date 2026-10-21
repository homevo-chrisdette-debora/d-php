<?php

$postData = $_POST;

if (
    !isset($postData['email'])
    || trim($postData['email']) === ''
    || !isset($postData['message'])
    || trim($postData['message']) === ''
) {
    echo('Il faut un email et un message pour soumettre le formulaire.');
    return;
}

$nomOriginal = null;

if (isset($_FILES['capture-ecran']) && $_FILES['capture-ecran']['error'] !== UPLOAD_ERR_NO_FILE) {

    if ($_FILES['capture-ecran']['error'] !== UPLOAD_ERR_OK) {
        echo "L'envoi n'a pas pu être effectué, une erreur est survenue (fichier peut-être trop volumineux).";
        return;
    }
    if ($_FILES['capture-ecran']['size'] > 2 * 1024 * 1024) {
        echo "L'envoi n'a pas pu être effectué, image trop volumineuse (2 Mo maximum).";
        return;
    }
    $fileInfo = pathinfo($_FILES['capture-ecran']['name']);
    $extension = strtolower($fileInfo['extension'] ?? '');
    $allowedExtensions = ['png', 'jpg', 'jpeg', 'gif'];
    if (!in_array($extension, $allowedExtensions)) {
        echo "L'envoi n'a pas pu être effectué, l'extension " . htmlspecialchars($extension) . " n'est pas autorisée";
        return;
    }

    $path = __DIR__ . '/telechargement/';
    if (!is_dir($path)) {
        if (!mkdir($path, 0755, true)) {
            echo "L'envoi n'a pas pu être effectué, le dossier uploads n'a pas pu être créé.";
            return;
        }
    }
    $nomStocke = uniqid('capture_', true) . '.' . $extension;
    if (!move_uploaded_file($_FILES['capture-ecran']['tmp_name'], $path . $nomStocke)) {
        echo "L'envoi n'a pas pu être effectué, le fichier n'a pas pu être enregistré.";
        return;
    }

    $nomOriginal = basename($_FILES['capture-ecran']['name']);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Contact reçu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">

        <?php require_once(__DIR__ . '/entete_de_page.php'); ?>
        <h1>Message bien reçu !</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Rappel de vos informations</h5>
                <p class="card-text"><b>Email</b> : <?php echo(htmlspecialchars($postData['email'])); ?></p>
                <p class="card-text"><b>Message</b> : <?php echo(htmlspecialchars($postData['message'])); ?></p>
                <?php if ($nomOriginal !== null) { ?>
                    <p class="card-text"><b>Capture d'écran</b> : <?php echo(htmlspecialchars($nomOriginal)); ?> (envoyée avec succès)</p>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>