<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

$title = $_POST['text'];
$desc = $_POST['desc'];

$objekti = new Service(); // Kutsuu service classia
$objekti->addServices($title, $desc); // Methodi, joka lisää palvelun
$id = $objekti->getLastServiceID(); // Methodi, joka hakee viimeisen palvelun id:n

function addServiceImg($id) { // Funktio, joka lisää palvelulle taustakuvan

    $dir = "../../img/";
    $file = $_FILES['file']['name'];
    $temp_name = $_FILES['file']['tmp_name'];
    $info = pathinfo($file);
    $fileExt = $info['extension'];
    $newFilename = "ser" . $id . "_1" . "." . "jpg";
    $path = $dir . $newFilename;
    $exts = array("jpg", "jpeg", "png");

    if (in_array($fileExt, $exts)) {

        if (file_exists($path)) {

            unlink($path);

            if (move_uploaded_file($temp_name, $path)) {


            } else {

                echo "Kuvan siirtämisessä tapahtui virhe!<br>";

            }

        } else {

            if (move_uploaded_file($temp_name, $path)) {


            } else {

                echo "Kuvan siirtämisessä tapahtui virhe!<br>";

            }

        }

    } else {
        echo "Väärä tiedosto tyyppi!";
    }

}

addServiceImg($id);