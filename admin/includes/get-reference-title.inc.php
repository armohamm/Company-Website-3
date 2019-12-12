<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

$object = new Reference(); // Kutsuu reference classia
$array = $object->getRefHeadingsById($id); // Hakee tietokannasta referenssi otsikot id:n mukaan ja laittaa ne tauluun
