<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
    exit;
}

    include '../proc/logger.php';
    loggr($_SESSION['user_id'], $_SESSION['nick'],"Visito PAGINA 05 [PSY]");
    
 
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
mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>5. Infancia
Tardía: Orfandad Digital</span></h2>



<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>Hasta el momento,
solo hemos abarcado la <b>infancia</b> <b>temprana</b> y el <b>desarrollo
cognitivo inicial</b> de tu persona; ahora nos adentraremos en la etapa en la
cual empezaste a hacer <b>uso</b> de las <b>redes</b> <b>sin</b> <b>supervisión</b>
adulta (<b>infancia tardía</b>). A esto se le llama un <b>huérfano</b> <b>digital</b>.</span></p>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>En ese momento
estabas en <b>plena</b> etapa de <b>desarrollo</b> <b>cognitivo</b> y <b>emocional</b>.
A esa edad, el <b>cerebro</b> <b>aún</b> está <b>desarrollando</b> la </span><span
class=GreenyCar><span style='font-size:11.0pt'>corteza</span></span><span
style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'> </span><span class=GreenyCar><span style='font-size:
11.0pt'>prefrontal</span></span><span lang=ES style='font-size:11.0pt;
font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'>,
responsable del <b>control</b> de <b>impulsos</b> y la <b>evaluación</b> de <b>riesgos</b>
y, como ya sabemos, uno de los rasgos del <b>TDAH</b> es que se encuentra <b>estrechamente</b>
<b>ligado</b> a la </span><span class=GreenyCar><span style='font-size:11.0pt'>corteza</span></span><span
style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'> </span><span class=GreenyCar><span style='font-size:
11.0pt'>prefrontal</span></span><span lang=ES style='font-size:11.0pt;
font-family:"Segoe UI",sans-serif; mso-ansi-language:ES'>; por
ello, esta área presenta una <b>maduración</b> <b>más lenta</b>, llega a tener
un volumen ligeramente menor, además de contar con <b>niveles</b> <b>irregulares</b>
de <b>neurotransmisores</b> clave como la </span><span class=ReddyCar><span
style='font-size:11.0pt'>dopamina</span></span><span class=ReddyCar><span
style='font-size:11.0pt;color:black;mso-color-alt:windowtext'>.</span></span><span
style='font-size:11.0pt;font-family:"Segoe UI",sans-serif; 
mso-ansi-language:ES'> <sup><span lang=ES>[8]</span></sup><span lang=ES> Como
lo puedes notar, de nueva cuenta un combo wombo fatal.</span></span></p>

<p style='background:white'><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif; mso-ansi-language:ES'>Esto a mediano/largo
plazo impacta las <b>funciones</b> <b>ejecutivas</b>, o sea:</span></p>

