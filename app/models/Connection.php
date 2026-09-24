<?php

namespace app\models;

abstract class Connection
{
    private $dbName = 'mysql:host=localhost;dbname=cursomvc';
    private $user = 'app_user';
    private $pass = 'sua_senha';

    protected function connect()
    {
        try {
            $conn = new \PDO($this->dbName, $this->user, $this->pass);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (\PDOException $e) {
            die("Erro de conexão com o banco de dados: " . $e->getMessage());
        }
    }
}