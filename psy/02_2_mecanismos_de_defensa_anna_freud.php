<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
    exit;
}


    include '../proc/logger.php';
    loggr($_SESSION['user_id'], $_SESSION['nick'],"Visito PAGINA 02 [PSY]");
    
 
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
        <h2><span lang=ES style='font-size:16.0pt;font-family:"Segoe UI",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>2. Mecanismos
de Defensa (Anna Freud)</span></h2>



<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; ;mso-ansi-language:ES'>La hija de Freud,
Anna Freud, profundizó en el estudio del <i>'Yo y sus mecanismos de defensa</i>',
entendidos como <b>estrategias</b> <b>inconscientes</b> que la <b>mente</b> <b>utiliza</b>
para <b>bloquear</b> <b>recuerdos</b>, pensamientos y deseos perturbadores. El <b>propósito</b>
es <b>proteger</b> al <b>individuo</b> de la ansiedad y el dolor emocional. <sup>[1]</sup></span></p>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; ;mso-ansi-language:ES'>Para bloquear y
manejar recuerdos dolorosos o inaceptables, Anna Freud destacó los siguientes
mecanismos principales:</span></p>

<ul type=disc>
 <li  style=' mso-margin-top-alt:auto;margin-bottom:
     7.5pt;mso-list:l6 level1 lfo1;tab-stops:list 36.0pt;background:white'><strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>Represión:</span></strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'> Es el
     mecanismo fundamental, donde <b>el</b> <b>inconsciente</b> <b>elimina</b>
     de la <b>conciencia</b> pensamientos, impulsos y <b>recuerdos</b> que <b>generan</b>
     <b>malestar</b> o <b>culpa</b>. <sup>[1]</sup></span></li>
 <li  style=' mso-margin-top-alt:auto;margin-bottom:
     7.5pt;mso-list:l6 level1 lfo1;tab-stops:list 36.0pt;background:white'><strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>Negación:</span></strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'> <b>Bloquea</b>
     eventos o <b>realidades</b> externas completas para que <b>no formen</b>
     parte de la <b>conciencia</b>, permitiendo actuar como si la experiencia
     traumática <b>nunca</b> <b>hubiera</b> <b>existido</b>.<sup>[2]</sup></span></li>
 <li  style=' mso-margin-top-alt:auto;margin-bottom:
     7.5pt;mso-list:l6 level1 lfo1;tab-stops:list 36.0pt;background:white'><strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>Formación
     reactiva:</span></strong><span lang=ES style='font-size:11.0pt;font-family:
     "Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
     mso-ansi-language:ES'> El <b>Yo</b> bloquea un deseo o recuerdo <b>inaceptable,
     reemplazándolo</b> en la conciencia por su <b>comportamiento</b> o <b>emoción</b>
     exactamente <b>opuesta</b>.<sup>[3]</sup></span></li>
</ul>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; ;mso-ansi-language:ES'>Los mecanismos de
defensa son <b>automáticos</b> e <b>inconscientes</b>. Aunque son <b>útiles</b>
a <b>corto</b> <b>plazo</b> para evitar la angustia, utilizarlos para bloquear
recuerdos puede causar <b>problemas</b> de conducta <b>a largo plazo</b>, ya
que las <b>emociones</b> <b>reprimidas</b> <b>siguen influyendo</b> desde el <b>inconsciente</b>.<sup>[4]</sup></span></p>

<div  >
        <nav style="margin-top:40px; padding:20px; text-align:center; border-top:1px solid #eee;"><a href="01_1_el_origen_del_miedo.php">« Anterior</a> | <a href="index.php">🏠</a> | <a href="03_3_miedo_cronico_y_tdah.php">Siguiente »</a></nav>
    </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="dark-mode.js"></script>
</body>
</html>
