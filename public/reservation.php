<?php
session_start();
include 'config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = htmlspecialchars($_POST['date']);
    $type = htmlspecialchars($_POST['type']);

    $stmt = $pdo->prepare("INSERT INTO reservations (date, type) VALUES (?, ?)");
    $stmt->execute([$date, $type]);

    header('Location: index.php?reservation=success');
}
?>
