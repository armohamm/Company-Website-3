<?php

class Conn {

    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "hss";

    private $connection;


    public function connect() {
        try {
            $this->connection = new PDO("mysql:host=".$this->server.";dbname=".$this->db, $this->user, $this->password);
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        catch(PDOException $e)
            {
            echo $e->getMessage();
            }
    }
}



?>