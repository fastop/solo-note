<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location: posting.php');
    exit;
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🔐 Acceso al chisme</h1>
            <p>Ingresa con tu usuario y contraseña para entrar</p>
        </div>

        <div class="form-container">
            
            <div class="login-error"> </div>
            

            <form id="frm-login" name="frm-login"   autocomplete="off">
                <div class="form-group">
                    <label for="username">Usuario</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Ingresa tu usuario"
                        required
                        maxlength="50">
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Ingresa tu contraseña"
                        required
                        maxlength="50">
                </div>

                <button type="submit" class="btn-submit">Entrar</button>
            </form>
            
        </div>
    </div>

    


    <script src="js/index.js"></script>

    <!-- Modal Bootstrap añadido -->
    <div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="miModalTitle"> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body" id="miModalBody">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