<ul type=disc>
 <li  style=' mso-margin-top-alt:auto;margin-bottom:
     7.5pt;mso-list:l14 level1 lfo3;tab-stops:list 36.0pt;background:white'><strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>Falta de
     inhibición y control de impulsos:</span></strong><span lang=ES
     style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
     "Times New Roman";mso-ansi-language:ES'> <b>Cuesta</b> <b>frenar</b> <b>respuestas</b>
     <b>automáticas</b>, lo que te lleva a <b>interrumpir</b> <b>a otros</b>, <b>actuar
     sin pensar</b> o tener <b>baja</b> <b>tolerancia</b> a la <b>frustración</b>.
     Cosa que veíamos constantemente cuando ibas a la escuela.</span></li>
 <li  style=' mso-margin-top-alt:auto;margin-bottom:
     7.5pt;mso-list:l14 level1 lfo3;tab-stops:list 36.0pt;background:white'><strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>Problemas
     de memoria de trabajo:</span></strong><span lang=ES style='font-size:11.0pt;
     font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
     mso-ansi-language:ES'> Es difícil <b>retener</b> <b>información</b> a <b>corto</b>
     <b>plazo</b> para realizar <b>tareas</b> <b>inmediatas</b> (<i>olvidos
     constantes, perder objetos, etc.</i>).</span></li>
 <li  style=' mso-margin-top-alt:auto;margin-bottom:
     7.5pt;mso-list:l14 level1 lfo3;tab-stops:list 36.0pt;background:white'><strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>Dificultad
     de concentración y distracción:</span></strong><span lang=ES
     style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
     "Times New Roman";mso-ansi-language:ES'> La </span><span class=GreenyCar><span
     style='font-size:11.0pt'>corteza</span></span><span style='font-size:11.0pt;
     font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
     mso-ansi-language:ES'> </span><span class=GreenyCar><span
     style='font-size:11.0pt'>prefrontal</span></span><span lang=ES
     style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
     "Times New Roman";mso-ansi-language:ES'> no logra &quot;<i>filtrar</i>&quot;
     los <b>estímulos</b> <b>irrelevantes</b> del entorno, haciendo que <b>cualquier</b>
     <b>ruido</b> o pensamiento <b>desvíe</b> la <b>atención</b>.</span></li>
 <li  style=' mso-margin-top-alt:auto;margin-bottom:
     7.5pt;mso-list:l14 level1 lfo3;tab-stops:list 36.0pt;background:white'><strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>Mala
     gestión del tiempo y planificación:</span></strong><span lang=ES
     style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
     "Times New Roman";mso-ansi-language:ES'> <b>Cuesta</b> <b>priorizar</b>
     tareas, <b>calcular</b> cuánto <b>tiempo</b> tomará una actividad y <b>organizar</b>
     los pasos necesarios <b>para</b> cumplir <b>metas</b> a futuro.</span></li>
 <li  style=' mso-margin-top-alt:auto;margin-bottom:
     7.5pt;mso-list:l14 level1 lfo3;tab-stops:list 36.0pt;background:white'><strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>Regulación
     emocional:</span></strong><span lang=ES style='font-size:11.0pt;
     font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
     mso-ansi-language:ES'> Al estar conectado con el <b>sistema</b> <b>límbico</b>
     (<i>encargado de las emociones</i>), fallan los <b>mecanismos</b> para <b>mantener</b>
     la <b>calma</b>, lo que causa <b>altibajos</b> <b>emocionales</b> <b>intensos</b>.</span></li>
</ul>

<p  style='mso-margin-top-alt:auto;margin-bottom:7.5pt;
background:white'><span lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
mso-fareast-font-family:"Times New Roman"; mso-ansi-language:ES'>Aunado
a lo del TDAH, tenemos que este &quot;crecimiento en la intemperie
digital&quot; genera:</span></p>

<ol start=1 type=1>
 <li  style=' mso-margin-top-alt:auto;margin-bottom:
     7.5pt;mso-list:l1 level1 lfo5;tab-stops:list 36.0pt;background:white'><strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>Autoestima
     vinculada a la validación externa (métricas): </span></strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>Al <b>no</b>
     <b>haber</b> tenido un <b>filtro</b> <b>adulto</b> que <b>explicara</b> la
     <b>diferencia</b> entre el <b>valor personal</b> y la <b>aceptación</b> <b>digital</b>,
     el individuo suele desarrollar:</span></li>
</ol>

<p  style='mso-margin-top-alt:auto;margin-bottom:
7.5pt;margin-left:54.0pt;mso-add-space:auto;text-indent:-18.0pt;mso-list:l16 level1 lfo7;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
 mso-ansi-language:ES'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>        
</span></span></span><![endif]><span class=GreenyCar><b><span lang=ES
style='font-size:11.0pt;mso-ansi-language:ES'>Dependencia del &quot;Like&quot;:</span></b></span><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
"Times New Roman"; mso-ansi-language:ES'> Su <b>estado</b> de <b>ánimo</b>
está <b>fuertemente</b> <b>condicionado</b> por la <b>respuesta</b> <b>inmediata</b>
de los <b>demás</b>. Esto aplica también para el sistema de alerta constante a
las notificaciones.<br style='mso-special-character:line-break'>
<![if !supportLineBreakNewLine]><br style='mso-special-character:line-break'>
<![endif]></span></p>

<p  style='mso-margin-top-alt:auto;margin-bottom:
7.5pt;margin-left:54.0pt;mso-add-space:auto;text-indent:-18.0pt;mso-list:l16 level1 lfo7;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
 mso-ansi-language:ES'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>        
