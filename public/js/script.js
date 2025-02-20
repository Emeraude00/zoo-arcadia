// Effet hover sur les cartes des animaux
document.querySelectorAll('.animal-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.style.transform = 'scale(1.05)';
        card.style.transition = 'transform 0.3s ease';
    });

    card.addEventListener('mouseleave', () => {
        card.style.transform = 'scale(1)';
    });
});

// Message de confirmation après soumission de l'avis
const urlParams = new URLSearchParams(window.location.search);
if (urlParams.get('message') === 'success') {
    alert("Votre avis a été ajouté avec succès !");
}

// Validation de la réservation
const reservationButton = document.querySelector('.btn-success');

if (reservationButton) {
    reservationButton.addEventListener('click', (e) => {
        e.preventDefault();

        const date = document.querySelector('#date').value;
        const ticketType = document.querySelector('#ticket-type').value;

        if (!date || ticketType === '') {
            alert('Veuillez remplir tous les champs avant de réserver.');
        } else {
            alert(`Réservation confirmée pour le ${date} - Billet : ${ticketType}`);
        }
    });
}

// Confirmation avant suppression d'un avis
document.querySelectorAll('.delete-avis').forEach(button => {
    button.addEventListener('click', (e) => {
        if (!confirm("Êtes-vous sûr de vouloir supprimer cet avis ?")) {
            e.preventDefault();
        }
    });
});

// Scroll fluide pour les liens internes
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Changement dynamique des images d'habitats
document.querySelectorAll('.habitat-card').forEach(card => {
    card.addEventListener('click', () => {
        const habitatImage = card.dataset.image; // Assurez-vous d'ajouter data-image="chemin/vers/image.jpg" dans vos balises HTML
        document.querySelector('#habitat-display').src = habitatImage;
    });
});
