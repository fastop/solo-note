<?php
session_start();

require_once '../Database.php';


// Inicializar la base de datos
$db = new Database('../mi_blog.db');

 
    $opc = $_POST["opc"];

    switch($opc) {
        case 1:
            getAllPosts();
            break;
        case 2:
            insertPost();
            break;
        case 3:
            deletePost();
            break;
        case 4:
            modPost();
            break;
        case 5:
            getAllMyPosts();
            break;
        case 6:
            getAllPostsOf();
            break;
        case 7:
            getMyShareds();
            break;
        case 8:
            getSharedAuthor();
            break;              
        default:
            echo json_encode(['error' => 'Opción no válida']);
    }
    


function getAllPosts() {
   global $db;

    // Obtener todos los posts
    
     // $sql = "SELECT id, author, title, content, created_at, date, time, thumb, status FROM posts WHERE status = 0 ORDER BY created_at DESC";

    //  $sql ="SELECT id, UX.name AS author, title, content, created_at, date, time, thumb, PST.status FROM posts PST
    //         LEFT JOIN users AS UX ON PST.author = UX.id_user 
    //         WHERE PST.status = 0 ORDER BY created_at DESC";


    $sql = "SELECT id, UX.name AS author, title, content, created_at, date, time, thumb, PST.status, 
                (SELECT count(id_likes) AS Likey FROM likes WHERE id_post = PST.id) AS likey,
                (SELECT count(id_comment) AS Comment FROM comments WHERE id_post = PST.id) AS comments             
            FROM posts PST  
                LEFT JOIN users AS UX ON PST.author = UX.id_user 
                WHERE PST.status = 0 ORDER BY created_at DESC";

    $allPosts = $db->select($sql);
 
   echo json_encode($allPosts);
}


function getAllMyPosts() {
   global $db; 

   $uxr = $_SESSION["user_id"];

    $sql = "SELECT id, UX.name AS author, title, content, created_at, date, time, thumb, PST.status, 
                (SELECT count(id_likes) AS Likey FROM likes WHERE id_post = PST.id) AS likey,
                (SELECT count(id_comment) AS Comment FROM comments WHERE id_post = PST.id) AS comments             
            FROM posts PST  
                LEFT JOIN users AS UX ON PST.author = UX.id_user 
                WHERE PST.status = 0  AND author = $uxr ORDER BY created_at DESC";

    $allPosts = $db->select($sql);
 
   echo json_encode($allPosts);
}


// EL PEPE!!!
function getAllPostsOf() {

   global $db; 

   $PEPE = $_POST["PP"];
   $ME = $_SESSION["user_id"];

   $sql = "SELECT id_user FROM shared WHERE shared_code =".$PEPE." AND id_shared_user=".$ME;

    $allPosts = $db->select($sql);

    if(count($allPosts)>0) {
        
            $UXR = $allPosts[0]["id_user"];

            $sql = "SELECT id, UX.name AS author, title, content, created_at, date, time, thumb, PST.status, 
                        (SELECT count(id_likes) AS Likey FROM likes WHERE id_post = PST.id) AS likey,
                        (SELECT count(id_comment) AS Comment FROM comments WHERE id_post = PST.id) AS comments             
                    FROM posts PST  
                        LEFT JOIN users AS UX ON PST.author = UX.id_user 
                        WHERE PST.status = 0  AND author = $UXR ORDER BY created_at DESC";

            $allPosts = $db->select($sql);
            echo json_encode($allPosts);
    }
    else
      echo json_encode(['error' => 1, 'msg' => "Esta publicación no ha sido compartida contigo o no existe"]);




}




function insertPost() {
    global $db;

    $author = $_SESSION["user_id"]; //"MeMaster";//Lo deberiamos de tomar de la session
    $post = $_POST["post"];//Aqui deberiamos de recibir el post desde el cliente, pero por ahora lo vamos a hardcodear

   //Insertar un nuevo post
    $newPost = [
        'id' => null,
        'author' => $author,
        'title' => $post["title"],
        'content'=> $post["content"],
        'created_at' => date('Y-m-d H:i:s'),
        'date'   => $post["date"],
        'time'   => $post["time"],
    ];  

    $postId = $db->insert('posts', $newPost);
    echo "$postId";

}

function deletePost() {
    global $db;
    $postId = $_POST["sid"]; //ID

    $updated = $db->update('posts', ['status' => '1'], 'id = ?', [$postId]);
     echo json_encode(['success' => true]);
}

function deletePostHard() {
    global $db;

    $postId = $_POST["sid"];    
    $db->delete('posts','id =?', [$postId]); // Eliminar el post de la base de datos
    echo json_encode(['success' => true]);
}   


function modPost(){

    global $db;

     $postId = $_POST["sid"]; //ID
     $title = $_POST["txtTitleMOD"];
     $content = $_POST["contentMOD"];

     $updated = $db->update('posts', ['content' => $content, 'title' => $title], 'id = ?', [$postId]);
     echo json_encode(['error' => 0, 'msg' => "Post actualizado correctamente!"]);

}





function getMyShareds(){  
    global $db;

    $sid = $_SESSION["user_id"];

        $sql = "SELECT shared_code, SHA.id_user, UX.name, UX.nick FROM shared SHA
                    LEFT JOIN users AS UX ON SHA.id_user = UX.id_user
                WHERE id_shared_user = ".$sid;

    $allShared = $db->select($sql);
 
   echo json_encode($allShared);
    
}









function getSharedAuthor(){
    global $db;

    $code = $_POST["PP"];
    $sid = $_SESSION["user_id"];

        $sql = "SELECT shared_code, SHA.id_user, UX.nick AS nick FROM shared SHA
                LEFT JOIN users AS UX ON SHA.id_user = UX.id_user
                WHERE shared_code = ".$code." AND id_shared_user=".$sid;

    $allShared = $db->select($sql);
   echo json_encode($allShared);
}