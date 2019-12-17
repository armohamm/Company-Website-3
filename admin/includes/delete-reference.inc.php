<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

if(!isset($_GET['id'])) { // Jos id:tä EI ole, palauttaa takaisin referenssi sivulle

    header("Location: ../reference-contents.php");
    
} else {

    $id = $_GET['id'];

    $objekti = new Reference(); // Kutsuu reference classia
    $objekti->deleteReference($id); // Methodi, joka poistaa referenssin

    echo "Poistettu.<br><br>";

    echo '<a href="../reference-contents.php">Takaisin<a>';

}