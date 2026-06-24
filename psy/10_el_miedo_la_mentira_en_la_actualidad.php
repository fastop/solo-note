<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
    exit;
}
 
    include '../proc/logger.php';
    loggr($_SESSION['user_id'], $_SESSION['nick'],"Visito PAGINA 10 [PSY]");
    
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
    <div class="container">  <div id="darkToggle">☀️</div>
        <h2><span lang=ES style='font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
"Times New Roman";mso-ansi-language:ES'>El miedo/la mentira en la actualidad</span></h2>



<p style='background:white'><span lang=ES style='font-family:"Segoe UI",sans-serif;
 mso-ansi-language:ES'>La evolución que has tenido en este tiempo
ha sido bastante interesante, pero no negaremos que aun, a estas alturas sigues
con el mismo miedo que desde tu infancia tardía, algunos han sido enmascarados
muy bien pero no considero que hayan sanado en un 100%.</span></p>

<p style='background:white'><span lang=ES style='font-family:"Segoe UI",sans-serif;
 mso-ansi-language:ES'></span></p>

<p align=center style='text-align:center;background:white'><b><span lang=ES
style='font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'>COMING
SOOON!</span></b></p>

<p style='background:white'><span lang=ES style='font-family:"Segoe UI",sans-serif;
 mso-ansi-language:ES'></span></p>

<p style='background:white'><span lang=ES style='font-family:"Segoe UI",sans-serif;
 mso-ansi-language:ES'></span></p>

<p style='background:white'><span lang=ES style='font-family:"Segoe UI",sans-serif;
 mso-ansi-language:ES'></span></p>

<p style='background:white'><span lang=ES style='font-family:"Segoe UI",sans-serif;
 mso-ansi-language:ES'></span></p>

<div  >
        <nav style="margin-top:40px; padding:20px; text-align:center; border-top:1px solid #eee;"><a href="09_la_mentira.php">« Anterior</a> | <a href="index.php">🏠</a> | <a href="11_preguntas.php">Siguiente »</a></nav>
    </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="dark-mode.js"></script>
</body>
</html>
