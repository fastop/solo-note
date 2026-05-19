<?php

/**
 * Clase Database
 * Manejo de conexiones y operaciones con SQLite
 */
class Database
{
    /**
     * @var string Ruta del archivo de base de datos SQLite
     */
    private $dbPath;

    /**
     * @var PDO Instancia de PDO
     */
    private $pdo;

    /**
     * @var array Configuración de opciones de PDO
     */
    private $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    /**
     * Constructor
     * @param string $dbPath Ruta del archivo de base de datos SQLite
     */
    public function __construct($dbPath = 'database.db')
    {
        $this->dbPath = $dbPath;
        $this->connect();
    }

    /**
     * Conectar a la base de datos SQLite
     * @return void
     * @throws Exception Si hay error en la conexión
     */
    public function connect()
    {
        try {
            $this->pdo = new PDO('sqlite:' . $this->dbPath, null, null, $this->options);
            $this->pdo->exec("PRAGMA foreign_keys = ON");
        } catch (PDOException $e) {
            throw new Exception("Error al conectar a la base de datos: " . $e->getMessage());
        }
    }

    /**
     * Ejecutar una consulta SELECT
     * @param string $sql Consulta SQL
     * @param array $params Parámetros preparados
     * @return array Resultado de la consulta
     */
    public function select($sql, $params = [])
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            throw new Exception("Error en SELECT: " . $e->getMessage());
        }
    }

    /**
     * Ejecutar una consulta SELECT que retorna una sola fila
     * @param string $sql Consulta SQL
     * @param array $params Parámetros preparados
     * @return array|null Resultado de la consulta o null
     */
    public function selectOne($sql, $params = [])
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetch();
        } catch (PDOException $e) {
            throw new Exception("Error en SELECT ONE: " . $e->getMessage());
        }
    }

    /**
     * Ejecutar una consulta INSERT
     * @param string $table Nombre de la tabla
     * @param array $data Datos a insertar (columna => valor)
     * @return int ID de la fila insertada
     */
    public function insert($table, $data)
    {
        try {
            $columns = implode(', ', array_keys($data));
            $placeholders = implode(', ', array_fill(0, count($data), '?'));
            
            $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(array_values($data));
            
            return $this->pdo->lastInsertId();
        } catch (PDOException $e) {
            throw new Exception("Error en INSERT: " . $e->getMessage());
        }
    }

    /**
     * Ejecutar una consulta UPDATE
     * @param string $table Nombre de la tabla
     * @param array $data Datos a actualizar (columna => valor)
     * @param string $where Condición WHERE
     * @param array $params Parámetros preparados para WHERE
     * @return int Número de filas afectadas
     */
    public function update($table, $data, $where, $params = [])
    {
        try {
            $set = implode(', ', array_map(fn($col) => "$col = ?", array_keys($data)));
            $sql = "UPDATE $table SET $set WHERE $where";
            
            $values = array_merge(array_values($data), $params);
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($values);
            
            return $stmt->rowCount();
        } catch (PDOException $e) {
            throw new Exception("Error en UPDATE: " . $e->getMessage());
        }
    }

    /**
     * Ejecutar una consulta DELETE
     * @param string $table Nombre de la tabla
     * @param string $where Condición WHERE
     * @param array $params Parámetros preparados
     * @return int Número de filas afectadas
     */
    public function delete($table, $where, $params = [])
    {
        try {
            $sql = "DELETE FROM $table WHERE $where";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            
            return $stmt->rowCount();
        } catch (PDOException $e) {
            throw new Exception("Error en DELETE: " . $e->getMessage());
        }
    }

    /**
     * Ejecutar una consulta SQL personalizada
     * @param string $sql Consulta SQL
     * @param array $params Parámetros preparados
     * @return PDOStatement
     */
    public function execute($sql, $params = [])
    {
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            throw new Exception("Error al ejecutar consulta: " . $e->getMessage());
        }
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
        try {
            $sql = "SELECT COUNT(*) as total FROM $table";
            
            if (!empty($where)) {
                $sql .= " WHERE $where";
            }
            
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            $result = $stmt->fetch();
            
            return $result['total'] ?? 0;
        } catch (PDOException $e) {
            throw new Exception("Error en COUNT: " . $e->getMessage());
        }
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
     * Iniciar una transacción
     * @return bool
     */
    public function beginTransaction()
    {
        return $this->pdo->beginTransaction();
    }

    /**
     * Confirmar una transacción
     * @return bool
     */
    public function commit()
    {
        return $this->pdo->commit();
    }

    /**
     * Revertir una transacción
     * @return bool
     */
    public function rollback()
    {
        return $this->pdo->rollBack();
    }

    /**
     * Crear una tabla
     * @param string $table Nombre de la tabla
     * @param string $schema Esquema de la tabla
     * @return bool
     */
    public function createTable($table, $schema)
    {
        try {
            $sql = "CREATE TABLE IF NOT EXISTS $table ($schema)";
            $this->pdo->exec($sql);
            return true;
        } catch (PDOException $e) {
            throw new Exception("Error al crear tabla: " . $e->getMessage());
        }
    }

    /**
     * Eliminar una tabla
     * @param string $table Nombre de la tabla
     * @return bool
     */
    public function dropTable($table)
    {
        try {
            $sql = "DROP TABLE IF EXISTS $table";
            $this->pdo->exec($sql);
            return true;
        } catch (PDOException $e) {
            throw new Exception("Error al eliminar tabla: " . $e->getMessage());
        }
    }

    /**
     * Obtener la última consulta SQL ejecutada
     * @return string
     */
    public function getLastQuery()
    {
        return $this->pdo->lastInsertRowID();
    }

    /**
     * Cerrar la conexión
     * @return void
     */
    public function close()
    {
        $this->pdo = null;
    }

    /**
     * Destructor - Cierra la conexión automáticamente
     */
    public function __destruct()
    {
        $this->close();
    }
}
