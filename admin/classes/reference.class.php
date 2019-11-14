<?php

class Reference extends Conn {
    
    private $headingsTable = "reference_heading";
    private $refsTable = "references";
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

            $foo = array();

            $sql = $this->connect()->query('SELECT `references`.`text` 
            FROM `reference_heading` 
            INNER JOIN `references` ON `references`.`headingID` = `reference_heading`.`headingID` 
            WHERE `reference_heading`.`headingID` ='. $this->refHeadings[$i-1][0]);

            while ($row = $sql->fetch()) {

                $text=$row['text'];

                array_push($foo, $text);

            }

            array_push($this->refs, [$this->refHeadings[$i-1][1] => $foo]);

            unset($foo);
        }

        return $this->refs;
        
    }

    public function getRefHeading($arrayPos) {
        return $this->refHeadings[$arrayPos][1];
    }
    
}

// $objekti = new Reference();
// $array = $objekti->getReferences();
// $pos = $objekti->getRefHeading(3);
// print_r($array[3][$pos]);