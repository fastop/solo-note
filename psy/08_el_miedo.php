<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
    exit;
}

    include '../proc/logger.php';
    loggr($_SESSION['user_id'], $_SESSION['nick'],"Visito PAGINA 08 [PSY]");
    
 
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
        <h2 style='background:white'><span lang=ES style='font-family:"Segoe UI",sans-serif;
mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>El miedo</span><span
lang=ES style='font-family:"Segoe UI",sans-serif; mso-ansi-language:
ES'></span></h2>



<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>Como ya lo notamos, un
tema recurrente en tu vida es: </span><span class=ReddyCar><span
style='font-size:11.0pt'>El miedo</span></span><span lang=ES style='font-size:
11.0pt;font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'>. A
estas alturas del escrito, me supongo que ya te diste cuenta de dónde viene ese
miedo, al menos una parte esencial: </span><span class=ORANGYCar><span
style='font-size:11.0pt;text-transform:none'>sensibilidad al rechazo</span></span><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>, </span><span class=ORANGYCar><span style='font-size:
11.0pt;text-transform:none'>parálisis</span></span><span class=ORANGYCar><span
style='font-size:11.0pt'> </span></span><span class=ORANGYCar><span
style='font-size:11.0pt;text-transform:none'>por análisis</span></span><span
style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'> <span lang=ES>o el miedo al fracaso o a cometer errores
y </span></span><span class=ORANGYCar><span style='font-size:11.0pt;text-transform:
none'>la anticipación</span></span><span class=ORANGYCar><span
style='font-size:11.0pt'> </span></span><span class=ORANGYCar><span
style='font-size:11.0pt;text-transform:none'>catastrófica</span></span><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>, pensando en escenarios negativos. Si a esto le súmanos
la </span><span class=ORANGYCar><span style='font-size:11.0pt;text-transform:
none'>pobre regulación</span></span><span class=ORANGYCar><span
style='font-size:11.0pt'> </span></span><span class=ORANGYCar><span
style='font-size:11.0pt;text-transform:none'>emocional</span></span><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>, tenemos un cocktail molotov.</span></p>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>Además de esto
tenemos esa <b>etapa del grooming</b>, de la <b>manipulación</b> y de los <b>insultos</b>,
que <b>abrió más la puerta</b> para que se <b>gestaran</b> más <b>miedos</b> y
generara <b>graves</b> <b>daños</b> a la <b>autoestima</b>, daños que de
primera mano pareciera que no sucedieron, ya que no fuiste consciente de ello
en el momento, pero ese </span><span class=ORANGYCar><span style='font-size:
11.0pt;text-transform:none'>condicionamiento</span></span><span
style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'> <span lang=ES>a respuestas, </span></span><span
class=ORANGYCar><span style='font-size:11.0pt;text-transform:none'>validación</span></span><span
style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'> <span lang=ES>externa, ideas </span></span><span
class=ORANGYCar><span style='font-size:11.0pt;text-transform:none'>fragmentadas</span></span><span
style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'> <span lang=ES>entre otras (<i>como confiar en desconocidos
que poco a poco te quedaron mal o de plano te dañaron</i>), se plantaron como
semillas en tu ser hasta irse enraizando.</span></span></p>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>Poco a poco fuimos
trabajando toda esta clase de cosas con el tiempo, tu fuiste ganando confianza,
mejorando día con día, obviamente con los bajones esperados, nadie se cuera en un
par de meses. Pero ahí íbamos, al menos yo lo sentía así. Igual, no logramos
combatir muchos miedos que tenías bien enraizadas y que, a la larga, siento que
te llegaron a pudrir un poco.</span></p>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>Se que hay cosas que <b>residen</b>
<b>profundamente</b> en tu ser gracias a todo eso que ya mencionamos en este
documento. Y son cosas que te <b>limitan</b> <b>mucho</b>, te dejaron lisiada
ya que <b>no logras abrirte</b> o <b>mostrarte</b> <b>tal</b> <b>como</b> <b>eres</b>,
y esto es muy <b>cruel</b> para <b>ti misma</b> ya que <b>no eres realmente TU</b>
en <b>plenitud</b> de tu ser.</span></p>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>Siempre con el <b>terror</b>
<b>constante</b> de ser <b>juzgada</b>, de ser <b>regañada</b>, de <b>esperar</b>
que pasara <b>algo malo</b>, el miedo de ser <b>lastimada</b>. Y </span><span
class=GreenyCar><span style='font-size:11.0pt'>no es tu culpa</span></span><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>, ya vimos la razón de todo esto que viene desde tu
infancia.</span></p>

<p style='text-align:justify;background:white'><i><span lang=ES
style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>Por ello yo disfrutaba verte libre en las vacaciones. Ahí
en calzones con los pelos de fuera, desparramada, sin ningún tapujo, hablado
como tú sabes hablar, expresándote y haciendo lo que realmente querías, al menos
en esos momentos yo te sentía sumamente calmada, tranquila, cómoda y sin miedo
a ser juzgada.</span></i></p>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>Esta <b>negación</b> del
<b>SER</b>, <b>implica</b> la <b>ocultación</b> de cosas, <b>incluyendo</b> los
<b>miedos</b>, pero estos siempre <b>aparecerán</b>. Y el <b>ocultar</b> cosas
nos llevan a <b>verdades a medias</b> o <b>mentiras</b> para lograr salir de
las broncas en las que te metes por </span><span class=ORANGYCar><span
style='font-size:11.0pt;text-transform:none'>indecisión</span></span><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>, o por </span><span class=ORANGYCar><span
style='font-size:11.0pt;text-transform:none'>impulsividad</span></span><span
style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'> <span lang=ES>o la </span></span><span class=ORANGYCar><span
style='font-size:11.0pt;text-transform:none'>desregularización emocional</span></span><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>. </span></p>

<p  align=center style='text-align:center;background:gray'><i><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>El <b>miedo</b> que tienes, va directamente ligado a la <b>mentira</b>.
Todo en búsqueda de una ‘comodidad’ inexistente o por “salirte con la tuya”.</span></i><i><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
"Times New Roman"; mso-ansi-language:ES'></span></i></p>

<div >
        <nav style="margin-top:40px; padding:20px; text-align:center; border-top:1px solid #eee;"><a href="07_la_soledad_el_miedo_y_la_mentira.php">« Anterior</a> | <a href="index.php">🏠</a> | <a href="09_la_mentira.php">Siguiente »</a></nav>
    </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="dark-mode.js"></script>
</body>
</html>
