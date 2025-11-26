<?php include '../partials/header.php'; ?>

<div style="max-width:420px;margin:100px auto;background:rgba(255,255,255,0.15);backdrop-filter:blur(15px);padding:50px;border-radius:25px;box-shadow:0 20px 40px rgba(0,0,0,0.3);">
    <h2 style="text-align:center;color:white;margin-bottom:30px;">Connexion Administrateur</h2>
    
    <?php if (isset($_SESSION['error'])): ?>
        <div style="background:#e74c3c;color:white;padding:15px;border-radius:10px;margin-bottom:20px;text-align:center;">
            <?= $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>

    <form action="?page=login" method="POST">
        <input type="text" name="username" placeholder="Nom d'utilisateur" required 
               style="width:100%;padding:18px;margin:15px 0;border:none;border-radius:12px;font-size:1.1em;">
        <input type="password" name="password" placeholder="Mot de passe" required 
               style="width:100%;padding:18px;margin:15px 0;border:none;border-radius:12px;font-size:1.1em;">
        <button type="submit" class="btn" style="width:100%;padding:18px;font-size:1.2em;">
            Se connecter
        </button>
    </form>
    
    <p style="text-align:center;color:rgba(255,255,255,0.7);margin-top:20px;">
        Identifiants par défaut : <br>
        <strong>admin</strong> / <strong>admin123</strong>
    </p>
</div>

<?php include '../partials/footer.php'; ?>