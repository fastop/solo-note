<?php


require_once '../proc/Database.php';

$db = new Database('../proc/mi_blog.db'); //SOLO para PSY xD

     
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


    function show(){
        echo "LOL";
    }
