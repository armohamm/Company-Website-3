<?php
class Service extends Conn {

    private $serviceTable = "hss_service";
    public $service = array();

    public function getServices() { // Hakee kaikki palvelut ja niiden selitykset tietokannasta positionin mukaan
        $sql = $this->connect()->query('SELECT `hss_service`.`serviceID`, `hss_service`.`heading`, `hss_service`.`text`
        FROM `hss_service`
        ORDER BY `hss_service`.`position`');

        while ($row = $sql->fetch()) {
            $foo = array();

            $serviceHeading=$row['heading'];
            $serviceText=$row['text'];
            $id=$row['serviceID'];

            array_push($foo, utf8_encode($serviceHeading));
            array_push($foo, utf8_encode($serviceText));
            array_push($foo, (int)$id);

            array_push($this->service, $foo);

            unset($foo);
        }

        return $this->service;

    }

    public function getServiceID(int $arrayPos) { // Hakee yhden palvelun ID:n
        return $this->service[$arrayPos][2];
    }

    public function getServicesById($id) { // Hakee kaikki palvelut ja niiden selitykset id:n mukaan
        $sql = $this->connect()->query('SELECT `hss_service`.`serviceID`, `hss_service`.`heading`, `hss_service`.`text`
        FROM `hss_service`
        WHERE `hss_service`.`serviceID` = ' . $id);

        while ($row = $sql->fetch()) {
            $foo = array();

            $serviceHeading=$row['heading'];
            $serviceText=$row['text'];

            array_push($foo, utf8_encode($serviceHeading));
            array_push($foo, utf8_encode($serviceText));

            array_push($this->service, $foo);

            unset($foo);
        }

        return $this->service;

    }

    public function addServices(string $heading, string $text) { // Lisää palvelun tietokantaan

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

    public function changeServicePositions(array $positions) { // Vaihtaa palveluiden järjestystä tietokannassa

        $count = count($positions);

        $return = '';

        for ($i=1; $i <= $count; $i++) {
            $sql = 'UPDATE ' . $this->serviceTable . ' SET position = :pos WHERE serviceID = :serviceID';
            $sql = $this->connect()->prepare($sql);
            $sql->execute(['pos' => $i, 'serviceID' => (int)$positions[$i-1]]);

            $return = $return . ' Otsikon ' . $positions[$i - 1] . ' sijainti on nyt ' . $i;
        }

        return utf8_encode($return);

    }

    public function editService(string $id, string $heading, string $text) { // Muokkaa palvelua ja sen tekstiä

        $text = utf8_decode($text);
        $heading = utf8_decode($heading);

        $sql = 'UPDATE '.$this->serviceTable.' SET heading = :heading, text = :text WHERE serviceID = :serviceID';
        $sql = $this->connect()->prepare($sql);
        $sql->execute(['heading'=>$heading, 'text'=>$text, 'serviceID'=>$id]);

        $return = "Uusi palvelun otsikko on ".$heading." ja uusi selitys on ".$text;
        return $return;

    }

    public function getLastServiceID() { // Hakee tietokannasta viimeisenä positionin mukaan olevan palvelun id:n
        $sql = $this->connect()->query('SELECT * FROM `service` ORDER BY `position` DESC LIMIT 1');
        while ($row = $sql->fetch()) {

            $serviceID=$row['serviceID'];

        }
        return $serviceID;
    }

    public function getServiceToArray() { // Hakee palvelut tietokannasta ja laittaa ne tauluun
        $sql = $this->connect()->query('SELECT `hss_service`.`serviceID`, `hss_service`.`heading`, `hss_service`.`text`
        FROM `hss_service`
        ORDER BY `hss_service`.`position`');

        while ($row = $sql->fetch()) {
            $foo = array();

            $serviceID=$row['serviceID'];
            $heading=$row['heading'];

            array_push($foo, $serviceID);
            array_push($foo, utf8_encode($heading));

            array_push($this->service, $foo);

            unset($foo);
        }

        return $this->service;

    }

    public function deleteService($id) { // Poistaa palvelun tietokannasta

        $sql = 'DELETE FROM '.$this->serviceTable.' WHERE serviceID = :serviceID';
        $sql = $this->connect()->prepare($sql);
        $sql->execute(['serviceID'=>$id]);

        $return = 1;
    }

}
// Käytetään kun halutaan hakea kaikki palvelut tietokannasta

// $objekti = new Service();
// $array = $objekti->getServices();
// print_r($array[0][0]);


// Käytetään kun halutaan lisätä palvelu

// $objekti = new Service();
// echo $objekti->addServices("Testi","Testin selitys");


// Käytetään kun halutaan muokata palveluiden järjestystä

// $array = array(1, 2, 3, 4, 5);
// $objekti = new Service;
// echo $objekti->changeServicePositions($array);
