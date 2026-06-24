<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../index.php');
    exit;
}
 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Psicológico: Personita Especial (Edición Elegante)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Perfil psicológico de una personita muy especial...</h1>
        
        

        <h2>1. El origen del miedo</h2>
        <p>Antes de ahondar en las cosas, es necesario intentar definir de dónde viene el miedo, la razón del mismo y el por qué (según mis observaciones a través de todos estos años, de tus pláticas y acciones). Siempre la constante ha sido <strong>MIEDO CRÓNICO</strong>, pero ¿de dónde viene y por qué te afecta hasta estos días?</p>
        <p>Algo que tenemos claro es que generaste una sensibilidad extrema al rechazo, que significa esto y de donde puede venir, como podrás recordar tu cuentas con un mecanismo de defensa muy interesante el cual bloquea recuerdos y vivencias.</p>


        <h1> Coming soon ...</h1>
        <p> En este espacio estaré colocando el resto, así que stay tuned (estén al pendiente ...) </p>
    </div>
</body>
</html>
