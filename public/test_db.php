<?php
include('../config/database.php');

$result = $pdo->query("SELECT * FROM avis");

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "Pseudo: " . $row['pseudo'] . " - Commentaire: " . $row['commentaire'] . " - Note: " . $row['note'] . "<br>";
}
?>


