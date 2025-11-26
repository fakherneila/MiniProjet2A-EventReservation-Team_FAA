<?php include __DIR__ . '/../partials/header.php'; ?>

<h2>Événements à venir</h2>

<div class="events-grid">
    <!-- Exemples statiques pour Semaine 1 (on passera en dynamique Semaine 2) -->
    <div class="event-card">
        <img src="https://via.placeholder.com/300x200" alt="Concert">
        <h3>Concert de Jazz</h3>
        <p><strong>Date :</strong> 12 Décembre 2025 - 20h00</p>
        <p><strong>Lieu :</strong> Théâtre Municipal de Sousse</p>
        <p><strong>Places disponibles :</strong> 150</p>
        <a href="index.php?page=details&id=1" class="btn">Voir détails</a>
    </div>

    <div class="event-card">
        <img src="https://via.placeholder.com/300x200" alt="Conférence">
        <h3>Conférence IA & Avenir</h3>
        <p><strong>Date :</strong> 20 Décembre 2025 - 14h00</p>
        <p><strong>Lieu :</strong> ISSAT Sousse</p>
        <p><strong>Places disponibles :</strong> 80</p>
        <a href="index.php?page=details&id=2" class="btn">Voir détails</a>
    </div>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>