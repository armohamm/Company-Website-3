<?php

class Heading extends Conn {

    private $id = 1;
    private $table = 'text-frontpage';
    private $heading;

    public function getHeading() {
        $sql = $this->connect()->query("SELECT * FROM text-frontpage");
        $result = $sql->fetch();
        return $result;
    }

}