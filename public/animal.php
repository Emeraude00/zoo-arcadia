<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="css/style.css">

<?php
$animaux = [
    // Forêt Tropicale
    "Simba" => ["espece" => "Jaguar", "habitat" => "Forêt Tropicale", "image" => "images/image_zoo_arcadia/animaux/jaguar.jpg", "etat" => "Bonne santé", "nourriture" => "Viande - 3kg/jour", "avis" => "Animal en pleine forme."],
    "Kiko" => ["espece" => "Ara rouge", "habitat" => "Forêt Tropicale", "image" => "images/image_zoo_arcadia/animaux/ara_rouge.jpg", "etat" => "Bonne santé", "nourriture" => "Graines - 200g/jour", "avis" => "Très sociable avec les visiteurs."],
    "Maya" => ["espece" => "Capucin moine", "habitat" => "Forêt Tropicale", "image" => "images/image_zoo_arcadia/animaux/capucin.jpg", "etat" => "Bonne santé", "nourriture" => "Fruits - 1kg/jour", "avis" => "Joueuse et active."],

    // Savane
    "Rafiki" => ["espece" => "Lion", "habitat" => "Savane", "image" => "images/image_zoo_arcadia/animaux/lion2.jpg", "etat" => "Bonne santé", "nourriture" => "Viande - 6kg/jour", "avis" => "Animal dominant du groupe."],
    "Léo & Léa" => ["espece" => "Girafes", "habitat" => "Savane", "image" => "images/image_zoo_arcadia/animaux/girafe.jpg", "etat" => "Bonne santé", "nourriture" => "Feuilles - 10kg/jour", "avis" => "Toujours ensemble."],
    "Ziggy" => ["espece" => "Zèbre", "habitat" => "Savane", "image" => "images/image_zoo_arcadia/animaux/zebre.jpg", "etat" => "Bonne santé", "nourriture" => "Herbe - 5kg/jour", "avis" => "Utilise ses rayures comme camouflage."],

    // Marais
    "Croco" => ["espece" => "Crocodile du Nil", "habitat" => "Marais", "image" => "images/image_zoo_arcadia/animaux/crocodile.jpg", "etat" => "Bonne santé", "nourriture" => "Poissons - 2kg/jour", "avis" => "Très discret dans l'eau."],
    "Osiris" => ["espece" => "Ibis sacré", "habitat" => "Marais", "image" => "images/image_zoo_arcadia/animaux/ibis_sacre.jpg", "etat" => "Bonne santé", "nourriture" => "Insectes - 500g/jour", "avis" => "Oiseau emblématique, symbole de l’Égypte antique."],
    "Slyther" => ["espece" => "Anaconda", "habitat" => "Marais", "image" => "images/image_zoo_arcadia/animaux/anaconda.jpg", "etat" => "Bonne santé", "nourriture" => "Rongeurs - 2kg/jour", "avis" => "L'un des plus grands serpents du monde."],

    // Montagne
    "Wolfy" => ["espece" => "Loup gris", "habitat" => "Montagne", "image" => "images/image_zoo_arcadia/animaux/loup.jpg", "etat" => "Bonne santé", "nourriture" => "Viande - 3kg/jour", "avis" => "Animal sociable vivant en meute."],
    "Rocky" => ["espece" => "Chèvre des montagnes", "habitat" => "Montagne", "image" => "images/image_zoo_arcadia/animaux/chevre_montagne.jpg", "etat" => "Bonne santé", "nourriture" => "Herbe - 5kg/jour", "avis" => "Excellent grimpeur, s'adapte aux terrains escarpés."],

    // Plaine
    "Buffy" => ["espece" => "Bison", "habitat" => "Plaine", "image" => "images/image_zoo_arcadia/animaux/bison.jpg", "etat" => "Bonne santé", "nourriture" => "Herbe - 30kg/jour", "avis" => "Autrefois en grand nombre, aujourd'hui protégé."],
    "Speedy" => ["espece" => "Antilope", "habitat" => "Plaine", "image" => "images/image_zoo_arcadia/animaux/antilope.jpg", "etat" => "Bonne santé", "nourriture" => "Herbe - 7kg/jour", "avis" => "Capable d'échapper aux prédateurs grâce à sa rapidité."],
   "Struthi" => ["espece" => "Autruche", "habitat" => "Plaine", "image" => "images/image_zoo_arcadia/animaux/autruche.jpg", "desc" => "L'oiseau le plus rapide du monde, capable d'atteindre 70 km/h en sprint."],

    // Désert
    "Dune" => ["espece" => "Fennec", "habitat" => "Désert", "image" => "images/image_zoo_arcadia/fennec.jpg", "etat" => "Bonne santé", "nourriture" => "Insectes - 500g/jour", "avis" => "Très rapide et curieux, parfaitement adapté au climat aride."],
    "Beetle" =>["espece" => "Scarabée", "habitat" => "Désert", "image" => "images/image_zoo_arcadia/scarabee.jpg", "desc" => "Petit insecte résistant capable de survivre aux conditions extrêmes du désert.", "etat" => "Bonne santé", "nourriture" => "Débris organiques - 50g/jour"],
    "Nomad" =>[ "espece" => "Dromadaire", "habitat" => "Désert", "image" => "images/image_zoo_arcadia/dromadaire.jpg", "desc" => "Peut parcourir de longues distances sans boire, grâce à ses réserves de graisse.", "etat" => "Bonne santé", "nourriture" => "Herbes sèches - 10kg/jour"],
    
    // Rivière
    "Splash" => ["espece" => "Loutre géante", "habitat" => "Rivière", "image" => "images/image_zoo_arcadia/animaux/loutre.jpg", "etat" => "Bonne santé", "nourriture" => "Poissons - 1kg/jour", "avis" => "Adore jouer et nager en groupe."],
    "Snappy" => ["espece" => "Tortue Alligator", "habitat" => "Rivière", "image" => "images/image_zoo_arcadia/tortue_al.jpg", "desc" => "Une tortue préhistorique dotée d'une mâchoire puissante."],
    "Chompy" => ["espece" => "Piranha", "habitat" => "Rivière", "image" => "images/image_zoo_arcadia/animaux/piranha.jpg", "desc" => "Un petit poisson carnivore réputé pour sa rapidité et ses dents acérées."],

];

if (isset($_GET['animal']) && isset($animaux[$_GET['animal']])) {
    $animal = $animaux[$_GET['animal']];
} else {
    echo "<p>Animal non trouvé.</p>";
    include 'includes/footer.php';
    exit;
}
?>

<main class="animal-detail">
    <h1 class="title">Détails de <?php echo htmlspecialchars($_GET['animal']); ?></h1>

    <div class="animal-container">
        <img src="<?php echo $animal['image']; ?>" alt="<?php echo htmlspecialchars($_GET['animal']); ?>">
        <div class="animal-info">
            <p><strong>Espèce :</strong> <?php echo $animal['espece']; ?></p>
            <p><strong>Habitat :</strong> <?php echo $animal['habitat']; ?></p>
            <p><strong>État de santé :</strong> <?php echo $animal['etat']; ?></p>
            <p><strong>Nourriture :</strong> <?php echo $animal['nourriture']; ?></p>
            <p><strong>Avis du vétérinaire :</strong> <?php echo $animal['avis']; ?></p>
        </div>
    </div>

    <a href="animaux.php?habitat=<?php echo urlencode($animal['habitat']); ?>" class="btn">Retour aux animaux</a>
</main>

<?php include 'includes/footer.php'; ?>
