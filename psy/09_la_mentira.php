<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
    exit;
}
 

    include '../proc/logger.php';
    loggr($_SESSION['user_id'], $_SESSION['nick'],"Visito PAGINA 09 [PSY]");
    

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
mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>La mentira</span><span
lang=ES style='font-family:"Segoe UI",sans-serif; mso-ansi-language:
ES'></span></h2>



<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>La mentira te ha ‘<i>funcionado’</i>
para poder relacionarte con personas, para poder hacer cosas que no hubieses
podido hacer o simplemente para <b>escudar</b> en ella tus <b>olvidos</b>, tus <b>impulsos</b>
o <b>indecisiones</b>, y así lograr <b>evitar</b> la <b>culpa</b> gracias a
ella, aunque te lleves a medio mundo en las patas o realmente sea muy obvio. También
te sirve para <b>evitar</b> <b>responsabilidades</b>, este es otro punto que
tocaremos mas adelante.</span></p>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>Siempre ha sido tu <b>mejor</b>
<b>aliada</b> y ha sido <b>reforzada</b> <b>dependiendo</b> de la <b>situación</b>,
<b>siempre</b> con el <b>mismo</b> <b>objetivo</b>: <b>Evitar</b> que se te <b>moleste</b>
por tus <b>acciones</b> <b>o</b>, peor aún, <b>que</b> se te <b>exponga</b> y
se muestre quién eres realmente, justo eso que tanto ocultas, que te da pena
compartir y mostrar, ya que sabemos que por dentro eres un <b>cúmulo</b> de <b>inseguridades</b>,
de ‘malos’ pensamientos (<i>matar, hacer cosas malas, etc.</i>), y sobre todo esto
te hace sentir </span><span class=ORANGYCar><span style='font-size:11.0pt;
text-transform:none'>muy vulnerable</span></span><span lang=ES
style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>, y esto es <b>justamente</b> lo que te <b>emperra</b>,
pero a su vez te <b>avergüenza</b> tanto que quieres dejar de existir.</span></p>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>La <b>naturaleza de
la mentira</b> en general es para <b>evitar</b> un <b>problema</b> <b>inmediato</b>,
aunque eso termine <b>generando</b> un <b>problema</b> <b>mayor</b> <b>después</b>,
suele haber algo como:</span></p>

<p style='margin-left:53.4pt;text-indent:-18.0pt;mso-list:l8 level1 lfo10;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
 mso-ansi-language:ES'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>        
</span></span></span><![endif]><b><span lang=ES style='font-size:11.0pt;
font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'>Miedo</span></b><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'> <b>intenso</b> a la <b>confrontación</b>.</span></p>

<p style='margin-left:53.4pt;text-indent:-18.0pt;mso-list:l8 level1 lfo10;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
 mso-ansi-language:ES'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>        
</span></span></span><![endif]><b><span lang=ES style='font-size:11.0pt;
font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'>Miedo</span></b><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'> al <b>rechazo</b> o al <b>abandono</b>.</span></p>

<p style='margin-left:53.4pt;text-indent:-18.0pt;mso-list:l8 level1 lfo10;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
 mso-ansi-language:ES'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>        
</span></span></span><![endif]><b><span lang=ES style='font-size:11.0pt;
font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'>Vergüenza</span></b><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'> por haber <b>cometido</b> un <b>error</b>.</span></p>

<p style='margin-left:53.4pt;text-indent:-18.0pt;mso-list:l8 level1 lfo10;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
 mso-ansi-language:ES'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>        
</span></span></span><![endif]><b><span lang=ES style='font-size:11.0pt;
font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'>Dificultad</span></b><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'> para <b>tolerar</b> <b>consecuencias</b> <b>negativas</b>
en el corto plazo.</span></p>

<p style='margin-left:53.4pt;text-indent:-18.0pt;mso-list:l8 level1 lfo10;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
 mso-ansi-language:ES'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>        
