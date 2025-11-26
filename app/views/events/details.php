<?php include '../partials/header.php'; 
if (!$event) { echo "<h2 style='text-align:center;color:white;'>Événement non trouvé</h2>"; return; }
?>

<div class="container" style="margin-top:50px;">
    <div style="background:rgba(255,255,255,0.1);backdrop-filter:blur(10px);border-radius:20px;padding:40px;max-width:900px;margin:0 auto;">
        <h1 style="color:white;text-align:center;margin-bottom:30px;"><?= htmlspecialchars($event['title']) ?></h1>
        <img src="uploads/default.jpg" style="width:100%;border-radius:15px;margin-bottom:20px;">
        <p style="color:white;font-size:1.3em;line-height:2;">
            <strong>Date :</strong> <?= date('d F Y à H:i', strtotime($event['date'])) ?><br>
            <strong>Lieu :</strong> <?= htmlspecialchars($event['location']) ?><br>
            <strong>Places disponibles :</strong> <?= $event['seats'] ?><br><br>
            <strong>Description :</strong><br>
            <?= nl2br(htmlspecialchars($event['description'] ?? 'Une soirée exceptionnelle vous attend !')) ?>
        </p>

        <h2 style="color:white;text-align:center;margin:40px 0 20px;">Réserver ma place</h2>
        <form action="?page=reserve" method="POST" style="background:rgba(255,255,255,0.15);padding:30px;border-radius:15px;">
            <input type="hidden" name="event_id" value="<?= $event['id'] ?>">
            <input type="text" name="name" placeholder="Votre nom complet" required style="width:100%;padding:15px;margin:10px 0;border:none;border-radius:10px;font-size:1.1em;">
            <input type="email" name="email" placeholder="Votre email" required style="width:100%;padding:15px;margin:10px 0;border:none;border-radius:10px;font-size:1.1em;">
            <input type="tel" name="phone" placeholder="Votre téléphone" required style="width:100%;padding:15px;margin:10px 0;border:none;border-radius:10px;font-size:1.1em;">
            <button type="submit" class="btn" style="width:100%;margin-top:20px;">Confirmer ma réservation</button>
        </form>
    </div>
</div>

<?php include '../partials/footer.php'; ?>