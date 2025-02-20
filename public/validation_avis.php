<link rel="stylesheet" href="css/style.css">
<?php
include 'includes/header.php';
include 'includes/database.php';
session_start();

// Vérifier si l'utilisateur est bien un employé
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== "employe") {
    header("Location: login.php");
    exit();
}

// Récupérer les avis non validés
$stmt = $pdo->query("SELECT * FROM avis WHERE statut = 'en attente'");
$avis = $stmt->fetchAll();
?>

<main class="avis-page">
    <h1>Validation des Avis</h1>

    <?php if (empty($avis)) : ?>
        <p>Aucun avis en attente.</p>
    <?php else : ?>
        <table>
            <thead>
                <tr>
                    <th>Pseudo</th>
                    <th>Commentaire</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($avis as $avisItem) : ?>
                    <tr>
                        <td><?= htmlspecialchars($avisItem['pseudo']) ?></td>
                        <td><?= htmlspecialchars($avisItem['commentaire']) ?></td>
                        <td>
                            <a href="traiter_avis.php?id=<?= $avisItem['id'] ?>&action=valider" class="btn-success">✅ Valider</a>
                            <a href="traiter_avis.php?id=<?= $avisItem['id'] ?>&action=supprimer" class="btn-danger">❌ Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</main>

<?php include 'includes/footer.php'; ?>
