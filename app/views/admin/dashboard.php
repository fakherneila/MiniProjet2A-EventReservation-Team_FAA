<?php include '../partials/header.php'; 
if (!isset($_SESSION['admin'])) { header('Location: ?page=admin'); exit; }
global $events;
?>

<h2 style="color:white;text-align:center;margin:50px 0;">Dashboard Administrateur</h2>

<div style="background:rgba(255,255,255,0.1);padding:40px;border-radius:20px;">
    <h3 style="color:white;">Événements créés (<?= count($events) ?>)</h3>
    <div class="events-grid" style="margin-top:30px;">
        <?php foreach ($events as $e): ?>
            <div class="event-card">
                <h3><?= htmlspecialchars($e['title']) ?></h3>
                <p>Date : <?= date('d/m/Y H:i', strtotime($e['date'])) ?></p>
                <p>Places : <?= $e['seats'] ?></p>
                <a href="?page=details&id=<?= $e['id'] ?>" class="btn">Voir</a>
            </div>
        <?php endforeach; ?>
    </div>
    
    <div style="text-align:center;margin-top:50px;">
        <a href="?page=logout" class="btn" style="background:#e74c3c;">Déconnexion</a>
    </div>
</div>

<?php include '../partials/footer.php'; ?>