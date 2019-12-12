<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

if(!empty($_POST['check'])) { // Tarkistaa onko checkboxi muokkaus sivulla valittu

    $object = new Job();
    $object->changeStatus(1);


} else {

    $object = new Job();
    $object->changeStatus(0);
    
}

if(!empty($_POST['link'])) { // Tarkistaa onko muokkaus sivulla asetettu uusi linkki 

    $link = $_POST['link'];

    $object = new Job();
    $object->changelink($link);

}