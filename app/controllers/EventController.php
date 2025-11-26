public function reserve($data) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Simulation sauvegarde réservation
        $_SESSION['success'] = "Réservation confirmée ! Merci {$data['name']} ! Un email a été envoyé à {$data['email']}";
    }
    header('Location: ?page=home');
    exit;
}
public function login($data) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($data['username'] === 'admin' && $data['password'] === 'admin123') {
            $_SESSION['admin'] = true;
            header('Location: ?page=dashboard');
            exit;
        } else {
            $_SESSION['error'] = "Identifiants incorrects !";
            header('Location: ?page=admin');
            exit;
        }
    }
}

public function logout() {
    unset($_SESSION['admin']);
    header('Location: /');
    exit;
}

public function dashboard() {
    if (!isset($_SESSION['admin'])) {
        header('Location: ?page=admin');
        exit;
    }
    global $events;
    require '../app/views/admin/dashboard.php';
}