</span></span></span><![endif]><span class=GreenyCar><b><span lang=ES
style='font-size:11.0pt;mso-ansi-language:ES'>Identidad Fragmentada:</span></b></span><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
"Times New Roman"; mso-ansi-language:ES'> La <b>construcción</b>
del &quot;<b>yo</b>&quot; se hizo para <b>ser exhibida</b>, lo que puede <b>generar
</b>una<b> sensación de vacío </b>cuando <b>no</b> <b>hay</b> una <b>audiencia</b>
presente. Y esto, a mi parecer, es lo más duro, ya que aquí es donde se
desarrolla esa dependencia a los demás, esa <b>necesidad</b> de <b>no estar
solo</b> con uno mismo, ya que es cuando se <b>siente</b> el <b>vacío</b> que
no se puede llenar tan fácilmente porque nunca se enfrentó. En <b>tu</b> <b>caso</b>,
el enfrentamiento de esto te causa <b>aún más pánico</b> y </span><span
class=ReddyCar><span style='font-size:11.0pt'>miedo</span></span><span lang=ES
style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
"Times New Roman"; mso-ansi-language:ES'> porque es cuando te
abordan las voces y las ideas extrañas.</span></p>

<ol start=2 type=1>
 <li  style=' mso-margin-top-alt:auto;margin-bottom:
     7.5pt;mso-list:l1 level1 lfo5;tab-stops:list 36.0pt;background:white'><strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>Alteración
     del sistema de recompensa (dopamina digital):</span></strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'> El
     cerebro de un niño en esta etapa es <b>altamente</b> <b>plástico</b>. La <b>exposición</b>
     <b>sin límites</b> a <b>estímulos</b> <b>infinitos</b> genera:</span></li>
</ol>

<p  style='mso-margin-top-alt:auto;margin-bottom:
7.5pt;margin-left:54.0pt;mso-add-space:auto;text-indent:-18.0pt;mso-list:l5 level1 lfo6;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
 mso-ansi-language:ES'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>        
</span></span></span><![endif]><span class=GreenyCar><b><span lang=ES
style='font-size:11.0pt;mso-ansi-language:ES'>Baja tolerancia a la frustración</span></b></span><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
"Times New Roman"; mso-ansi-language:ES'>: Acostumbrados a la <b>gratificación</b>
<b>instantánea</b> (scroll infinito, notificaciones), las <b>tareas</b> que <b>requieren</b>
<b>esfuerzo</b> <b>sostenido</b> o <b>paciencia</b> les resultan <b>insoportables</b>.
Imagínate ahora esto con TDAH.<br style='mso-special-character:line-break'>
<![if !supportLineBreakNewLine]><br style='mso-special-character:line-break'>
<![endif]></span></p>

<p  style='mso-margin-top-alt:auto;margin-bottom:
7.5pt;margin-left:54.0pt;mso-add-space:auto;text-indent:-18.0pt;mso-list:l5 level1 lfo6;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
 mso-ansi-language:ES'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>        
</span></span></span><![endif]><span class=GreenyCar><b><span lang=ES
style='font-size:11.0pt;mso-ansi-language:ES'>Dificultad para gestionar el
aburrimiento:</span></b></span><span lang=ES style='font-size:11.0pt;
font-family:"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman";
 mso-ansi-language:ES'> El <b>aburrimiento</b> se <b>percibe</b>
como una <b>crisis emocional</b> que debe ser &quot;<b>anestesiada</b>&quot;
inmediatamente c<b>on el móvil</b>. Aquí tienes <b>una pieza</b> para la
respuesta de <b>tu</b> necesidad extrema por el <b>teléfono</b>. El resto sería
lo de la <b>alerta</b> <b>constante</b> dada por comportamiento adquirido por relaciones/dopamina
y por el miedo, que siempre te acecha. Ese miedo de perder a la gente o que te
abandonen o que la “cagues” y estés mal.</span></p>

<ol start=3 type=1>
 <li  style=' mso-margin-top-alt:auto;margin-bottom:
     7.5pt;mso-list:l1 level1 lfo5;tab-stops:list 36.0pt;background:white'><strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>Normalización
     del &quot;oversharing&quot; y falta de privacidad: </span></strong><span
     lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
     mso-fareast-font-family:"Times New Roman";mso-ansi-language:ES'>Crecer sin
     supervisión digital a menudo borra la frontera entre lo íntimo y lo público:</span></li>
</ol>

<p  style='mso-margin-top-alt:auto;margin-bottom:
7.5pt;margin-left:54.0pt;mso-add-space:auto;text-indent:-18.0pt;mso-list:l3 level1 lfo8;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
 mso-ansi-language:ES'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>        
