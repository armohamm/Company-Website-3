<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

$object = new TextFrontpage(); // Kutsuu TextFrontpage classia
$array = $object->getTextFrontpage('about'); // Methodi, joka hakee tietokannasta meistä -osion tekstin ja laittaa sen tauluun

echo $array[1];