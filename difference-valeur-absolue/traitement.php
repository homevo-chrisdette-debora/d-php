
<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

if (
    !isset($_POST['nombre1'], $_POST['nombre2']) ||
    $_POST['nombre1'] === '' ||
    $_POST['nombre2'] === '' ||
    !is_numeric($_POST['nombre1']) ||
    !is_numeric($_POST['nombre2'])
) {
    die("Veuillez saisir deux nombres valides.");
}

$nombre1 = (float) $_POST['nombre1'];
$nombre2 = (float) $_POST['nombre2'];

$difference = $nombre1 - $nombre2;
$valeur_absolue = abs($difference);

// 2. Vérifier l'envoi du fichier
if (!isset($_FILES['capture-ecran'])) {
    die("Aucun fichier reçu.");
}

$fichier = $_FILES['capture-ecran'];

if ($fichier['error'] !== UPLOAD_ERR_OK) {
    die("Erreur lors de l'envoi du fichier.");
}

if ($fichier['size'] > 2000000) {
    die("Le fichier dépasse la taille maximale autorisée.");
}

$extension = strtolower(
    pathinfo($fichier['name'], PATHINFO_EXTENSION)
);

$extensionsAutorisees = ['png', 'jpg', 'gif'];

if (!in_array($extension, $extensionsAutorisees, true)) {
    die("Extension refusée. Utilisez PNG, JPG ou GIF.");
}

// 5. Vérifier et créer le dossier si nécessaire
$dossier = __DIR__ . '/captures';

if (!is_dir($dossier)) {
    if (!mkdir($dossier, 0755, true)) {
        die("Impossible de créer le dossier captures.");
    }
}

// 6. Déplacer le fichier avec un nom unique
$nomFichier = uniqid('capture_', true) . '.' . $extension;
$destination = $dossier . '/' . $nomFichier;

if (!move_uploaded_file($fichier['tmp_name'], $destination)) {
    die("Erreur lors du déplacement du fichier.");
}

// 7. Afficher le résultat
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat du calcul</title>
</head>
<body style="font-family: Arial; margin: 40px;">

    <h2>Résultat du calcul</h2>

    <p>Nombre 1 : <strong><?= htmlspecialchars((string)$nombre1) ?></strong></p>
    <p>Nombre 2 : <strong><?= htmlspecialchars((string)$nombre2) ?></strong></p>

    <p>Différence :
        <strong><?= htmlspecialchars((string)$difference) ?></strong>
    </p>

    <p>Valeur absolue :
        <strong><?= htmlspecialchars((string)$valeur_absolue) ?></strong>
    </p>

    <h3>Capture d'écran enregistrée avec succès !</h3>
    <p>Nom du fichier : <?= htmlspecialchars($nomFichier) ?></p>

    <p><a href="index.php">Retour au formulaire</a></p>

</body>
</html>
  