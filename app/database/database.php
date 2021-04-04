<?php

class dbh { 
    private $host = "localhost";
    private $username = "root";
    private $pass = "";
    private $databasename = "dbheavy2";
    private $stmt;
    private $mapper;

    public function connect() {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname="  . $this->databasename;
            $this->mapper = new PDO($dsn, $this->username, $this->pass);
            $this->mapper->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->mapper;
        } catch (PDOException $th) {
            die("Could not connect to the database" . $th->getMessage());
        }
    }

    public function querystring($sql) { 
        return $this->stmt = $this->connect()->prepare($sql);
    }
    public function encrypt($dataencrypt) { 
        return password_hash($dataencrypt, PASSWORD_DEFAULT);
    }
    public function bind($param, $val, $type = null) {
        if(is_null($type)) {
            switch(true) {
                case $type == 1:
                    $type = PDO::PARAM_INT;;
                break;
                case $type == 2:
                    $type = PDO::PARAM_BOOL;
                break;
                case $type == 3:
                    $type = PDO::PARAM_NULL;
                break;
                default:
                $type = PDO::PARAM_STR;
            }
        }
        return $this->stmt->bindParam($param, $val, $type);
    } 
    public function execution() 
    {
        return $this->stmt->execute();
    }
}