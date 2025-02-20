<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

   
    if (!empty($nom) && !empty($email) && !empty($message)) {
        $to = "contact@zooarcadia.com"; 
        $subject = "Nouveau message de $nom";
        $headers = "From: $email\r\nReply-To: $email";
        $body = "Nom: $nom\nEmail: $email\n\nMessage:\n$message";

        
        file_put_contents("messages_contact.txt", "$body\n\n", FILE_APPEND);
        
        echo "<script>alert('Votre message a bien été envoyé !'); window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Tous les champs sont obligatoires.'); window.location.href='contact.php';</script>";
    }
} else {
    header("Location: contact.php");
    exit();
}
?>
