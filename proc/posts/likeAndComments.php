<?php
session_start();

require_once '../Database.php';


// Inicializar la base de datos
$db = new Database('../mi_blog.db');

 
    $opc = $_POST["opc"];//1;//

    switch($opc) {
        case 1:
            setLikey();
            break;
        case 2:
            addComment();
            break;
        case 3:
            loadComments();
            break;
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
             $deleted = $db->delete('likes', 'id_user = ? AND id_post = ?', [$user, $sid]);
            // echo "0";     
        }

    
    $sql = "SELECT count(id_likes) AS CC FROM likes WHERE id_post = ".$sid; //Contamos TODOS los LIKES de ese POST
    $allPosts = $db->select($sql);

    // echo $allPosts[0]["CC"];
    echo json_encode($allPosts[0]);

      loggr($_SESSION['user_id'], $_SESSION['nick'],"Set Like");
    
}

 

function addComment(){
    global $db;

    $user = $_SESSION["user_id"];  
    $sid  =  $_POST["sid"]; //ID de comment
    $contentComment = $_POST["contentComment"];
    $titleComment   = $_POST["txtTitleComment"];

    //Insertar un nuevo post
     $newComment = [
         'id_comment' => null,
         'id_user' => $user,
         'id_post' => $sid,
         'comment' => $contentComment,
         'created_at' => date('Y-m-d H:i:s'),         
         'comment_title' => $titleComment
     ];  

    $SX = $db->insert('comments', $newComment);

    $SS = $db->count('comments', 'id_post = ?', [$sid]);
    echo json_encode(['error' => $SS, 'message' => 'Comentario agregado con éxito']);

    loggr($_SESSION['user_id'], $_SESSION['nick'],"Add Comment");

}



    function loadComments() {
        global $db;

        $sid  =  $_POST["sid"]; //ID de comment

        $sql = "SELECT CM.id_comment, CM.comment, CM.created_at, CM.comment_title, UX.name AS author FROM comments CM
                LEFT JOIN users AS UX ON CM.id_user = UX.id_user 
                WHERE CM.id_post = ? ORDER BY created_at DESC";

        $allComments = $db->select($sql, [$sid]);
    
      echo json_encode($allComments);

        loggr($_SESSION['user_id'], $_SESSION['nick'],"Load Comments");
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