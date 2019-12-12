<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

if(!isset($_GET['id'])) { // Jos id:tä EI ole, palauttaa takaisin referenssi sivulle

    header("Location: ../reference-contents.php");
    
} else {

    $id = $_GET['id'];

    $objekti = new Reference(); // Kutsuu reference classia
    $objekti->deleteReferenceHeading($id); // Methodi, joka poistaa referenssi otsikon

    // Funktiot

    function deleteImgBg($id) { // Funktio, joka poistaa referenssi otsikon taustakuvan
        $dir = "../../img/";
        $file = "ref" . $id . "_1" . "." . "jpg";
        $path = $dir . $file;
        unlink($path);
    }

    function deleteImg1($id) { // Funktio, joka poistaa referenssi otsikon ensimmäisen kuvan
        $dir = "../../img/";
        $file = "ref" . $id . "_2" . "." . "jpg";
        $path = $dir . $file;
        unlink($path);
    }

    function deleteImg2($id) { // Funktio, joka poistaa referenssi otsikon toisen kuvan
        $dir = "../../img/";
        $file = "ref" . $id . "_3" . "." . "jpg";
        $path = $dir . $file;
        unlink($path);
    }
    
    function deleteImg3($id) { // Funktio, joka poistaa referenssi otsikon kolmannen kuvan
        $dir = "../../img/";
        $file = "ref" . $id . "_4" . "." . "jpg";
        $path = $dir . $file;
        unlink($path);
    }

    deleteImgBg($id);
    deleteImg1($id);
    deleteImg2($id);
    deleteImg3($id);

    echo "Poistettu.<br><br>";
    echo '<a href="../reference-titles.php">Takaisin<a>';

}