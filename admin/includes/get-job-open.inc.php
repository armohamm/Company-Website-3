<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

$object = new Job(); // Kutsuu Job classia
echo $object->getJob(); // Methodi, joka hakee tietokannasta työ taulusta linkin ja statuksen
