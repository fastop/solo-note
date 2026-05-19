<?php

/**
 * Ejemplo de uso de TursoDatabase
 */

require_once 'TursoDatabase.php';
require_once 'turso-config.php';

try {
    // Inicializar la conexión a Turso
    $db = new TursoDatabase(TURSO_URL, TURSO_TOKEN);
    
    echo "✅ Conectado a Turso\n\n";

    // ==================== CREAR TABLA ====================
    echo "--- Creando tabla de posts ---\n";
    
    $schema = "
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        author TEXT NOT NULL,
        content TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    ";
    
    $db->createTable('posts', $schema);
    echo "✅ Tabla 'posts' creada\n\n";

    // ==================== INSERTAR REGISTROS ====================
    echo "--- Insertando posts ---\n";
    
    $posts = [
        ['author' => 'Juan Pérez', 'content' => 'Mi primer post en Turso'],
        ['author' => 'María García', 'content' => 'Hola a todos!'],
        ['author' => 'Carlos López', 'content' => 'Turso es genial'],
    ];

    foreach ($posts as $post) {
        $id = $db->insert('posts', $post);
        echo "✅ Post insertado con ID: $id\n";
    }
    echo "\n";

    // ==================== SELECCIONAR REGISTROS ====================
    echo "--- Obteniendo todos los posts ---\n";
    
    $allPosts = $db->select('SELECT * FROM posts ORDER BY created_at DESC');
    
    foreach ($allPosts as $post) {
        echo "- [{$post['id']}] {$post['author']}: {$post['content']}\n";
    }
    echo "\n";

    // ==================== SELECCIONAR UNO ====================
    echo "--- Buscando un post específico ---\n";
    
    $onePost = $db->selectOne('SELECT * FROM posts WHERE id = ?', [1]);
    
    if ($onePost) {
        echo "Encontrado: " . $onePost['author'] . " - " . $onePost['content'] . "\n";
    }
    echo "\n";

    // ==================== CONTAR REGISTROS ====================
    echo "--- Contando registros ---\n";
    
    $total = $db->count('posts');
    echo "Total de posts: $total\n";
    
    $countByAuthor = $db->count('posts', 'author = ?', ['Juan Pérez']);
    echo "Posts de Juan Pérez: $countByAuthor\n";
    echo "\n";

    // ==================== VERIFICAR SI EXISTE ====================
    echo "--- Verificando existencia ---\n";
    
    $exists = $db->exists('posts', 'author = ?', ['Juan Pérez']);
    echo "¿Existe post de Juan Pérez?: " . ($exists ? 'Sí' : 'No') . "\n";
    echo "\n";

    // ==================== ACTUALIZAR REGISTROS ====================
    echo "--- Actualizando un post ---\n";
    
    $updated = $db->update(
        'posts',
        ['content' => 'Mi primer post en Turso (actualizado)'],
        'id = ?',
        [1]
    );
    
    echo "Filas actualizadas: $updated\n";
    
    $updated = $db->selectOne('SELECT * FROM posts WHERE id = ?', [1]);
    echo "Contenido actualizado: " . $updated['content'] . "\n";
    echo "\n";

    // ==================== TRANSACCIONES ====================
    echo "--- Usando transacciones ---\n";
    
    try {
        $db->transaction(function($db) {
            $db->insert('posts', [
                'author' => 'Usuario Transacción 1',
                'content' => 'Dentro de una transacción'
            ]);
            
            $db->insert('posts', [
                'author' => 'Usuario Transacción 2',
                'content' => 'También dentro de la transacción'
            ]);
        });
        
        echo "✅ Transacción completada exitosamente\n";
    } catch (Exception $e) {
        echo "❌ Error en transacción: " . $e->getMessage() . "\n";
    }
    echo "\n";

    // ==================== INFORMACIÓN DE TABLAS ====================
    echo "--- Información de base de datos ---\n";
    
    $tables = $db->getTables();
    echo "Tablas existentes: " . implode(', ', $tables) . "\n";
    
    $columns = $db->getColumns('posts');
    echo "Columnas de 'posts':\n";
    foreach ($columns as $col) {
        echo "  - {$col['name']} ({$col['type']})\n";
    }
    echo "\n";

    // ==================== ESTADÍSTICAS ====================
    echo "--- Estadísticas ---\n";
    
    $stats = $db->getStats();
    foreach ($stats as $table => $info) {
        echo "$table: {$info['rows']} filas, {$info['columns']} columnas\n";
    }
    echo "\n";

    // ==================== ELIMINAR REGISTRO ====================
    echo "--- Eliminando un post ---\n";
    
    $deleted = $db->delete('posts', 'id = ?', [3]);
    echo "Filas eliminadas: $deleted\n";
    echo "\n";

    // ==================== CONTEO FINAL ====================
    echo "--- Resultado final ---\n";
    $totalFinal = $db->count('posts');
    echo "Total de posts ahora: $totalFinal\n";

} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage() . "\n";
}
