<?php

class Database{
    public $pdo;

    public function __construct($config){        
        $dsn ="mysql:" . http_build_query($config,"","; "); 

        $this->pdo = new PDO($dsn);
        $this->pdo->setAttribute(19, 2);
    }
        public function query($sql){
            $statement = $this->pdo->prepare($sql);

            $statement->execute();
            return $statement;
        }
}