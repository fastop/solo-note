<?php

/**
 * Clase TursoDatabase
 * Manejo de conexiones y operaciones con SQLite a través de Turso
 */
class TursoDatabase
{
    /**
     * @var string URL de la base de datos en Turso
     */
    private $url;

    /**
     * @var string Token de autenticación de Turso
     */
    private $authToken;

    /**
     * @var int Timeout para las peticiones
     */
    private $timeout = 30;

    /**
     * Constructor
     * @param string $url URL de la base de datos (ej: https://mi-db-usuario.turso.io)
     * @param string $authToken Token de autenticación
     * @throws Exception Si no se proporcionan credenciales
     */
    public function __construct($url, $authToken)
    {
        if (empty($url) || empty($authToken)) {
            throw new Exception("Se requieren URL y token de autenticación para Turso");
        }

        $this->url = rtrim($url, '/');
        $this->authToken = $authToken;

        // Verificar conexión
        $this->testConnection();
    }

    /**
     * Probar la conexión a Turso
     * @return void
     * @throws Exception Si no se puede conectar
     */
    public function testConnection()
    {
        try {
            $this->execute('SELECT 1 as test');
        } catch (Exception $e) {
            throw new Exception("No se pudo conectar a Turso: " . $e->getMessage());
        }
    }

    /**
     * Hacer una petición HTTP a la API de Turso
     * @param array $data Datos a enviar
     * @return array Respuesta decodificada
     * @throws Exception Si hay error en la petición
     */
    private function request($data)
    {
        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => $this->timeout,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $this->authToken,
                'User-Agent: TursoDatabase-PHP/1.0'
            ],
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_SSL_VERIFYHOST => 2
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlError = curl_error($ch);
        curl_close($ch);

        if ($curlError) {
            throw new Exception("Error cURL: " . $curlError);
        }

        if ($httpCode !== 200) {
            $errorDetails = json_decode($response, true);
            $errorMsg = $errorDetails['error'] ?? $response ?? "Error HTTP $httpCode";
            throw new Exception("Error en Turso ($httpCode): " . $errorMsg);
        }

