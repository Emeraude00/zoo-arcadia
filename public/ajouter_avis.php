

<?php
include '../config/database.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $commentaire = htmlspecialchars($_POST['commentaire']);
    $note = isset($_POST['note']) ? intval($_POST['note']) : 5; // Valeur par défaut 5 étoiles

    if (!empty($pseudo) && !empty($commentaire)) {
        $stmt = $pdo->prepare("INSERT INTO avis (pseudo, commentaire, note, `date`) VALUES (?, ?, ?, NOW())");
        if ($stmt->execute([$pseudo, $commentaire, $note])) {
            header("Location: index.php?message=success");
            exit;
        } else {
            echo "Erreur lors de l'enregistrement de votre avis.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
} else {
    echo "Accès non autorisé.";
}
if ($stmt->execute([$pseudo, $commentaire, $note])) {
    header("Location: index.php?message=success");
    exit;
} else {
    echo "Erreur lors de l'enregistrement de votre avis.";
}

?>
