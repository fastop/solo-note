<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location: posting.html');
    exit;
}

$users = [
    'admin' => 'demo123'
];

$error = '';
$username = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header('Location: posting.html');
        exit;
    }

    $error = 'Usuario o contraseña incorrectos.';
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso al sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🔐 Acceso al chisme</h1>
            <p>Ingresa con tu usuario y contraseña para entrar</p>
        </div>

        <div class="form-container">
            <?php if ($error): ?>
                <div class="login-error"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
            <?php endif; ?>

            <form method="post" action="index.php" autocomplete="off">
                <div class="form-group">
                    <label for="username">Usuario</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Ingresa tu usuario"
                        required
                        maxlength="50"
                        value="<?= htmlspecialchars($username, ENT_QUOTES, 'UTF-8') ?>"
                    >
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Ingresa tu contraseña"
                        required
                        maxlength="50"
                    >
                </div>

                <button type="submit" class="btn-submit">Entrar</button>
            </form>

            <p class="login-note">Usuario de prueba: <strong>admin</strong> / Contraseña: <strong>demo123</strong></p>
        </div>
    </div>


    <script src="js/index.js"></script>

</body>
</html>
