<?php

/**
 * Ejemplo de uso de la clase Database
 */

require_once 'Database.php';

// Inicializar la base de datos
$db = new Database('mi_blog.db');

// Crear tabla de posts (ejemplo)
$schema = "
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    author TEXT NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
";
$db->createTable('posts', $schema);

// INSERTAR un registro
$newPost = [
    'id' => null,
    'author' => 'Juan Pérez',
    'content'=> 'Este es mi primer post',
    'date'   => 'lunes 23 de abril 1993',
    'time'   => '6:55 p.m.',    
    'comment'=> 'Este esta con madre!'
];
$postId = $db->insert('posts', $newPost);
echo "Post insertado con ID: $postId\n";

// SELECCIONAR todos los registros
$allPosts = $db->select('SELECT * FROM posts');
echo "Total de posts: " . count($allPosts) . "\n";

// SELECCIONAR un registro específico
$post = $db->selectOne('SELECT * FROM posts WHERE id = ?', [1]);
if ($post) {
    echo "Post encontrado: " . $post['author'] . " - " . $post['content'] . "\n";
}

// ACTUALIZAR un registro
$updated = $db->update('posts', ['content' => 'Contenido actualizado'], 'id = ?', [1]);
echo "Filas actualizadas: $updated\n";

// CONTAR registros
$total = $db->count('posts');
echo "Total de posts en la tabla: $total\n";

// VERIFICAR si existe un registro
$exists = $db->exists('posts', 'author = ?', ['Juan Pérez']);
echo "¿Existe post de Juan Pérez?: " . ($exists ? 'Sí' : 'No') . "\n";

// ELIMINAR un registro
$deleted = $db->delete('posts', 'id = ?', [1]);
echo "Filas eliminadas: $deleted\n";

// TRANSACCIONES
try {
    $db->beginTransaction();
    
    // $db->insert('posts', ['author' => 'Usuario 1', 'content' => 'Contenido 1']);
    // $db->insert('posts', ['author' => 'Usuario 2', 'content' => 'Contenido 2']);

      $db->insert('posts', $newPost);

    
    $db->commit();
    echo "Transacción completada\n";
} catch (Exception $e) {
    $db->rollback();
    echo "Error en transacción: " . $e->getMessage() . "\n";
}

// Cerrar conexión (opcional, se cierra automáticamente)
$db->close();
