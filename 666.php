<?php
session_start();

    require_once 'proc/Database.php';
    // Inicializar la base de datos
    $db = new Database('proc/mi_blog.db');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASITER</title>
        <link rel="stylesheet" href="style.css">
        <style>
            body {color:white;}
        </style>
</head>
<body>

<table  border="1">
    <tr><td>id_logs</td><td>type</td><td>date</td><td>user</td></tr>

<?php

   $sql = "SELECT id_logs, type, date, user FROM logs ORDER BY id_logs ASC";
    $allPosts = $db->select($sql);
 
     //echo json_encode($allPosts);
     

     foreach($allPosts AS $post) {
        echo "<tr><td>".$post["id_logs"]."</td><td>".$post["type"]."</td><td>".$post["date"]."</td><td>".$post["user"]."</td></tr>" ;
         
     }



?>

 <tr>
    <td></td>
 </tr>


</table>


</body>
</html>