<?php
class Client {

    public function index() {
        
        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";

        try {
            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            $clients = PostgresConnection::selectAll("SELECT * FROM clients");
            return $clients;
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
        finally {
            
            PostgresConnection::close();
        }
        
    }

    public function show($clientId) {
        
        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";

        try {
            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            $clients = PostgresConnection::selectById("SELECT * FROM clients WHERE id = $clientId");
            return $clients;
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
        finally {
            
            PostgresConnection::close();
        }
        
    }

    public function store($data) {

        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";

        try {

            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            $sql = "INSERT INTO clients(firstname, lastname, birth, address) VALUES(:firstname, :lastname, :birth, :address)";
            PostgresConnection::insert($sql, $data);

            header("Location: " . BASE_DIR . "client/index");
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
        finally {
            
            PostgresConnection::close();
        }
    }

    public function update($clientId, $data) {
        
        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";

        try {
            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            $clients = PostgresConnection::update("UPDATE clients SET firstname=:firstname, lastname=:lastname, birth=:birth, address=:address WHERE id = $clientId", $data);
            
            header("Location: " . BASE_DIR . "client");
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
        finally {
            
            PostgresConnection::close();
        }
        
    }

    public function delete($clientId) {
        
        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";

        try {
            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            $clients = PostgresConnection::delete("DELETE FROM clients WHERE id = $clientId");
            
            header("Location: " . BASE_DIR . "client");
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
        finally {
            
            PostgresConnection::close();
        }
        
    }
}