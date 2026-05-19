<?php


require_once '../Database.php';


// Inicializar la base de datos
$db = new Database('../mi_blog.db');

 
    $opc = 1; //$_POST["opc"];

    switch($opc) {
        case 1:
            checkUser();
            break;
//        case 2:
//            insertPost();
//            break;
//        case 3:
//            deletePost();
//            break;
        default:
            echo json_encode(['error' => 'Opción no válida']);
    }
    



    
function checkUser(){
 global $db;
    //Revisamos si el usuario existe en la base de datos
    $usr   = "memaster";// $_POST['uxr'] ?? '';
    $passw = "123456798";// $_POST['pass'] ?? '';       

        // Obtener todos los posts
    $sql = "SELECT id_user, name, email, passw FROM users WHERE name= ? OR email= ?";
    $allPosts = $db->selectOne($sql, [$usr]);
 
 
    if($allPosts){ //Si el usuario existe...

       if (password_verify($passw, $allPosts['passw'])) {//El que viene
            echo 'Password is valid!';

        } else {            
            $ARR["erro"] = true;
            $ARR["msg"] = "Contraseña invalida, verifiquela por favor ";// "El usuario no existe"
        }    
    
    } else { // Si no existe...

      $ARR["erro"] = true;
      $ARR["msg"] = "Las credenciales no son correctas, verifiquelas por favor ";// "El usuario no existe"
    }


    echo json_encode($allPosts);  
    echo json_encode($ARR);
 
/* 
    echo password_hash("Perres", PASSWORD_DEFAULT);
    echo "<br>";


    // $hash = '$2y$12$4Umg0rCJwMswRw/l.SwHvuQV01coP0eWmGzd61QH2RvAOMANUBGC.';//El de la BD
    $hash = '$2y$12$RKcC6uCDEGdWxUM7wJ84wuLZnzUjUYIgNasTkVHs9gz3jU3r0IRbK';


    if (password_verify('rasmuslerdorf', $hash)) {//El que viene
        echo 'Password is valid!';
    } else {
        echo 'Invalid password.';
    }
 */









}
