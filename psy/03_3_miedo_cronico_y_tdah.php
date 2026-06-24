<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
    exit;
}
 
    include '../proc/logger.php';
    loggr($_SESSION['user_id'], $_SESSION['nick'],"Visito PAGINA 03 [PSY]");
    
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
mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>3. Miedo
Crónico y TDAH</span></h2>



<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>Por otra parte,
tenemos que entender algo más que los mecanismos de defensa. Tenemos que tomar
en cuenta que el <b>miedo</b> <b>crónico</b> en personas con <b>TDAH</b> se
suele manifestar como <b>ansiedad</b> <b>generalizada</b>, fobia social o <b>sensibilidad</b>
<b>extrema</b> al <b>rechazo</b>; esto último lo tuviste muchizizizizmo de <b>niña</b>
con los <b>congéneres</b> de la <b>edad</b> y <b>familiares</b>. Todo esto deriva
de la <b>dificultad</b> para <b>regular</b> <b>emociones</b>, las <span
class=SpellE><b>críticas</b></span> <b>constantes</b>, la <b>sobrecarga</b> <b>sensorial</b>
y el <b>estrés</b> por <b>no cumplir</b> con las <b>expectativas</b> <b>normativas</b><sup>
[5]</sup>, o sea, ser “normie”.</span></p>

<ul type=disc>
 <li  style=' mso-margin-top-alt:auto;margin-bottom:
     7.5pt;mso-list:l11 level1 lfo2;tab-stops:list 36.0pt;background:white'><strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>Sensibilidad
     al rechazo (RSD):</span></strong><span lang=ES style='font-size:11.0pt;
     font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
     mso-ansi-language:ES'> Un </span><span class=ReddyCar><u><span
     style='font-size:11.0pt'>miedo</span></u></span><span style='font-size:
     11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
     color:red;mso-ansi-language:ES'> </span><b><span lang=ES style='font-size:
     11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
     mso-ansi-language:ES'>profundo</span></b><span lang=ES style='font-size:
     11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
     mso-ansi-language:ES'> a la <b>desaprobación</b> o a la <b>humillación</b>,
     que a menudo provoca <b>aislamiento</b> <b>social</b> por <b>temor</b> a <b>no</b>
     <b>encajar</b><sup> [6]</sup>.</span></li>
 <li  style=' mso-margin-top-alt:auto;margin-bottom:
     7.5pt;mso-list:l11 level1 lfo2;tab-stops:list 36.0pt;background:white'><strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>Parálisis
     por análisis:</span></strong><span lang=ES style='font-size:11.0pt;
     font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
     mso-ansi-language:ES'> Ante la <b>sobrecarga</b> de <b>tareas</b> o <b>decisiones</b>,
     el </span><span class=ReddyCar><u><span style='font-size:11.0pt'>miedo</span></u></span><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'> al <b>fracaso</b>
     o a <b>cometer</b> <b>errores</b> detiene por completo a la persona,
     causándole <b>frustración</b> <sup>[7]</sup>.</span></li>
 <li  style=' mso-margin-top-alt:auto;margin-bottom:
     7.5pt;mso-list:l11 level1 lfo2;tab-stops:list 36.0pt;background:white'><strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>Anticipación
     catastrófica:</span></strong><span lang=ES style='font-size:11.0pt;
     font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
     mso-ansi-language:ES'> Tendencia a <b>rumiar</b> y <b>magnificar</b> <b>posibles</b>
     <b>escenarios</b> <b>negativos</b> debido a un sistema nervioso
     hiperactivo <sup>[7]</sup>.</span></li>
</ul>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>Esto sucede porque el
cerebro con TDAH <b>procesa</b> la <b>información</b> y los <b>estímulos</b> de
<b>manera distinta</b>, lo que <b>dificulta</b> </span><span class=ReddyCar><span
style='font-size:11.0pt'>filtrar las amenazas percibidas</span></span><span
style='font-size:10.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'> </span><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>y <b>mantener</b> la <b>calma</b>
ante la <b>desregulación</b> <b>emocional</b>; por lo mismo, </span><span
class=ReddyCar><span style='font-size:11.0pt'>no sabes identificar cuándo estás
en peligro</span></span><span lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
 mso-ansi-language:ES'>.</span></p>

<div >
        <nav style="margin-top:40px; padding:20px; text-align:center; border-top:1px solid #eee;"><a href="02_2_mecanismos_de_defensa_anna_freud.php">« Anterior</a> | <a href="index.php">🏠</a> | <a href="04_4_historia_personal_e_interpretacion.php">Siguiente »</a></nav>
    </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="dark-mode.js"></script>
</body>
</html>
