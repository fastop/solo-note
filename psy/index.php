<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
    exit;
}
 


    include '../proc/logger.php';
    loggr($_SESSION['user_id'], $_SESSION['nick'],"Visito INDEX [PSY]");
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Psicológico Final</title>

    <link rel="stylesheet" href="styles.css">    
    <link rel="stylesheet" href="" id="dark-mode">
</head>
<body>
    <div class="container"> <div id="darkToggle">☀️</div>
        <h1><a href="../"> 🏠 </a> </h1><ul><li><a href="01_1_el_origen_del_miedo.php">1. El origen
del miedo</a></li><li><a href="02_2_mecanismos_de_defensa_anna_freud.php">2. Mecanismos
de Defensa (Anna Freud)</a></li><li><a href="03_3_miedo_cronico_y_tdah.php">3. Miedo
Crónico y TDAH</a></li><li><a href="04_4_historia_personal_e_interpretacion.php">4. Historia
Personal e Interpretación</a></li><li><a href="05_5_infancia_tardia_orfandad_digital.php">5. Infancia
Tardía: Orfandad Digital</a></li><li><a href="06_6_infancia_tardia_trauma_por_grooming_y_gaslighting.php">6. Infancia
Tardía: Trauma por Grooming y Gaslighting</a></li><li><a href="07_la_soledad_el_miedo_y_la_mentira.php">La soledad, el
miedo y la mentira</a></li><li><a href="08_el_miedo.php">El miedo</a></li><li><a href="09_la_mentira.php">La mentira</a></li><li><a href="10_el_miedo_la_mentira_en_la_actualidad.php">El miedo/la mentira en la actualidad</a></li><li><a href="11_preguntas.php">¿Preguntas?</a></li></ul>
        <nav style="margin-top:40px; padding:20px; text-align:center; border-top:1px solid #eee;"><a href="index.php">🏠</a></nav>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="dark-mode.js"></script>

</body>
</html>
