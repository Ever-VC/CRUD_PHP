<?php 

require_once "DatabaseConnection.php";

class PostgresConnection implements DatabaseConnection {
    
    private static $connection;

    public static function connect($host, $port, $dbname, $user, $pass) : PDO {
        try {
            # Data Source Name
            $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
            # Realizamos la conexión
            self::$connection = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            return self::$connection;

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function selectAll($sql) {

        $stmt = self::$connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function selectById($sql) {

        $stmt = self::$connection->prepare($sql);
        $stmt->execute();
 
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function insert($sql, $data) {
        $stmt = self::$connection->prepare($sql);

        $stmt->execute(
            array(
                ':firstname' => $data["firstname"],
                ':lastname' => $data["lastname"],
                ':birth' => $data["birth"],
                ':address' => $data["address"]
            )
        );
    }

    public static function update($sql, $data) {
        $stmt = self::$connection->prepare($sql);
        $stmt->execute(
            array(
                ':firstname' => $data["firstname"],
                ':lastname' => $data["lastname"],
                ':birth' => $data["birth"],
                ':address' => $data["address"]
            )
        );
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function delete($sql) {
        $stmt = self::$connection->prepare($sql);
        $stmt->execute();
    }

    public static function close() {
        self::$connection = null;
    }
}