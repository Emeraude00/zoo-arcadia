<?php
$host = '127.0.0.1'; // Adresse de MySQL (XAMPP)
$db = 'zoo_arcadia'; // Nom de la base de données
$user = 'root'; // Nom d'utilisateur MySQL
$pass = 'emeraude'; // Ton mot de passe MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connexion réussie à la base de données !";
} catch (PDOException $e) {
    echo "❌ Erreur de connexion : " . $e->getMessage();
}
?>

