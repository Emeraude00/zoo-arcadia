<?php
$host = "127.0.0.1";  // Adresse du serveur MySQL (localhost)
$user = "root";       // Nom d'utilisateur MySQL
$password = "emeraude"; // Ton mot de passe MySQL
$database = "zoo_arcadia"; // Nom de ta base de données

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connexion réussie à la base de données !";
} catch (PDOException $e) {
    echo "❌ Erreur de connexion : " . $e->getMessage();
}
?>

