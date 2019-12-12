<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

$array = explode(',', $_POST['order']);

$object = new Reference(); // Kutsuu reference classia
echo $object->changeHeadingPositions($array); // Methodi, joka vaihtaa otsikoiden positioneja