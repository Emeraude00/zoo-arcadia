<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Simuler l'envoi d'un mail (dans un fichier local)
    file_put_contents("messages.txt", "Email: $email\nMessage: $message\n\n", FILE_APPEND);

    header('Location: contact.php?status=success');
}
?>
