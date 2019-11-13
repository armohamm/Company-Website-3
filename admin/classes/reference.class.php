<?php

class Reference extends Conn {
    
    private $headingID;
    private $headingsTable = "reference_heading";
    private $refsTable = "references";
    private $headingsOrder = array();
    private $refsOrder = array();

    

    // SELECT `references`.`text`, `references`.`position` FROM `reference_heading` INNER JOIN `references` ON `references`.`headingID` = `reference_heading`.`headingID` WHERE `reference_heading`.`headingID` = 1 ORDER BY `references`.`position` 

}
