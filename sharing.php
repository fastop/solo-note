<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}
 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micro Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.svg" type="image/svg+xml">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</head>
<body>

<div id="userMenu" >

  <span class="cursor-pointer" id="profileOpc">👤</span> 
  <span class="cursor-pointer" id="configOpc"> ⚙️</span> 
  <span class="cursor-pointer" id="logoutOpc"> ▶️ </span>

</div>

    <div class="container">
        <div class="header">
            <h1>📝 Mi Micro Blog</h1>
            <p>Comparte tus pensamientos en tiempo real</p>
        </div>

        <div class="form-container">✋ Esta viendo las publicaciones de: <strong>MeMaster </strong> 
            <div style="float: right;"> <span class="cursor-pointer" id="btnOrderUP">🔼</span> <span class="cursor-pointer" id="btnOrderDOWN">🔽</span> </div>
        </div>

        <div id="postsContainer" class="posts-container">
            <div class="empty-state">
                <div class="empty-state-icon">✨</div>
                <p>Aún no hay posts. ¡Sé el primero en publicar!</p>
            </div>
        </div>
    </div>

    <script src="js/shared.js"></script>




    <!-- Modal Bootstrap PROFILE -->
        <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="profileModalTitle">👤 Perfil </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body" id="profileModalBody">
                        PERFIL


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>


    <!-- Modal Bootstrap CONFIG -->
    <div class="modal fade" id="configModal" tabindex="-1" aria-labelledby="configModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="configModalTitle">⚙️ Configuración </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body" id="configModalBody">
                    CONFIGURACIÓN


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Bootstrap CONFIG -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalTitle">🚪 Cerrar sesión </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body" id="logoutModalBody">
                    ¿Estás seguro de que quieres cerrar sesión?


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnLogout">Sipi!</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nope</button>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal Bootstrap MODIFICAR -->
    <div class="modal fade" id="ModModal" tabindex="-1" aria-labelledby="ModModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModModalTitle">✏️ Modificar </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body" id="ModModal">

                
                <div class="form-container">
                    <form id="postModForm">

                        <div class="form-group">
                            <input type="text" id="txtTitleMOD" name="txtTitleMOD" placeholder="Titulo" maxlength="150">
                        </div> 

                        <div class="form-group">
                            <label for="content">¿Qué estás pensando?</label>
                            <textarea id="contentMOD" name="contentMOD" placeholder="Escribe tu mensaje aquí..." required="" maxlength="5000"></textarea>
                        </div>

                        <details  class="form-group">
                        <summary>Fechas Y Hora</summary>
                        <p>
                            <input type="text" id="txtDateMOD" name="txtDateMOD">
                            <input type="text" id="txtTmeMOD" name="txtTmeMOD">    
                        </p>
                        </details>


                        <input type="hidden" id="idMOD" name="idMOD" value=""> <!-- Campo oculto para almacenar el ID del post a modificar -->
                        <button type="button" class="btn-submit" id="btn-modPost">Actualizar Ahora</button>
                    </form>
                </div>


                </div>
<!--                 <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnSaveModify">Modificar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div> -->
            </div>
        </div>
    </div>





</body>
</html>