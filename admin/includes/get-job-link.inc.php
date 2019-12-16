<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

$object = new Job(); // Kutsuu Job classia
echo $object->getLink(); // Methodi, joka hakee tietokannasta työn linkin