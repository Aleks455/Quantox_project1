<?php

namespace Classes\Main;

class Dbh 
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "newsportal";

    
    protected function connect() 
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;

        try {
            $pdo = new \PDO($dsn, $this->user, $this->password);
            $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
            return $pdo;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }  
    }
}