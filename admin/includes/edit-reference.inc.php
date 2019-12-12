<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

if(!isset($_GET['id'])) { // Jos id:tä EI ole, palauttaa takaisin referenssi sivulle

    header("Location: ../reference-contents.php");

} else {

    $id = $_POST['id'];
    $text = $_POST['text'];

    $objekti = new Reference(); // Kutsuu reference classia
    echo $objekti->editReference($id, $text); // Methodi, joka muokkaa referenssiä

    echo "<br><a href='../edit-reference.php'>Takaisin</a>";
}