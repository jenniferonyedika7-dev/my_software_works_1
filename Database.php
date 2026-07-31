<?php

class Database
{
    private $host = "localhost";
    private $dbname = "shop_db";
    private $username = "root";
    private $password = "";

    public function connect()
    {
        try {

            $pdo = new PDO(
                "mysql:host={$this->host};dbname={$this->dbname}",
                $this->username,
                $this->password
            );

            $pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
            var_dump('Database connection successful');
            return $pdo;
        } catch (PDOException $e) {
            var_dump($e->getMessage());
            die("Connection Failed: " . $e->getMessage());
        }
    }
}