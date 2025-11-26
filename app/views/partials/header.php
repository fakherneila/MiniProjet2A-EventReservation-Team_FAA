<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniEvent - Réservation d'événements</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1><span style="color:#ff6b6b;">Mini</span>Event</h1>
            <nav>
                <a href="/">Accueil</a>
                <a href="?page=details&id=1">Événements</a>
                
                <?php if (isset($_SESSION['admin'])): ?>
                    <a href="?page=dashboard" style="background:rgba(46,204,113,0.3);">Dashboard</a>
                    <a href="?page=logout" style="background:rgba(231,76,60,0.3);">Déconnexion</a>
                <?php else: ?>
                    <a href="?page=admin" class="login-btn">Login Admin</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>
    <main class="container">