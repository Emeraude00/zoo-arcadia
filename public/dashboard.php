<link rel="stylesheet" href="css/style.css">
<?php
include 'includes/header.php';
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_role'])) {
    header("Location: login.php");
    exit();
}

// Déterminer le rôle de l'utilisateur
$user_role = $_SESSION['user_role'];
?>

<main class="dashboard">
    <h1>Bienvenue dans votre espace de gestion</h1>

    <div class="dashboard-container">
        <?php if ($user_role === "admin") : ?>
            <h2>👑 Espace Administrateur</h2>
            <ul>
                <li><a href="gestion_utilisateurs.php">Gestion des utilisateurs</a></li>
                <li><a href="gestion_animaux.php">Gestion des animaux</a></li>
                <li><a href="gestion_habitats.php">Gestion des habitats</a></li>
                <li><a href="stats.php">Voir les statistiques</a></li>
            </ul>
        <?php elseif ($user_role === "employe") : ?>
            <h2>🔧 Espace Employé</h2>
            <ul>
                <li><a href="validation_avis.php">Validation des avis visiteurs</a></li>
                <li><a href="gestion_nourriture.php">Suivi de la nourriture des animaux</a></li>
            </ul>
        <?php endif; ?>

        <a href="logout.php" class="btn btn-danger">Se déconnecter</a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
