<link rel="stylesheet" href="css/style.css">
<?php
include 'includes/header.php';
include 'includes/database.php';
session_start();

// Vérifier si l'utilisateur est déjà connecté
if (isset($_SESSION['user_role'])) {
    header("Location: dashboard.php");
    exit();
}

$error = "";

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // Vérifier dans la base de données (à remplacer par une vraie requête SQL)
    $users = [
        "admin@zooarcadia.com" => ["password" => "admin123", "role" => "admin"],
        "employe@zooarcadia.com" => ["password" => "employe123", "role" => "employe"],
    ];

    if (isset($users[$email]) && $users[$email]["password"] === $password) {
        $_SESSION["user_role"] = $users[$email]["role"];
        $_SESSION["user_email"] = $email;

        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Identifiants incorrects.";
    }
}
?>

<main class="login-page">
    <h1>Connexion</h1>

    <form action="login.php" method="POST">
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
        
        <label for="email">Email :</label>
        <input type="email" name="email" required>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required>

        <button type="submit">Se connecter</button>
    </form>
</main>

<?php include 'includes/footer.php'; ?>
