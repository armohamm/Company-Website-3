<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

$object = new Job(); // Kutsuu Job classia
$bool = $object->getStatus(); // Methodi, joka hakee tietokannasta työ statuksen

if ($bool == 1) {
    echo '<input type="checkbox" name="check" value="1" checked><br>';
} else {
    echo '<input type="checkbox" name="check" value="1"><br>';
}