<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
    exit;
}
 

    include '../proc/logger.php';
    loggr($_SESSION['user_id'], $_SESSION['nick'],"Visito PAGINA 01 [PSY]");
    
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
        <h1><span lang=ES style='font-size:18.0pt;font-family:"Segoe UI",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>Perfil
psicológico de una personita muy especial...</span></h1>
<h2><span lang=ES style='font-size:16.0pt;font-family:"Segoe UI",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>1. El origen
del miedo</span></h2>



<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI", ;mso-ansi-language:ES'>Antes de ahondar en
las cosas, es necesario intentar <b>definir</b> de dónde viene el miedo, la
razón del mismo y el porqué (<i>según mis observaciones a través de todos estos
años, de tus pláticas y acciones</i>). Siempre la constante ha sido </span><a
name="_Hlk232151591"><strong><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif;mso-ansi-language:ES'>MIEDO CRÓNICO</span></strong></a><span
style='mso-bookmark:_Hlk232151591'></span><span lang=ES style='font-size:11.0pt;
font-family:"Segoe UI", ;mso-ansi-language:ES'>, pero
¿de dónde viene y por qué te afecta hasta estos días?</span></p>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI", ;mso-ansi-language:ES'>Algo que tenemos
claro es que generaste una </span><span class=ORANGYCar><span style='font-size:
11.0pt'>sensibilidad extrema al rechazo</span></span><span lang=ES
style='font-size:11.0pt;font-family:"Segoe UI", ;
mso-ansi-language:ES'>. </span><span style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
color:black;mso-color-alt:windowtext'>¿</span><span lang=ES style='font-size:
11.0pt;font-family:"Segoe UI", ;mso-ansi-language:ES'>Qué
significa esto y de dónde puede venir? Como podrás
recordar, tú cuentas con un mecanismo de defensa muy interesante, el cual consiste
en <b>bloquear</b> <b>recuerdos</b> y vivencias.</span></p>

<div style=''>
        <nav style="margin-top:40px; padding:20px; text-align:center; border-top:1px solid #eee;"><a href="index.php">🏠</a> | <a href="02_2_mecanismos_de_defensa_anna_freud.php">Siguiente »</a></nav>
    </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="dark-mode.js"></script>
</body>
</html>
