<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="css/style.css">

<main class="animaux">
    <h1 class="title">Découvrez les animaux du Zoo Arcadia</h1>

    <section class="animaux-list">
        <?php
        
        // Vérifie si un habitat est sélectionné
        $habitatSelectionne = isset($_GET['habitat']) ? htmlspecialchars($_GET['habitat']) : null;

        // Liste complète des animaux avec leurs habitats
        $animaux = [
            // Forêt Tropicale
            ["nom" => "Simba", "espece" => "Jaguar", "habitat" => "Forêt Tropicale", "image" => "images/image_zoo_arcadia/animaux/jaguar.jpg", "desc" => "Prédateur solitaire et agile, le jaguar est le roi des forêts tropicales."],
            ["nom" => "Kiko", "espece" => "Ara rouge", "habitat" => "Forêt Tropicale", "image" => "images/image_zoo_arcadia/animaux/ara_rouge.jpg", "desc" => "Oiseau coloré et intelligent, connu pour sa capacité à imiter les sons."],
            ["nom" => "Maya", "espece" => "Capucin moine", "habitat" => "Forêt Tropicale", "image" => "images/image_zoo_arcadia/animaux/capucin.jpg", "desc" => "Curieux et malicieux, il vit en groupe dans la canopée."],

            // Savane
            ["nom" => "Rafiki", "espece" => "Lion", "habitat" => "Savane", "image" => "images/image_zoo_arcadia/animaux/lion2.jpg", "desc" => "Roi de la savane, vivant en groupe appelé meute."],
            ["nom" => "Léo & Léa", "espece" => "Girafe", "habitat" => "Savane", "image" => "images/image_zoo_arcadia/animaux/girafe.jpg", "desc" => "L’animal terrestre le plus grand, se nourrissant des feuilles en hauteur."],
            ["nom" => "Ziggy", "espece" => "Zèbre", "habitat" => "Savane", "image" => "images/image_zoo_arcadia/animaux/zebre.jpg", "desc" => "Reconnaissable à ses rayures uniques, utilisé comme camouflage."],

            // Marais
            ["nom" => "Croco", "espece" => "Crocodile du Nil", "habitat" => "Marais", "image" => "images/image_zoo_arcadia/animaux/crocodile.jpg", "desc" => "Prédateur patient et excellent nageur."],
            ["nom" => "Osiris", "espece" => "Ibis sacré", "habitat" => "Marais", "image" => "images/image_zoo_arcadia/animaux/ibis_sacre.jpg", "desc" => "Oiseau majestueux, symbole de l’Égypte antique."],
            ["nom" => "Slyther", "espece" => "Anaconda", "habitat" => "Marais", "image" => "images/image_zoo_arcadia/animaux/anaconda.jpg", "desc" => "L’un des plus grands serpents du monde, vivant près des rivières."],

            // Montagne
            ["nom" => "Wolfy", "espece" => "Loup gris", "habitat" => "Montagne", "image" => "images/image_zoo_arcadia/animaux/loup.jpg", "desc" => "Carnivore social vivant en meute, s’adaptant aux climats froids."],
            ["nom" => "Rocky", "espece" => "Chèvre des montagnes", "habitat" => "Montagne", "image" => "images/image_zoo_arcadia/animaux/chevre_montagne.jpg", "desc" => "Grimpeuse agile, capable de survivre sur des terrains escarpés."],
            ["nom" => "Bamboo", "espece" => "Panda roux", "habitat" => "Montagne", "image" => "images/image_zoo_arcadia/animaux/panda_roux.jpg", "desc" => "Petit mammifère aux allures de renard, se nourrissant de bambou."],

            // Plaine
            ["nom" => "Buffy", "espece" => "Bison", "habitat" => "Plaine", "image" => "images/image_zoo_arcadia/animaux/bison.jpg", "desc" => "Herbivore massif, autrefois présent en grandes quantités en Amérique du Nord."],
            ["nom" => "Speedy", "espece" => "Antilope", "habitat" => "Plaine", "image" => "images/image_zoo_arcadia/animaux/antilope.jpg", "desc" => "Rapide et agile, capable d’échapper aux prédateurs."],
            ["nom" => "Struthi", "espece" => "Autruche", "habitat" => "Plaine", "image" => "images/image_zoo_arcadia/animaux/autruche.jpg", "desc" => "L’oiseau le plus grand du monde, excellent coureur."],

            // Désert
            ["nom" => "Dune", "espece" => "Fennec", "habitat" => "Désert", "image" => "images/image_zoo_arcadia/fennec.jpg", "desc" => "Petit renard aux grandes oreilles, adapté au climat chaud."],
            ["nom" => "Beetle", "espece" => "Scarabée du désert", "habitat" => "Désert", "image" => "images/image_zoo_arcadia/scarabee.jpg", "desc" => "Capable de survivre avec très peu d’eau."],
            ["nom" => "Nomad", "espece" => "Dromadaire", "habitat" => "Désert", "image" => "images/image_zoo_arcadia/animaux/dromadaire.jpg", "desc" => "Supporte de longues périodes sans eau grâce à ses réserves."],

            // Rivière
            ["nom" => "Splash", "espece" => "Loutre géante", "habitat" => "Rivière", "image" => "images/image_zoo_arcadia/animaux/loutre.jpg", "desc" => "Joueuse et sociable, vivant en famille et se nourrissant de poissons."],
            ["nom" => "Snappy", "espece" => "Tortue alligator", "habitat" => "Rivière", "image" => "images/image_zoo_arcadia/tortue_al.jpg", "desc" => "Prédateur des eaux douces, avec une apparence préhistorique."],
            ["nom" => "Chompy", "espece" => "Piranha", "habitat" => "Rivière", "image" => "images/image_zoo_arcadia/animaux/piranha.jpg", "desc" => "Petit poisson carnivore vivant en banc."],
        ];

        // Afficher uniquement les animaux correspondant à l'habitat sélectionné
        foreach ($animaux as $animal) {
            if ($habitatSelectionne === null || $animal['habitat'] === $habitatSelectionne) {
                echo "
                    <div class='animal-card'>
                        <a href='animal.php?animal=" . urlencode($animal['nom']) . "' class='no-underline'>
                            <img src='{$animal['image']}' alt='{$animal['nom']}'>
                            <h3>{$animal['nom']}</h3>
                        </a>
                        <p><strong>Espèce :</strong> {$animal['espece']}</p>
                        <p><strong>Habitat :</strong> {$animal['habitat']}</p>
                        <p>{$animal['desc']}</p>
                    </div>
                ";
            }
        }
        ?>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
