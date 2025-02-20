<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="css/style.css">


<!-- Section pour soumettre un avis -->
<div class="container my-5">
    <h2 class="text-center fw-bold">Laissez votre avis</h2>
    <div class="avis-container text-center">
        <form action="ajouter_avis.php" method="POST" class="p-4 shadow-sm bg-white rounded">
            <div class="mb-3">
                <label for="pseudo" class="form-label fw-bold">Pseudo :</label>
                <input type="text" name="pseudo" id="pseudo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="commentaire" class="form-label fw-bold">Commentaire :</label>
                <textarea name="commentaire" id="commentaire" class="form-control" rows="4" required></textarea>
            </div>

            <!-- Sélection des étoiles -->
            <div class="mb-3">
                <label class="form-label fw-bold">Note :</label>
                <div class="stars">
                    <input type="radio" name="note" value="5" id="star5" checked>
                    <label for="star5">⭐⭐⭐⭐⭐⭐</label>
                    <input type="radio" name="note" value="4" id="star4">
                    <label for="star4">⭐⭐⭐⭐</label>
                    <input type="radio" name="note" value="3" id="star3">
                    <label for="star3">⭐⭐⭐</label>
                    <input type="radio" name="note" value="2" id="star2">
                    <label for="star2">⭐⭐</label>
                    <input type="radio" name="note" value="1" id="star1">
                    <label for="star1">⭐</label>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Envoyer</button>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>