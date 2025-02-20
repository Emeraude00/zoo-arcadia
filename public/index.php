<?php include 'includes/header.php'; ?>
<?php include ('../config/database.php'); ?>
<link rel="stylesheet" href="css/style.css">


<main>
    <!-- Section du héros -->
    <section id="hero">
    </section>

    <!-- Section Réservation -->
    <section class="reservation-section">
        <div class="container small-reservation">
            <div class="card p-3 shadow-sm">
                <h3 class="text-center fw-bold">Réservez votre billet en ligne</h3>
                <form action="reservation.php" method="POST">
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="date" class="form-label"><i class="fas fa-calendar-alt"></i> Sélection de date :</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                    <div class="col-md-6">
                        <label for="ticket-type" class="form-label"><i class="fas fa-ticket-alt"></i> Type de billet :</label>
                        <select class="form-select" id="ticket-type">
                            <option>Adulte</option>
                            <option>Enfant</option>
                            <option>Famille</option>
                        </select>
                    </div>
                </div>
                <div class="text-center mt-2">
                    <button class="btn btn-success btn-sm">Acheter maintenant</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Bienvenue à Zoo Arcadia -->
    <section id="welcome-text">
        <h2><span>Bienvenue à Zoo Arcadia, un havre de biodiversité !</span></h2>
    </section>

    <!-- Présentation -->
    <section id="presentation">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="images/image_zoo_arcadia/oiseau.webp" alt="Oiseau exotique" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <p class="presentation-text">
                        Situé au cœur de la Bretagne, Zoo Arcadia est un sanctuaire naturel dédié à la protection 
                        et à la préservation de la faune sauvage. Depuis 1960, nous offrons aux animaux des habitats 
                        respectueux de leur environnement naturel, tout en sensibilisant nos visiteurs à l'importance de la biodiversité.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pourquoi visiter Zoo Arcadia ? -->
    <section id="why-visit">
        <h2>Pourquoi visiter Zoo Arcadia ?</h2>
        <div class="features">
            <div class="feature">
                <img src="images/image_zoo_arcadia/lion.png" alt="Lion">
                <p>Un sanctuaire naturel</p>
            </div>
            <div class="feature">
                <img src="images/image_zoo_arcadia/terre.png" alt="Terre">
                <p>100+ espèces protégées</p>
            </div>
            <div class="feature">
                <img src="images/image_zoo_arcadia/Ticket.png" alt="Expérience immersive">
                <p>Expérience immersive</p>
            </div>
        </div>
    </section>

    <!-- Nos espèces phares -->
    <section class="container my-5">
        <h2 class="text-center text-success fw-bold mb-4">Nos espèces phares</h2>
        <div class="row g-4">
            <!-- Tigres -->
            <div class="col-md-6 col-lg-3">
                <div class="card text-center border-0">
                    <img src="images/image_zoo_arcadia/tigres.jpeg" class="card-img-top img-fluid rounded" alt="Tigres">
                    <div class="card-body">
                        <h5 class="fw-bold">Tigres</h5>
                    </div>
                </div>
            </div>
            <!-- Singes -->
            <div class="col-md-6 col-lg-3">
                <div class="card text-center border-0">
                    <img src="images/image_zoo_arcadia/singes.jpg" class="card-img-top img-fluid rounded" alt="Singes">
                    <div class="card-body">
                        <h5 class="fw-bold">Singes</h5>
                    </div>
                </div>
            </div>
            <!-- Girafes -->
            <div class="col-md-6 col-lg-3">
                <div class="card text-center border-0">
                    <img src="images/image_zoo_arcadia/girafes.jpg" class="card-img-top img-fluid rounded" alt="Girafes">
                    <div class="card-body">
                        <h5 class="fw-bold">Girafes</h5>
                    </div>
                </div>
            </div>
            <!-- Crocodiles -->
            <div class="col-md-6 col-lg-3">
                <div class="card text-center border-0">
                    <img src="images/image_zoo_arcadia/croco.jpeg" class="card-img-top img-fluid rounded" alt="Crocodiles">
                    <div class="card-body">
                        <h5 class="fw-bold">Crocodiles</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!-- Affichage du message de succès -->
  <?php
    if (isset($_GET['message']) && $_GET['message'] == 'success') {
        echo "<div class='alert-success'>Votre avis a été ajouté avec succès !</div>";
    }
    ?>
</main>
<?php

// Récupérer les avis
$avisQuery = $pdo->query("SELECT * FROM avis ORDER BY date DESC LIMIT 5");
$avis = $avisQuery->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="container my-5">
    <h2 class="text-center fw-bold">Avis des visiteurs</h2>
    <div class="row justify-content-center">
        <?php foreach ($avis as $commentaire) : ?>
            <div class="col-md-5 mb-4">
                <div class="avis-card">
                    <div class="stars">
                        <?php echo str_repeat('⭐', $commentaire['note']); ?>
                    </div>
                    <h5 class="fw-bold"><?php echo htmlspecialchars($commentaire['pseudo']); ?></h5>
                    <p>"<?php echo htmlspecialchars($commentaire['commentaire']); ?>"</p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Bouton pour laisser un avis -->
<section class="avis-section">
    
    <div class="avis-container">
        <a href="avis.php" class="btn-avis">Laissez vos avis</a>
    </div>
</section>
    
<?php include 'includes/footer.php'; ?>