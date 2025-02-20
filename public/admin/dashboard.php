<?php
session_start();

// Vérifie si l'utilisateur est un administrateur
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../login.php');
    exit();
}

// Connexion à la base de données
include '../config/database.php';

// Suppression d'un avis si demandé
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $stmt = $pdo->prepare('DELETE FROM avis WHERE id = ?');
    $stmt->execute([$id]);
    header('Location: dashboard.php?message=deleted');
    exit();
}

// Récupérer tous les avis
$stmt = $pdo->query('SELECT * FROM avis ORDER BY date DESC');
$avis = $stmt->fetchAll();
?>

<?php include '../includes/header.php'; ?>
<link rel="stylesheet" href="../public/css/style.css">

<main class="dashboard">
    <h1>Tableau de Bord - Gestion des Avis</h1>

    <?php if (isset($_GET['message']) && $_GET['message'] === 'deleted') : ?>
        <div class="alert-success">Avis supprimé avec succès !</div>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Pseudo</th>
                <th>Commentaire</th>
                <th>Note</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($avis as $a) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($a['id']); ?></td>
                    <td><?php echo htmlspecialchars($a['pseudo']); ?></td>
                    <td><?php echo htmlspecialchars($a['commentaire']); ?></td>
                    <td><?php echo htmlspecialchars($a['note']); ?></td>
                    <td><?php echo htmlspecialchars($a['date']); ?></td>
                    <td>
                        <a href="dashboard.php?delete=<?php echo $a['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet avis ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?php include '../includes/footer.php'; ?>
