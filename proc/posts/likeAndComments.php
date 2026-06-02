<?php
session_start();

require_once '../Database.php';


// Inicializar la base de datos
$db = new Database('../mi_blog.db');

 
    $opc = 1;//$_POST["opc"];

    switch($opc) {
        case 1:
            setLikey();
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
    

/* 
function getAllPosts() {
   global $db;

    // Obtener todos los posts
    
     // $sql = "SELECT id, author, title, content, created_at, date, time, thumb, status FROM posts WHERE status = 0 ORDER BY created_at DESC";

    $sql ="SELECT id, UX.name AS author, title, content, created_at, date, time, thumb, PST.status FROM posts PST
            LEFT JOIN users AS UX ON PST.author = UX.id_user 
            WHERE PST.status = 0 ORDER BY created_at DESC";

    $allPosts = $db->select($sql);
 
   echo json_encode($allPosts);
}
 */


function setLikey() {
    global $db;

    $user = $_SESSION["user_id"];  
    $sid =  $_POST["sid"];

    $sql = "SELECT count(id_likes) AS CC FROM likes WHERE id_user = ".$user." AND id_post = ".$sid;
    $allPosts = $db->select($sql);

    
        if ($allPosts[0]["CC"] == 0) {
        //Insertar un nuevo post
            $newLike = [
                'id_likes' => null,
                'id_user' => $user,
                'likes' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'id_post' => $sid
            ];  

           $db->insert('likes', $newLike);
            

        } else { 
            
            // $sql = "DELETE FROM likes WHERE id_user = ".$user." AND id_post = ".$sid;
            // $db->delete($sql);
            // echo "0";     
        }

    
    $sql = "SELECT count(id_likes) AS CC FROM likes WHERE id_post = ".$sid; //Contamos TODOS los LIKES de ese POST
    $allPosts = $db->select($sql);

    // echo $allPosts[0]["CC"];
    echo json_encode($allPosts[0]);
    
}

 