</span></span></span><![endif]><span class=GreenyCar><b><span lang=ES
style='font-size:11.0pt;mso-ansi-language:ES'>Desensibilización de la
privacidad:</span></b></span><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman"; 
mso-ansi-language:ES'> Ven como algo <b>natural</b> <b>compartir</b> <b>estados</b>
emocionales, <b>ubicación</b> o <b>detalles personales</b> con <b>desconocidos</b>.
En <b>tu</b> caso era muy fácil que <b>publicaras</b> cualquier cosa equis,
pero gracias a esto, no te dabas cuenta de que esos mensajes le llegaban de
manera personal al resto. O no te importaba realmente dar tu nombre completo en
redes o hasta tu ubicación con fotos o simplemente decir que eras de Mty. En
aquel tiempo le llamábamos “la inocencia”.<br style='mso-special-character:
line-break'>
<![if !supportLineBreakNewLine]><br style='mso-special-character:line-break'>
<![endif]></span></p>

<p  style='mso-margin-top-alt:auto;margin-bottom:
7.5pt;margin-left:54.0pt;mso-add-space:auto;text-indent:-18.0pt;mso-list:l3 level1 lfo8;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
 mso-ansi-language:ES'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>        
</span></span></span><![endif]><span class=GreenyCar><b><span lang=ES
style='font-size:11.0pt;mso-ansi-language:ES'>Vulnerabilidad a la manipulación:
</span></b></span><span lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
mso-fareast-font-family:"Times New Roman"; mso-ansi-language:ES'>Al
<b>no</b> <b>haber</b> tenido una <b>guía</b> sobre &quot;<b><i>intenciones
ocultas</i></b>&quot; en la red, pueden <b>haber</b> <b>desarrollado</b> una <b>confianza</b>
</span><span class=ReddyCar><span lang=ES style='font-size:11.0pt;mso-ansi-language:
ES'>ingenua</span></span><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman"; 
mso-ansi-language:ES'> o, por el <b>contrario</b>, una </span><span
class=ReddyCar><span lang=ES style='font-size:11.0pt;mso-ansi-language:ES'>paranoia</span></span><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
"Times New Roman"; mso-ansi-language:ES'> defensiva <b>si</b> <b>vivieron</b>
<b>experiencias</b> <b>negativas</b> tempranas. <b>¡Esto es muy tú!</b> Siempre
en uno de los dos extremos, o super <b>paranoica</b> por lo que ya pasaste o
super <b>ingenua</b> dando demasiada confianza a las personas, ya sea por </span><span
class=ReddyCar><span style='font-size:11.0pt'>miedo</span></span><span lang=ES
style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
"Times New Roman"; mso-ansi-language:ES'>, <b>presión</b> o “<b>inocencia</b>”.</span></p>

<p  style='mso-margin-top-alt:auto;margin-bottom:
7.5pt;margin-left:54.0pt;mso-add-space:auto;background:white'><span lang=ES
style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
"Times New Roman"; mso-ansi-language:ES'></span></p>

<p class=ORANGY style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l1 level1 lfo5;
tab-stops:list 36.0pt'><![if !supportLists]><span lang=ES style='font-size:
10.0pt;mso-bidi-font-size:11.0pt;mso-fareast-font-family:"Segoe UI";color:windowtext;
mso-ansi-language:ES;font-weight:normal;mso-bidi-font-weight:bold'><span
style='mso-list:Ignore'>4.<span style='font:7.0pt "Times New Roman"'>    
</span></span></span><![endif]><span lang=ES style='mso-fareast-font-family:
"Times New Roman";text-transform:none;mso-ansi-language:ES'>Distorsión de la realidad
social y comparación constante:</span><span lang=ES style='mso-fareast-font-family:
"Times New Roman"; text-transform:none;mso-ansi-language:ES'> </span><span
lang=ES style='mso-fareast-font-family:"Times New Roman"; 
text-transform:none;mso-ansi-language:ES;font-weight:normal;mso-bidi-font-weight:
bold'>El niño de esa edad </span><span lang=ES style='mso-fareast-font-family:
"Times New Roman"; text-transform:none;mso-ansi-language:ES'>toma</span><span
lang=ES style='mso-fareast-font-family:"Times New Roman"; 
text-transform:none;mso-ansi-language:ES;font-weight:normal;mso-bidi-font-weight:
bold'> </span><span lang=ES style='mso-fareast-font-family:"Times New Roman";
 text-transform:none;mso-ansi-language:ES'>lo que ve</span><span
