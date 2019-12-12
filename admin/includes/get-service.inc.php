<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

$object = new Service(); // Kutsuu service classia
$array = $object->getServicesById($id); // Hakee palvelut tietokannasta id:n mukaan ja laittaa ne tauluun