</span></span></span><![endif]><b><span lang=ES style='font-size:11.0pt;
font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'>Impulsividad</span></b><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'> (que puede estar relacionada con el TDAH).</span></p>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>La <b>lógica interna</b>
suele ser algo así:</span></p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l0 level1 lfo11;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:"Sitka Text";mso-fareast-font-family:"Sitka Text";mso-bidi-font-family:
"Sitka Text"; mso-ansi-language:ES;mso-bidi-font-style:italic'><span
style='mso-list:Ignore'>-<span style='font:7.0pt "Times New Roman"'>     
</span></span></span><![endif]><i><span lang=ES style='font-size:11.0pt;
font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'>&quot;Si
digo la verdad ahora, habrá un problema.&quot;</span></i></p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l0 level1 lfo11;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:"Sitka Text";mso-fareast-font-family:"Sitka Text";mso-bidi-font-family:
"Sitka Text"; mso-ansi-language:ES;mso-bidi-font-style:italic'><span
style='mso-list:Ignore'>-<span style='font:7.0pt "Times New Roman"'>     
</span></span></span><![endif]><i><span lang=ES style='font-size:11.0pt;
font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'>&quot;Voy
a ocultarlo por el momento.&quot;</span></i></p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l0 level1 lfo11;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:"Sitka Text";mso-fareast-font-family:"Sitka Text";mso-bidi-font-family:
"Sitka Text"; mso-ansi-language:ES;mso-bidi-font-style:italic'><span
style='mso-list:Ignore'>-<span style='font:7.0pt "Times New Roman"'>     
</span></span></span><![endif]><i><span lang=ES style='font-size:11.0pt;
font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'>&quot;Ya
veré cómo lo resuelvo después.&quot;</span></i></p>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>El problema es que el
&quot;<b>después</b>&quot; llega, y la situación se complica. Es ahí cuando
llega la <b>pérdida</b> de <b>confianza</b>, siendo <b>peor</b> que el <b>problema</b>
<b>original</b>.</span></p>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>Desde <b>afuera</b>
parece <b>irracional</b> porque la <b>mentira</b> <b>empeora</b> <b>todo</b>.
Pero <b>desde</b> <b>adentro</b>, la persona <b>no está pensando en el costo</b>
a largo plazo; está <b>intentando</b> <b>escapar</b> del <b>malestar</b> <b>inmediato</b>.
Por ejemplo:</span></p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo16;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings; mso-ansi-language:ES'><span style='mso-list:Ignore'>§<span
style='font:7.0pt "Times New Roman"'>  </span></span></span><![endif]><b><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>Oculta</span></b><span lang=ES style='font-size:11.0pt;
font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'> un <b>problema</b>
para <b>evitar</b> una <b>discusión</b>.</span></p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo16;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings; mso-ansi-language:ES'><span style='mso-list:Ignore'>§<span
style='font:7.0pt "Times New Roman"'>  </span></span></span><![endif]><b><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>Oculta</span></b><span lang=ES style='font-size:11.0pt;
font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'> una <b>conversación</b>
para evitar <b>celos</b>.</span></p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo16;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings; mso-ansi-language:ES'><span style='mso-list:Ignore'>§<span
style='font:7.0pt "Times New Roman"'>  </span></span></span><![endif]><b><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>Oculta</span></b><span lang=ES style='font-size:11.0pt;
font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'> un <b>error</b>
para <b>evitar</b> <b>decepcionar</b> a alguien.</span></p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo16;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings; mso-ansi-language:ES'><span style='mso-list:Ignore'>§<span
style='font:7.0pt "Times New Roman"'>  </span></span></span><![endif]><b><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>Oculta</span></b><span lang=ES style='font-size:11.0pt;
font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'> <b>información</b>
de su <b>pareja</b> para <b>evitar un conflicto</b>.</span></p>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>Y luego el <b>descubrimiento</b>
provoca <b>exactamente</b> el <b>conflicto</b> que intentaba evitar, <b>pero</b>
amplificado.</span></p>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>La pregunta clave es:
<b>¿qué hace cuando la descubren?</b></span></p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l15 level1 lfo17;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings; mso-ansi-language:ES'><span style='mso-list:Ignore'>§<span
style='font:7.0pt "Times New Roman"'>  </span></span></span><![endif]><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>Si <b>reconoce</b> la <b>mentira</b>, muestra </span><span
class=ReddyCar><span lang=ES style='font-size:11.0pt;mso-ansi-language:ES'>vergüenza</span></span><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>, <b>acepta</b> <b>responsabilidad</b> y <b>parece</b> <b>atrapada</b>
en un </span><span class=ReddyCar><span lang=ES style='font-size:11.0pt;
mso-ansi-language:ES'>patrón</span></span><span lang=ES style='font-size:11.0pt;
font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'> que <b>no
sabe romper</b>, suele apuntar más a <b>evitación</b> y </span><span
class=ReddyCar><span lang=ES style='font-size:11.0pt;mso-ansi-language:ES'>miedo</span></span><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>.<br style='mso-special-character:line-break'>
<![if !supportLineBreakNewLine]><br style='mso-special-character:line-break'>
<![endif]></span></p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l15 level1 lfo17;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings; mso-ansi-language:ES'><span style='mso-list:Ignore'>§<span
style='font:7.0pt "Times New Roman"'>  </span></span></span><![endif]><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>Si <b>niega</b> <b>evidencias</b>, <b>cambia</b>
constantemente la <b>historia</b>, <b>culpa</b> a <b>otros</b> y <b>nunca</b> <b>asume</b>
<b>responsabilidad</b>, el <b>problema</b> suele ser más <b>profundo</b>.</span></p>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>Si una persona <b>realmente</b>
<b>desarrolla</b> una <b>tendencia</b> <b>fuerte</b> a <b>mentir</b> de forma <b>repetitiva</b>,
suele ser el resultado de una <b>combinación</b> de <b>factores</b>, por
ejemplo:</span></p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l12 level1 lfo18;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings; mso-ansi-language:ES'><span style='mso-list:Ignore'>§<span
style='font:7.0pt "Times New Roman"'>  </span></span></span><![endif]><b><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>Experiencias</span></b><span lang=ES style='font-size:
11.0pt;font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'> <b>tempranas</b>
donde decir la <b>verdad</b> <b>generaba</b> <b>castigos</b>, <b>rechazo</b> o <b>conflictos</b>.</span></p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l12 level1 lfo18;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings; mso-ansi-language:ES'><span style='mso-list:Ignore'>§<span
style='font:7.0pt "Times New Roman"'>  </span></span></span><![endif]><b><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>Baja autoestima</span></b><span lang=ES style='font-size:
11.0pt;font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'> y
<b>necesidad</b> de <b>sentirse</b> más <b>valiosa</b>, <b>interesante</b> o <b>aceptada</b>.</span></p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l12 level1 lfo18;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings; mso-ansi-language:ES'><span style='mso-list:Ignore'>§<span
style='font:7.0pt "Times New Roman"'>  </span></span></span><![endif]><span
class=ReddyCar><span lang=ES style='font-size:11.0pt;mso-ansi-language:ES'>Miedo</span></span><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'> <b>intenso</b> al <b>abandono</b> o al <b>rechazo</b>.</span></p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l12 level1 lfo18;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings; mso-ansi-language:ES'><span style='mso-list:Ignore'>§<span
style='font:7.0pt "Times New Roman"'>  </span></span></span><![endif]><b><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>Dificultades</span></b><span lang=ES style='font-size:
11.0pt;font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'>
para </span><span class=ORANGYCar><span lang=ES style='font-size:11.0pt;
text-transform:none;mso-ansi-language:ES'>regular emociones</span></span><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'> e <b>impulsos</b> (<i>algo que puede verse en personas
con TDAH</i>).</span></p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l12 level1 lfo18;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings; mso-ansi-language:ES'><span style='mso-list:Ignore'>§<span
style='font:7.0pt "Times New Roman"'>  </span></span></span><![endif]><b><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>Hábitos aprendidos</span></b><span lang=ES
style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'> durante años, donde <b>mentir</b> se <b>convirtió</b> en
una <b>estrategia</b> para <b>resolver</b> <b>problemas</b> o <b>evitar</b> <b>consecuencias</b>.</span></p>

<p style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l12 level1 lfo18;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Wingdings;mso-fareast-font-family:Wingdings;mso-bidi-font-family:
Wingdings; mso-ansi-language:ES'><span style='mso-list:Ignore'>§<span
style='font:7.0pt "Times New Roman"'>  </span></span></span><![endif]><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'>En algunos casos, otros problemas <b>psicológicos</b> más
<b>complejos</b> que <b>requieren</b> <b>evaluación</b> <b>profesional</b>. </span></p>

<p style='background:white'><span lang=ES style='font-family:"Segoe UI",sans-serif;
 mso-ansi-language:ES'></span></p>

<p style='background:white'><span lang=ES style='font-family:"Segoe UI",sans-serif;
 mso-ansi-language:ES'></span></p>

<p style='background:white'><span lang=ES style='font-family:"Segoe UI",sans-serif;
 mso-ansi-language:ES'></span></p>

<div >
        <nav style="margin-top:40px; padding:20px; text-align:center; border-top:1px solid #eee;"><a href="08_el_miedo.php">« Anterior</a> | <a href="index.php">🏠</a> | <a href="10_el_miedo_la_mentira_en_la_actualidad.php">Siguiente »</a></nav>
    </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="dark-mode.js"></script>
</body>
</html>