lang=ES style='mso-fareast-font-family:"Times New Roman"; 
text-transform:none;mso-ansi-language:ES;font-weight:normal;mso-bidi-font-weight:
bold'> en pantalla como una </span><span lang=ES style='mso-fareast-font-family:
"Times New Roman"; text-transform:none;mso-ansi-language:ES'>verdad
absoluta</span><span lang=ES style='mso-fareast-font-family:"Times New Roman";
 text-transform:none;mso-ansi-language:ES;font-weight:normal;
mso-bidi-font-weight:bold'>.</span><span lang=ES style='mso-fareast-font-family:
"Times New Roman"; mso-ansi-language:ES'></span></p>

<p  style='mso-margin-top-alt:auto;margin-bottom:7.5pt;
margin-left:54.0pt;mso-add-space:auto;text-indent:-18.0pt;mso-list:l3 level1 lfo8;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
 mso-ansi-language:ES'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>        
</span></span></span><![endif]><span class=GreenyCar><b><span lang=ES
style='font-size:11.0pt;mso-ansi-language:ES'>Síndrome de comparación social:</span></b></span><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
"Times New Roman"; mso-ansi-language:ES'> Han pasado sus años
formativos <b>comparando</b> su <b>vida</b> con la de los demás (<i>filtros,
vidas perfectas</i>). Esto suele derivar en sentimientos de <b>insuficiencia</b>
<b>crónica</b>.</span></p>

<p class=ORANGY style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l1 level1 lfo5;
tab-stops:list 36.0pt'><![if !supportLists]><span lang=ES style='font-size:
10.0pt;mso-bidi-font-size:11.0pt;mso-fareast-font-family:"Segoe UI";color:windowtext;
mso-ansi-language:ES;font-weight:normal;mso-bidi-font-weight:bold'><span
style='mso-list:Ignore'>5.<span style='font:7.0pt "Times New Roman"'>    
</span></span></span><![endif]><span lang=ES style='mso-fareast-font-family:
"Times New Roman";text-transform:none;mso-ansi-language:ES'>Habilidades
sociales parentificadas o digitalizadas</span><span lang=ES style='mso-fareast-font-family:
"Times New Roman";mso-ansi-language:ES'></span></p>

<p  style='mso-margin-top-alt:auto;margin-bottom:
7.5pt;margin-left:54.0pt;mso-add-space:auto;text-indent:-18.0pt;mso-list:l3 level1 lfo8;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
 mso-ansi-language:ES'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>        
