<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

$array = explode(',', $_POST['order']);

$object = new Service(); // Kutsuu reference classia
echo $object->changeServicePositions($array); // Methodi, joka vaihtaa otsikoiden positioneja