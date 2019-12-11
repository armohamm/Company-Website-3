<?php

class Password extends Conn {

    private $table = 'admin';
    private $adminID = 1;
    
    function checkPassword(string $pass) { // Tarkistaa salasanan tietokannasta

        $sql = $this->connect()->query('SELECT * FROM '.$this->table.' WHERE adminID='.$this->adminID);
        while ($row = $sql->fetch()) {
            $password = $row['password'];
        }

        if (md5($pass) == $password) {
            return 1;
        }
        else {
            return 0;
        }
    }

    function checkSessionPassword(string $pass) {

        $sql = $this->connect()->query('SELECT * FROM '.$this->table.' WHERE adminID='.$this->adminID);
        while ($row = $sql->fetch()) {
            $password = $row['password'];
        }

        if ($pass == $password) {
            return 1;
        }
        else {
            return 0;
        }
    }

    function getPassword() { // Hakee salasanan tietokannasta

        $sql = $this->connect()->query('SELECT * FROM '.$this->table.' WHERE adminID='.$this->adminID);
        while ($row = $sql->fetch()) {
            $password = $row['password'];
        }

        return $password;
    }

    function changePassword(string $pass0, string $pass1, string $pass2) { // Vaihtaa salasanan

        $sql = $this->connect()->query('SELECT * FROM '.$this->table.' WHERE adminID='.$this->adminID);
        while ($row = $sql->fetch()) {
            $password = $row['password'];
        }

        if (md5($pass0) == $password) {
            if ($pass1 == $pass2) {

                $pass = md5($pass1);

                $sql = 'UPDATE '.$this->table.' SET password = :pass WHERE adminID = :adminID';
                $sql = $this->connect()->prepare($sql);
                $sql->execute(['pass'=>$pass, 'adminID'=>$this->adminID]);

                return 2;
            }
            else {
                return 1;
            }
        }
        else {
            return 0;
        }
    }
}