</span></span></span><![endif]><span class=GreenyCar><b><span lang=ES
style='font-size:11.0pt;mso-ansi-language:ES'>Preferencia por la comunicación
asincrónica:</span></b></span><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman"; 
mso-ansi-language:ES'> Se <b>sienten</b> más <b>seguros</b> <b>chateando</b>
que en una <b>conversación cara a cara</b>, donde no hay tiempo de editar la
respuesta o usar filtros. Podrías decir que <b>Discord</b> es un cara a cara,
pero igual, <b>no es un cara a cara REAL</b>, no es estar de frente a alguien.
Esto <b>disminuye</b> las <b>habilidades</b> de <b>comunicación</b> <b>humana</b>
que se deberían desarrollar más que nunca en esta etapa. Actualmente puede que
ya estés superando esto, pero <b>sigue vigente</b>; cuando recaes, vuelves a
ver el piso o simplemente no sabes confrontar a las personas y regresas a lo
mismo (</span><span class=ReddyCar><i><span style='font-size:11.0pt'>miedo</span></i></span><i><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
"Times New Roman"; mso-ansi-language:ES'>, nervios, etc.).</span></i><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
"Times New Roman"; mso-ansi-language:ES'><br style='mso-special-character:
line-break'>
<![if !supportLineBreakNewLine]><br style='mso-special-character:line-break'>
<![endif]></span></p>

<p  style='mso-margin-top-alt:auto;margin-bottom:
7.5pt;margin-left:54.0pt;mso-add-space:auto;text-indent:-18.0pt;mso-list:l3 level1 lfo8;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
 mso-ansi-language:ES'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>        
</span></span></span><![endif]><span class=GreenyCar><b><span lang=ES
style='font-size:11.0pt;mso-ansi-language:ES'>Dificultad para leer claves no
verbales:</span></b></span><span lang=ES style='font-size:11.0pt;font-family:
"Segoe UI",sans-serif;mso-fareast-font-family:"Times New Roman"; 
mso-ansi-language:ES'> Al haber mediado <b>gran parte </b>de su <b>socialización</b>
a <b>través</b> de una <b>pantalla</b>, pueden tener <b>menos agudeza</b> para <b>interpretar</b>
el <b>lenguaje</b> <b>corporal</b> o el <b>tono de voz</b> en <b>la vida real</b>.
Y es por ello que, a la fecha, no sueles interpretar correctamente las
intenciones de las personas y así es como regresamos al punto 3, <b>vulnerabilidad</b>
a la <b>manipulación</b>.</span></p>

<p  style='mso-margin-top-alt:auto;margin-bottom:
7.5pt;margin-left:54.0pt;mso-add-space:auto;background:white'><span lang=ES
style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
"Times New Roman"; mso-ansi-language:ES'></span></p>

<p class=ORANGY style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l1 level1 lfo5;
tab-stops:list 36.0pt'><![if !supportLists]><span lang=ES style='font-size:
10.0pt;mso-bidi-font-size:11.0pt;mso-fareast-font-family:"Segoe UI";color:windowtext;
mso-ansi-language:ES;font-weight:normal;mso-bidi-font-weight:bold'><span
style='mso-list:Ignore'>6.<span style='font:7.0pt "Times New Roman"'>    
</span></span></span><![endif]><span lang=ES style='mso-fareast-font-family:
"Times New Roman";text-transform:none;mso-ansi-language:ES'>Desconexión de la
autoridad adulta: </span><span lang=ES style='mso-fareast-font-family:"Times New Roman";
 text-transform:none;mso-ansi-language:ES;font-weight:normal;
mso-bidi-font-weight:bold'>El hecho de haber navegado &quot;solos&quot; por un mundo
complejo (<i>y a veces peligroso</i>) desde tan temprano genera:</span><span
lang=ES style='mso-fareast-font-family:"Times New Roman";mso-ansi-language:
ES'></span></p>

<p  style='mso-margin-top-alt:auto;margin-bottom:7.5pt;
margin-left:53.4pt;mso-add-space:auto;text-indent:-18.0pt;mso-list:l8 level1 lfo10;
background:white'><![if !supportLists]><span lang=ES style='font-size:11.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
 mso-ansi-language:ES'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>        
</span></span></span><![endif]><span class=GreenyCar><b><span lang=ES
style='font-size:11.0pt;mso-ansi-language:ES'>Autosuficiencia defensiva:</span></b></span><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
"Times New Roman"; mso-ansi-language:ES'> Sienten que <b>no pueden
confiar</b> en los <b>adultos</b> para <b>entender</b> su <b>realidad</b> o <b>ayudarles</b>,
ya que &quot;<i>ellos no estaban allí</i>&quot; cuando se enfrentaron a sus <b>primeros</b>
<b>conflictos</b> digitales.<span style='mso-spacerun:yes'>  </span><b>Esto</b>
y un poco de <b>terquedad</b> de <b>tu parte</b> es lo que hace que te <b>cierres</b>
un poco, tanto <b>para</b> <b>buscar</b> <b>ayuda</b> como para <b>abrirte</b>
con <b>psicólogos</b> o expertos.</span></p>

<p  style='margin-top:30.0pt;text-align:justify;background:gray'><strong><i><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
"Times New Roman";mso-ansi-language:ES'>Resumen del Perfil:</span></i></strong><i><span
lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;mso-fareast-font-family:
"Times New Roman"; mso-ansi-language:ES'> El perfil es el de un
&quot;<b>huérfano digital</b>&quot;. Es una <b>persona</b> con una <b>fragilidad
emocional</b> <b>profunda</b> derivada de haber tenido que <b>gestionar</b> <b>conflictos</b>
de <b>adultos</b> (acoso, comparación, hipersexualización) con <b>herramientas</b>
<b>psicológicas</b> de un <b>niño</b>. Su principal reto es reconstruir una
identidad que no dependa de la mirada de una pantalla.</span></i></p>

<p  style='mso-margin-top-alt:auto;margin-bottom:7.5pt;
background:white'><span lang=ES style='font-size:11.0pt;font-family:"Segoe UI",sans-serif;
mso-fareast-font-family:"Times New Roman"; mso-ansi-language:ES'></span></p>

<div >
        <nav style="margin-top:40px; padding:20px; text-align:center; border-top:1px solid #eee;"><a href="04_4_historia_personal_e_interpretacion.php">« Anterior</a> | <a href="index.php">🏠</a> | <a href="06_6_infancia_tardia_trauma_por_grooming_y_gaslighting.php">Siguiente »</a></nav>
    </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="dark-mode.js"></script>
</body>
</html>
