<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

$id = $_POST['id'];
if ($id == 0) {
    echo 'Et antanut otsikkoa';
}
else {
    $text = $_POST['text'];

    $objekti = new Reference(); // Kutsuu reference classia
    echo $objekti->addReference((int)$id, $text); // Methodi, joka lisää referenssin
}