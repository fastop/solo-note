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
        case 3:
            changePasword();
            break;
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
            $sql = "SELECT id_user, name, email, passw, nick FROM users WHERE name= ? OR email= ?";
            $uData = $db->selectOne($sql, [$usr]);
    
            $ARR["erro"] = false;
            
            if($uData){ //Si el usuario existe...

                if (password_verify($passw, $uData['passw'])) {//El que viene
            
                    // $ARR["msg"] = "Password is valid!";// "El usuario no existe"
                    $ARR["msg"] = "posting.php";// "El usuario no existe"
                    
                    $_SESSION['username'] = $uData['name'];
                    $_SESSION['user_id'] = $uData['id_user'];
                    $_SESSION['nick'] = $uData['nick'];

                    loggr($uData['id_user'], $uData['nick'],"login");

                } else {            
                    $ARR["erro"] = true;
                    $ARR["msg"] = "Contraseña inválida, verifíquela  por favor ";// "El usuario no existe"
                    loggr(0, $usr,"Contraseña Invalida");
                }    
            
            } else { // Si no existe...

             $ARR["erro"] = true;
             $ARR["msg"] = "Las credenciales no son correctas, verifíquela por favor ";// "El usuario no existe"

              loggr(0, $usr ,"Credencial Incorrecta");
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
        loggr($_SESSION['user_id'], $_SESSION['nick'],"logout");
        echo json_encode(["msg" => "index.php"]);
    }   


    //Funcion para cambiar la contraseña
    function changePasword(){
        global $db;

        $sid = $_SESSION["user_id"];
        $psw = password_hash($_POST["txtPW1"], PASSWORD_DEFAULT);

        $updated = $db->update('users', ['passw' => $psw], 'id_user = ?', [$sid]);

        echo json_encode(['erro' => '0']);

        loggr($_SESSION['user_id'], $_SESSION['nick'],"password");

    }

    

    /** 
     *   @brief Metodo para 
     *     
     *   @param id_user id de usuario (int)
     *   @param user	Nick del usuario por comodidad (string)
     *   @param type	Tipo de movimiento (login, logout, passw) (string)
     *  
     */
    function loggr($id_user, $user, $type){
        global $db;
  
            $newLog = [
                'id_logs' => null,
                'type' => $type,
                'date' => date('Y-m-d H:i:s'),
                'id_user' => $id_user,                
                'user' => $user
            ];  

           $db->insert('logs', $newLog); 

    }