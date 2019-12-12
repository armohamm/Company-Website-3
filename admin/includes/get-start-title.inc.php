<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

$object = new TextFrontpage(); // Kutsuu TextFrontpage classia
echo $object->getTextFrontpage('title'); // Methodi, joka hakee tietokannasta etusivun aloitus tekstin