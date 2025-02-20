<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="css/style.css">

<main class="contact-page">
    <h1 class="title">Contactez-nous</h1>

    <div class="contact-container">
        <div class="contact-info">
            <h2>📍 Nos coordonnées</h2>
            <p><strong>Adresse :</strong> 123 Parc Naturel, Bretagne, France</p>
            <p><strong>📞 Téléphone :</strong> +33 1 23 45 67 89</p>
            <p><strong>✉️ Email :</strong> contact@zooarcadia.com</p>
        </div>

        <form action="traitement_contact.php" method="POST">
            <h2>📩 Envoyez-nous un message</h2>

            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>

            <label for="email">Email :</label>
            <input type="email" name="email" id="email" required>

            <label for="message">Message :</label>
            <textarea name="message" id="message" rows="5" required></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
