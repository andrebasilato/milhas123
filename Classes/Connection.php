<?php

define("DB_HOST", "DESKTOP-28JMMC6\MSSQLSERVER_TEST");
define("DB_USER", "sa");
define("DB_PASSWORD", "123456");
define("DB_NAME", "teste");
define("DB_DRIVER", "sqlsrv");

class Connection
{

    function __construct()
    {
    }

    public function Connection()
    {

        $pdoConfig = DB_DRIVER . ":" . "Server=" . DB_HOST . ";";
        $pdoConfig .= "Database=" . DB_NAME . ";";

        try {
            if (!isset($connection)) {
                $connection = new PDO($pdoConfig, DB_USER, DB_PASSWORD);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return $connection;
        } catch (PDOException $e) {
            $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
            $mensagem .= "\nErro: " . $e->getMessage();
            throw new Exception($mensagem);
        }
    }

    public function register($name, $cpf, $celular, $pass)
    {
        try {
            $conexao = Connection::Connection();
            $query = $conexao->prepare("INSERT INTO clientes VALUES ('$name', '$cpf', '$celular', CURRENT_TIMESTAMP, (SELECT dbo.FUN_ENCRIPTAR('$pass')))");
            $query->execute();
            $row = $query->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
        }
    }

    public function insertProd($description)
    {
        try {
            $conexao = Connection::Connection();
            $query = $conexao->prepare("INSERT INTO produtos VALUES ('$description')");
            $query->execute();
            $row = $query->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
        }
    }

    public function insertBuy($client, $prod, $qtd)
    {
        try {
            $conexao = Connection::Connection();
            $query = $conexao->prepare("INSERT INTO compras VALUES ('$client', '$prod', CURRENT_TIMESTAMP, '$qtd', 0)");
            $query->execute();
            $row = $query->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
        }
    }

    public function login($login, $pass)
    {
        try {
            $conexao = Connection::Connection();
            $query = $conexao->prepare("SELECT count(id_cliente) FROM clientes WHERE cpf = '$login' AND password = (SELECT dbo.FUN_ENCRIPTAR('$pass'))");
            $query->execute();
            $row = $query->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
        }
    }

    public function delete($id_user)
    {
        try {
            $conexao = Connection::Connection();
            $query = $conexao->prepare("DELETE FROM clientes WHERE id_cliente = " . $id_user);
            $query->execute();
        } catch (PDOException $e) {
            $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
            $mensagem .= "\nErro: " . $e->getMessage();
            throw new Exception($mensagem);
        }
    }

    public function deleteProd($id_prod)
    {
        try {
            $conexao = Connection::Connection();
            $query = $conexao->prepare("DELETE FROM produtos WHERE id_produto = " . $id_prod);
            $query->execute();
        } catch (PDOException $e) {
            $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
            $mensagem .= "\nErro: " . $e->getMessage();
            throw new Exception($mensagem);
        }
    }

    public function deleteBuy($id)
    {
        try {
            $conexao = Connection::Connection();
            $query = $conexao->prepare("UPDATE compras set deletado = 1 WHERE id_compra = " . $id);
            $query->execute();
        } catch (PDOException $e) {
            $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
            $mensagem .= "\nErro: " . $e->getMessage();
            throw new Exception($mensagem);
        }
    }

    public function update($user, $name, $cpf, $celular, $pass)
    {
        try {
            $conexao = Connection::Connection();
            $query = $conexao->prepare("UPDATE clientes 
                                    SET nome = '$name', 
                                    cpf = '$cpf', 
                                    telefone = '$celular', 
                                    password = (SELECT dbo.FUN_ENCRIPTAR('$pass')) where id_cliente = " . $user );
            $query->execute();
        } catch (PDOException $e) {
            $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
            $mensagem .= "\nErro: " . $e->getMessage();
            throw new Exception($mensagem);
        }
    }

    public function updateProd($prod, $description)
    {
        try {
            $conexao = Connection::Connection();
            $query = $conexao->prepare("UPDATE produtos 
                                    SET descricao = '$description'
                                    WHERE id_produto = " . $prod );
            $query->execute();
        } catch (PDOException $e) {
            $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
            $mensagem .= "\nErro: " . $e->getMessage();
            throw new Exception($mensagem);
        }
    }

    public function getRowByQuery($query)
    {
        try {
        $conexao = Connection::Connection();
        $query = $conexao->prepare($query);
        $query->execute();
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        return $row;
        } catch (PDOException $e) {

        }
    }

    public function getUserById($id_user)
    {
        try { 
        $conexao = Connection::Connection();
        $query = $conexao->prepare("SELECT * FROM clientes WHERE id_cliente = " . $id_user);
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        return $row;
        } catch (PDOException $e) {
        }
    }

    public function getProdById($id_prod)
    {
        try { 
        $conexao = Connection::Connection();
        $query = $conexao->prepare("SELECT * FROM produtos WHERE id_produto = " . $id_prod);
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        return $row;
        } catch (PDOException $e) {
        }
    }
}
