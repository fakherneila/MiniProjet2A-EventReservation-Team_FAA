
<?php if (isset($_SESSION['success'])): ?>
<div style="background:#27ae60;color:white;padding:20px;text-align:center;font-size:1.3em;border-radius:10px;margin:20px auto;max-width:800px;">
    <?= $_SESSION['success'] ?> 
</div>
<?php unset($_SESSION['success']); endif; ?>

<?php include __DIR__ . '/../partials/header.php'; ?>
<h2>Événements à venir</h2>

<div class="events-grid">
    <?php foreach ($events as $event): ?>
        <div class="event-card">
            <img src="uploads/default.jpg" alt="<?= htmlspecialchars($event['title']) ?>">
            <h3><?= htmlspecialchars($event['title']) ?></h3>
            <p><strong>Date :</strong> <?= date('d/m/Y à H:i', strtotime($event['date'])) ?></p>
            <p><strong>Lieu :</strong> <?= htmlspecialchars($event['location']) ?></p>
            <p><strong>Places restantes :</strong> <?= $event['seats'] ?></p>
            <a href="?page=details&id=<?= $event['id'] ?>" class="btn">Voir détails</a>
        </div>
    <?php endforeach; ?>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>
