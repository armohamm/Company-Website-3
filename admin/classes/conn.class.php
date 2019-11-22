<?php

class Conn {

    private $server = 'localhost'; // Palvelimen osoite
    private $user = 'root'; // Käyttäjänimi
    private $pass = ''; // Salasana
    private $db = 'hss'; // Tietokanta

    protected function connect() {
        $dsn = 'mysql:host='.$this->server.';dbname='.$this->db;
        $pdo = new PDO($dsn, $this->user, $this->pass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        return $pdo;
    }
}



?>