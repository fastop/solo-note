# TursoDatabase - Clase PHP para SQLite en Turso

Clase PHP completa para manejar bases de datos SQLite alojadas en Turso.

## 🚀 Inicio Rápido

### 1. Obtener Credenciales

#### Instalar CLI de Turso (opcional)
```bash
# En Windows
choco install turso

# En macOS
brew install tursodatabase/tap/turso

# En Linux
curl -sSfL https://get.turso.tech | bash
```

#### Crear una base de datos
```bash
turso db create mi-blog
```

#### Obtener la URL
```bash
turso db show mi-blog
# Output: https://mi-blog-usuario.turso.io
```

#### Generar Token
```bash
turso db tokens create mi-blog
# Output: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9...
```

### 2. Configurar Credenciales

Edita `turso-config.php`:

```php
define('TURSO_URL', 'https://tu-database-usuario.turso.io');
define('TURSO_TOKEN', 'tu-token-aqui');
```

### 3. Usar la Clase

```php
<?php
require_once 'TursoDatabase.php';
require_once 'turso-config.php';

$db = new TursoDatabase(TURSO_URL, TURSO_TOKEN);

// Crear tabla
$db->createTable('posts', '
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    author TEXT NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
');

// Insertar
$id = $db->insert('posts', [
    'author' => 'Juan',
    'content' => 'Hola Turso!'
]);

// Seleccionar
$posts = $db->select('SELECT * FROM posts');

// Actualizar
$db->update('posts', ['content' => 'Contenido nuevo'], 'id = ?', [1]);

// Eliminar
$db->delete('posts', 'id = ?', [1]);
```

## 📚 Métodos Disponibles

### Consultas Básicas

| Método | Descripción |
|--------|------------|
| `select($sql, $params)` | Obtener múltiples registros |
| `selectOne($sql, $params)` | Obtener un registro |
| `insert($table, $data)` | Insertar registro |
| `update($table, $data, $where, $params)` | Actualizar registros |
| `delete($table, $where, $params)` | Eliminar registros |
| `execute($sql, $params)` | Ejecutar SQL personalizado |

### Utilidades

| Método | Descripción |
|--------|------------|
| `count($table, $where, $params)` | Contar registros |
| `exists($table, $where, $params)` | Verificar si existe |
| `createTable($table, $schema)` | Crear tabla |
| `dropTable($table)` | Eliminar tabla |
| `getTables()` | Obtener lista de tablas |
| `getColumns($table)` | Obtener columnas de tabla |
| `transaction(callable)` | Ejecutar transacción |
| `getStats()` | Obtener estadísticas |

## 💡 Ejemplos

### Ejemplo 1: Crear y llenar tabla

```php
$db->createTable('usuarios', '
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT NOT NULL,
    email TEXT UNIQUE NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
');

$id = $db->insert('usuarios', [
    'nombre' => 'Juan Pérez',
    'email' => 'juan@example.com'
]);

echo "Usuario insertado con ID: $id";
```

### Ejemplo 2: Búsquedas

```php
// Obtener todos
$usuarios = $db->select('SELECT * FROM usuarios');

// Obtener uno
$usuario = $db->selectOne('SELECT * FROM usuarios WHERE email = ?', ['juan@example.com']);

// Contar
$total = $db->count('usuarios');
$count = $db->count('usuarios', 'nombre LIKE ?', ['%Juan%']);
```

### Ejemplo 3: Transacciones

```php
try {
    $db->transaction(function($db) {
        $db->insert('usuarios', ['nombre' => 'User 1', 'email' => 'user1@example.com']);
        $db->insert('usuarios', ['nombre' => 'User 2', 'email' => 'user2@example.com']);
    });
    echo "✅ Transacción exitosa";
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
```

### Ejemplo 4: Batch de consultas

```php
$response = $db->executeBatch([
    [
        'sql' => 'INSERT INTO usuarios (nombre, email) VALUES (?, ?)',
        'params' => ['User A', 'usera@example.com']
    ],
    [
        'sql' => 'INSERT INTO usuarios (nombre, email) VALUES (?, ?)',
        'params' => ['User B', 'userb@example.com']
    ]
]);
```

## ⚙️ Configuración

### Timeout
```php
$db->setTimeout(60);  // Establecer timeout a 60 segundos
```

## 🔒 Seguridad

- ✅ Usa **prepared statements** para evitar SQL injection
- ✅ Todos los parámetros se escapan automáticamente
- ✅ Valida el token de Turso
- ✅ Verifica certificados SSL

## 📝 Notas Importantes

- Turso es **gratuito** hasta 9 GB de almacenamiento
- Las credenciales deben mantenerse **privadas**
- No subas `turso-config.php` a repositorios públicos
- Usa variables de entorno en producción:

```php
define('TURSO_URL', $_ENV['TURSO_URL']);
define('TURSO_TOKEN', $_ENV['TURSO_TOKEN']);
```

## 🐛 Solución de Problemas

### "Error cURL: Could not resolve host"
- Verifica tu conexión a internet
- Confirma que la URL de Turso sea correcta

### "Error en Turso (401): Invalid token"
- El token es inválido o expiró
- Genera uno nuevo: `turso db tokens create mi-blog`

### "Connection timeout"
- Aumenta el timeout: `$db->setTimeout(60)`
- Verifica tu conexión a internet

## 📄 Licencia

MIT - Libre para usar y modificar
