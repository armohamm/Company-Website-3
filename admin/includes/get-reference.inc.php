<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

$object = new Reference(); // Kutsuu reference classia
$array = $object->getRefById($id); // Hakee tietokannasta referenssit id:n mukaan ja laittaa ne tauluun