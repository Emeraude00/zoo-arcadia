<?php
$host = 'localhost';
$dbname = 'zoo_arcadia';
$user = 'root';
$password = 'emeraude'; // Mets ici ton mot de passe si tu en as un

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
