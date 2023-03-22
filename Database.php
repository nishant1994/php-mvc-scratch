<?php

class Database{
    public $conn;
    public function __construct($config, $username = 'root', $password= '')
    {
        $dsn = 'mysql:'.http_build_query($config, '', ';');
        $this -> conn = new PDO($dsn, $username, $password);
    }

    public function query($query, $params = []){
        $statement = $this -> conn -> prepare($query);
        $statement -> execute($params);
        return $statement -> fetchAll(PDO::FETCH_ASSOC);
    }
}

?>