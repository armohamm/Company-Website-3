<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

if(!isset($_GET['id'])) { // Jos id:tä EI ole, palauttaa takaisin palvelu sivulle

    header("Location: ../services.php");
    
} else {

    $id = $_GET['id'];

    $objekti = new Service(); // Kutsuu service classia
    $objekti->deleteService($id); // Methodi, joka poistaa palvelun

    // Funktiot

    function deleteServiceImg($id) {

        $dir = "../../img/";
        $file = "ser" . $id . "_1" . "." . "jpg";
        $path = $dir . $file;

        unlink($path);

    }

    deleteServiceImg($id);

    echo "Poistettu.<br><br>";

    echo '<a href="../services.php">Takaisin<a>';

}