        $decoded = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception("Error al decodificar respuesta JSON: " . json_last_error_msg());
        }

        return $decoded;
    }

    /**
     * Ejecutar una consulta SQL
     * @param string $sql Consulta SQL
     * @param array $params Parámetros preparados
     * @return array Respuesta de la API
     */
    public function execute($sql, $params = [])
    {
        $data = [
            'statements' => [
                [
                    'sql' => $sql,
                    'args' => $params
                ]
            ]
        ];

        return $this->request($data);
    }

    /**
     * Ejecutar múltiples consultas en una sola petición
     * @param array $statements Array de [sql, params]
     * @return array Respuesta de la API
     */
    public function executeBatch($statements)
    {
        $data = ['statements' => []];

        foreach ($statements as $stmt) {
            $data['statements'][] = [
                'sql' => $stmt['sql'] ?? $stmt[0],
                'args' => $stmt['params'] ?? $stmt[1] ?? []
            ];
        }

        return $this->request($data);
    }

    /**
     * Ejecutar un SELECT
     * @param string $sql Consulta SQL
     * @param array $params Parámetros preparados
     * @return array Array de resultados
     */
    public function select($sql, $params = [])
    {
        $response = $this->execute($sql, $params);
        
        if (isset($response['results'][0]['rows'])) {
            return $response['results'][0]['rows'];
        }

        return [];
    }

    /**
     * Ejecutar un SELECT que retorna una sola fila
     * @param string $sql Consulta SQL
     * @param array $params Parámetros preparados
     * @return array|null Una fila o null
     */
    public function selectOne($sql, $params = [])
    {
        $results = $this->select($sql, $params);
        return !empty($results) ? $results[0] : null;
    }

    /**
     * Insertar un registro
     * @param string $table Nombre de la tabla
     * @param array $data Datos a insertar (columna => valor)
     * @return int ID del registro insertado
     */
    public function insert($table, $data)
    {
        $columns = array_keys($data);
        $placeholders = array_fill(0, count($data), '?');
        
        $columnStr = implode(', ', $columns);
        $placeholderStr = implode(', ', $placeholders);
        
        $sql = "INSERT INTO $table ($columnStr) VALUES ($placeholderStr)";
        $params = array_values($data);

        $this->execute($sql, $params);

        // Obtener el último ID insertado
        $result = $this->selectOne('SELECT last_insert_rowid() as id');
        return $result['id'] ?? 0;
    }

    /**
     * Actualizar registros
     * @param string $table Nombre de la tabla
     * @param array $data Datos a actualizar (columna => valor)
     * @param string $where Condición WHERE
     * @param array $params Parámetros para WHERE
     * @return int Número de filas afectadas
     */
    public function update($table, $data, $where, $params = [])
    {
        $sets = array_map(fn($col) => "$col = ?", array_keys($data));
        $setStr = implode(', ', $sets);
        
        $values = array_merge(array_values($data), $params);
        $sql = "UPDATE $table SET $setStr WHERE $where";

        $response = $this->execute($sql, $values);
        
        return $response['results'][0]['affected_rows'] ?? 0;
    }

    /**
     * Eliminar registros
     * @param string $table Nombre de la tabla
     * @param string $where Condición WHERE
     * @param array $params Parámetros preparados
     * @return int Número de filas eliminadas
     */
    public function delete($table, $where, $params = [])
    {
        $sql = "DELETE FROM $table WHERE $where";
        $response = $this->execute($sql, $params);
        
        return $response['results'][0]['affected_rows'] ?? 0;
    }

    /**
     * Contar registros en una tabla
     * @param string $table Nombre de la tabla
     * @param string $where Condición WHERE (opcional)
     * @param array $params Parámetros preparados
     * @return int Número de registros
     */
    public function count($table, $where = '', $params = [])
    {
        $sql = "SELECT COUNT(*) as total FROM $table";
        
        if (!empty($where)) {
            $sql .= " WHERE $where";
        }

        $result = $this->selectOne($sql, $params);
        return $result['total'] ?? 0;
    }

    /**
     * Verificar si existe un registro
     * @param string $table Nombre de la tabla
     * @param string $where Condición WHERE
     * @param array $params Parámetros preparados
     * @return bool
     */
    public function exists($table, $where, $params = [])
    {
        return $this->count($table, $where, $params) > 0;
    }

    /**
     * Crear una tabla
     * @param string $table Nombre de la tabla
     * @param string $schema Esquema de la tabla
     * @return void
     */
    public function createTable($table, $schema)
    {
        $sql = "CREATE TABLE IF NOT EXISTS $table ($schema)";
        $this->execute($sql);
    }

    /**
     * Eliminar una tabla
     * @param string $table Nombre de la tabla
     * @return void
     */
    public function dropTable($table)
    {
        $sql = "DROP TABLE IF EXISTS $table";
        $this->execute($sql);
    }

    /**
     * Obtener información de las tablas
     * @return array Lista de tablas
     */
    public function getTables()
    {
        $sql = "SELECT name FROM sqlite_master WHERE type='table' AND name NOT LIKE 'sqlite_%'";
        $results = $this->select($sql);
        
        return array_map(fn($row) => $row['name'], $results);
    }

    /**
     * Obtener información de las columnas de una tabla
     * @param string $table Nombre de la tabla
     * @return array Información de las columnas
     */
    public function getColumns($table)
    {
        $sql = "PRAGMA table_info($table)";
        return $this->select($sql);
    }

    /**
     * Ejecutar una transacción
     * @param callable $callback Función con las operaciones
     * @return mixed Resultado de la callback
     * @throws Exception Si hay error en la transacción
     */
    public function transaction(callable $callback)
    {
        try {
            $this->execute('BEGIN TRANSACTION');
            
            $result = $callback($this);
            
            $this->execute('COMMIT');
            
            return $result;
        } catch (Exception $e) {
            $this->execute('ROLLBACK');
            throw new Exception("Error en transacción: " . $e->getMessage());
        }
    }

    /**
     * Obtener estadísticas de la base de datos
     * @return array Estadísticas
     */
    public function getStats()
    {
        $tables = $this->getTables();
        $stats = [];

        foreach ($tables as $table) {
            $count = $this->count($table);
            $stats[$table] = [
                'rows' => $count,
                'columns' => count($this->getColumns($table))
            ];
        }

        return $stats;
    }

    /**
     * Configurar timeout
     * @param int $seconds Segundos
     * @return void
     */
    public function setTimeout($seconds)
    {
        $this->timeout = max(1, intval($seconds));
    }

    /**
     * Destructor
     */
    public function __destruct()
    {
        // La conexión se cierra automáticamente
    }
}
