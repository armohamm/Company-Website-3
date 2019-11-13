<?php

class Conn {

    private $server = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'hss';

    protected function connect() {
        $dsn = 'mysql:host='.$this->server.';dbname='.$this->db;
        $pdo = new PDO($dsn, $this->user, $this->pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}



?>