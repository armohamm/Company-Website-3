<?php
class Service extends Conn {
    
    private $serviceTable = "service";
    public $service = array();

    public function getServices() {
        $sql = $this->connect()->query('SELECT `service`.`serviceID`, `service`.`heading`, `service`.`text` 
        FROM `service` 
        ORDER BY `service`.`position`');
        
        while ($row = $sql->fetch()) {
            $foo = array();

            $serviceHeading=$row['heading'];
            $serviceText=$row['text'];

            array_push($foo, $serviceHeading);
            array_push($foo, utf8_encode($serviceText));

            array_push($this->service, $foo);

            unset($foo);
        }

        return $this->service;

    }

    public function addServices(string $heading, string $text) {

        $sql = $this->connect()->query('SELECT count(*) AS services FROM ' . $this->serviceTable);
        while ($row = $sql->fetch()) {
            $servicesAmount = $row['services'];
        }

        $pos = (int)$servicesAmount + 1;

        $sql = 'INSERT INTO ' . $this->serviceTable . ' (heading, text, position) VALUES (:heading, :text, :position)';
        $sql = $this->connect()->prepare($sql);
        $sql->execute(['heading' => $heading, 'text' => $text, 'position' => $pos]);

        $return = 'Palvelu ' . $heading . ' ja sen selitys ' . $text . ' on lisätty tietokantaan sijaintiin ' . $pos;

        return utf8_encode($return);

    }

    public function changeServicePositions(array $positions) {

        $count = count($positions);

        $return = '';

        for ($i=1; $i <= $count; $i++) { 
            $sql = 'UPDATE ' . $this->serviceTable . ' SET position = :pos WHERE serviceID = :serviceID';
            $sql = $this->connect()->prepare($sql);
            $sql->execute(['pos' => $i, 'serviceID' => (int)$positions[$i-1]]);

            $return = $return . ' Otsikon ' . $positions[$i - 1] . ' sijainti on nyt ' . $i . '<br>';
        }

        return utf8_encode($return);

    }

    public function editService(string $id, string $heading, string $text) {

        $text = utf8_decode($text);
        $heading = utf8_decode($heading);

        $sql = 'UPDATE '.$this->serviceTable.' SET heading = :heading, text = :text WHERE serviceID = :serviceID';
        $sql = $this->connect()->prepare($sql);
        $sql->execute(['heading'=>$heading, 'text'=>$text, 'serviceID'=>$id]);

        $return = "Uusi palvelun otsikko on ".$heading." ja uusi selitys on ".$text;
        return utf8_decode($return);

    }
    
}
// Käytetään getServices();
// $objekti = new Service();
// $array = $objekti->getServices();
// print_r($array[0][0]);


// Käytetään addServices();
// $objekti = new Service();
// echo $objekti->addServices("Testi","Testin selitys");


// Käytetään changeServicePositions();
// $array = array(1, 2, 3, 4, 5);
// $objekti = new Service;
// echo $objekti->changeServicePositions($array);
