<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

$refArray = explode(',', $_POST['order']); // Hakee referenssien järjestyksen

$object = new Reference(); // Kutsuu reference luokkaa
echo $object->changeReferencePositions($refArray); // Methodi, joka vaihtaa referenssien positioneja