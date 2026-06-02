<?php

session_start();

require_once '../Database.php';


// Inicializar la base de datos
$db = new Database('../mi_blog.db');

 
    $opc = $_POST["opc"];

    switch($opc) {
        case 1:
            checkUser();
            break;
         case 2:
            logout();
            break;
//        case 3:
//            deletePost();
//            break;
        default:
            echo json_encode(['error' => 'Opción no válida']);
    }
    



    
function checkUser(){
 global $db;
    //Revisamos si el usuario existe en la base de datos
    $usr   = $_POST['username'] ?? '';  // "memaster"; //    // "memaster";
    $passw = $_POST['password'] ?? '';  // "123456789"; //  // "123456798";

    // htmlspecialchars($username, ENT_QUOTES, 'UTF-8')
    // "Usuario o contraseña incorrectos."

        // Obtener todos los posts
        $sql = "SELECT id_user, name, email, passw FROM users WHERE name= ? OR email= ?";
        $uData = $db->selectOne($sql, [$usr]);
 
         $ARR["erro"] = false;
        
        if($uData){ //Si el usuario existe...

            if (password_verify($passw, $uData['passw'])) {//El que viene
        
                 // $ARR["msg"] = "Password is valid!";// "El usuario no existe"
                 $ARR["msg"] = "posting.php";// "El usuario no existe"
                
                 $_SESSION['username'] = $uData['name'];
                 $_SESSION['user_id'] = $uData['id_user'];

            } else {            
                $ARR["erro"] = true;
                $ARR["msg"] = "Contraseña inválida, verifíquela  por favor ";// "El usuario no existe"
            }    
        
        } else { // Si no existe...

        $ARR["erro"] = true;
        $ARR["msg"] = "Las credenciales no son correctas, verifíquela por favor ";// "El usuario no existe"
        }


        // echo json_encode($uData);  
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



    function logout(){
        session_destroy();
        echo json_encode(["msg" => "index.php"]);
    }   