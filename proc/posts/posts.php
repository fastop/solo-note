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
        default:
            echo json_encode(['error' => 'Opción no válida']);
    }
    


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

}