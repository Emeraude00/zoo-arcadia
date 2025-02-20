<?php
include 'includes/database.php';
session_start();

// Vérifier si l'utilisateur est bien un employé
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== "employe") {
    header("Location: login.php");
    exit();
}

// Vérifier si un ID d'avis est envoyé
if (isset($_GET['id']) && isset($_GET['action'])) {
    $id = intval($_GET['id']);
    $action = $_GET['action'];

    if ($action === "valider") {
        $stmt = $pdo->prepare("UPDATE avis SET statut = 'validé' WHERE id = ?");
        $stmt->execute([$id]);
    } elseif ($action === "supprimer") {
        $stmt = $pdo->prepare("DELETE FROM avis WHERE id = ?");
        $stmt->execute([$id]);
    }
}

header("Location: validation_avis.php");
exit();
?>
