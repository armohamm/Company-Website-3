<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

if(!isset($_GET['id'])) { // Jos id:tä EI ole, palauttaa takaisin referenssi sivulle

    header("Location: http://localhost/top/hamss/admin/reference-contents.php");
    
} else {

    $id = $_GET['id'];

    $objekti = new Reference(); // Kutsuu reference classia
    $objekti->deleteReferenceHeading($id); // Methodi, joka poistaa referenssi otsikon

    echo "Poistettu.<br><br>";

    echo '<a href="../reference-titles.php">Takaisin<a>';

}