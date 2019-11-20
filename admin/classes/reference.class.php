<?php

class Reference extends Conn {
    
    private $headingsTable = 'reference_heading';
    private $refsTable = 'references';
    public $refHeadings = array();
    private $refs = array();

    public function getReferences() {
        $sql = $this->connect()->query('SELECT `reference_heading`.`headingID`, `reference_heading`.`heading` 
        FROM `reference_heading` 
        ORDER BY `reference_heading`.`position`');   
        while ($row = $sql->fetch()) {
            $foo = array();

            $headingID=$row['headingID'];
            $heading=$row['heading'];

            array_push($foo, (int)$headingID);
            array_push($foo, $heading);

            array_push($this->refHeadings, $foo);

            unset($foo);
        }

        $headingsAmount = count($this->refHeadings);

        for ($i=1; $i <= $headingsAmount; $i++) { 

            $foo1 = array();

            $sql = $this->connect()->query('SELECT `references`.`refID`, `references`.`text` 
            FROM `reference_heading` 
            INNER JOIN `references` ON `references`.`headingID` = `reference_heading`.`headingID` 
            WHERE `reference_heading`.`headingID` ='. $this->refHeadings[$i-1][0]);
            while ($row = $sql->fetch()) {

                $id=$row['refID'];
                $text=$row['text'];

                $foo0 = array();
                array_push($foo0, (int)$id);
                array_push($foo0, utf8_encode($text));

                array_push($foo1, $foo0);
                unset($foo0);
            }

            array_push($this->refs, [$this->refHeadings[$i-1][1] => $foo1]);

            
            unset($foo1);
        }

        return $this->refs;
        
    }

    public function getRefHeadingString($arrayPos) {
        return utf8_encode($this->refHeadings[$arrayPos][1]);
    }

    public function addReferenceTitle(string $heading) {

        $sql = $this->connect()->query('SELECT count(*) AS headings FROM ' . $this->headingsTable);
        while ($row = $sql->fetch()) {
            $headingsAmount = $row['headings'];
        }

        $pos = (int)$headingsAmount + 1;

        $sql = "INSERT INTO " . $this->headingsTable . " (`headingID`, `position`, `heading`) 
        VALUES (NULL, :position, :heading)";
        $sql = $this->connect()->prepare($sql);
        $sql->execute(['position'=>$pos, 'heading'=>$heading]);

        $return = 'Otsikko ' . $heading . ' on lisätty tietokantaan sijaintiin ' . $pos;

        return utf8_encode($return);

    }

    public function changeHeadingPositions(array $positions) {

        $count = count($positions);

        $return = '';

        for ($i=1; $i <= $count ; $i++) { 
            $sql = 'UPDATE ' . $this->headingsTable . ' SET position = :pos WHERE headingID = :headingID';
            $sql = $this->connect()->prepare($sql);
            $sql->execute(['pos' => $i, 'headingID' => (int)$positions[$i-1]]);

            $return = $return . ' Otsikon ' . $positions[$i-1] . ' sijainti on nyt ' . $i . '. ';
        }

        return utf8_encode($return);

    }

    public function changeReferencePositions(array $positions) {

        $count = count($positions);

        $return = '';

        for ($i = 1; $i <= $count; $i++) {

            $sql = 'UPDATE `' . $this->refsTable . '` SET position = :pos WHERE refID = :refID';
            $sql = $this->connect()->prepare($sql);
            $sql->execute(['pos' => $i, 'refID' => (int)$positions[$i-1]]);

            $return = $return . ' Referenssin ' . $positions[$i-1] . ' sijainti on nyt ' . $i . '. ';
            
        }

        return utf8_encode($return);
    }

    public function getRefHeadingsToArray() {
        $sql = $this->connect()->query('SELECT `reference_heading`.`headingID`, `reference_heading`.`heading` 
        FROM `reference_heading` 
        ORDER BY `reference_heading`.`position`');   
        while ($row = $sql->fetch()) {
            $foo = array();

            $headingID=$row['headingID'];
            $heading=$row['heading'];

            array_push($foo, (int)$headingID);
            array_push($foo, utf8_encode($heading));

            array_push($this->refHeadings, $foo);

            unset($foo);
        }
        return $this->refHeadings;
    }

    public function getLastHeadingID() {
        $sql = $this->connect()->query('SELECT * FROM `reference_heading` ORDER BY `position` DESC LIMIT 1');   
        while ($row = $sql->fetch()) {

            $headingID=$row['headingID'];

        }
        return $headingID;
    }

    public function editReferenceHeading(string $id, string $heading) {

        $heading = utf8_decode($heading);

        $sql = 'UPDATE '.$this->headingsTable.' SET heading = :heading WHERE headingID = :headingID';
        $sql = $this->connect()->prepare($sql);
        $sql->execute(['heading'=>$heading, 'headingID'=>$id]);

        $return = "Uusi referenssi otsikko on ".$heading;
        return utf8_decode($return);

    }

    public function editReference(string $id, string $text) {

        $text = utf8_decode($text);

        $sql = 'UPDATE '.$this->refsTable.' SET text = :text WHERE refID = :refID';
        $sql = $this->connect()->prepare($sql);
        $sql->execute(['text'=>$text, 'refID'=>$id]);

        $return = "Uusi referenssi on ".$text;
        return utf8_decode($return);

    }

    public function deleteReferenceHeading($id) {

        $sql = 'DELETE FROM '.$this->headingsTable.' WHERE headingID = :headingID';
        $sql = $this->connect()->prepare($sql);
        $sql->execute(['headingID'=>$id]);

        $return = 1;
    }
    
}

// $objekti = new Reference();
// $array = $objekti->getReferences();
// $pos = $objekti->getRefHeadingString(3);
// print_r($array[3][$pos]);

// print_r($array);

// $objekti = new Reference();
// echo $objekti->addReferenceTitle('Kadut');

// $object = new Reference();
// array0 = array(2,4,1,3);
// echo $object->changeHeadingPositions($array0);

// $array1 = array(4,2,5,1,3);
// echo $object->changeReferencePositions($array1);

// $object = new Reference();
// print_r($object->getRefHeadingsToArray());