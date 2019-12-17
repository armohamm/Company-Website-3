<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

$title = $_POST['text'];

$objekti = new Reference(); // Kutsuu reference classia
echo $objekti->addReferenceTitle($title); // Methodi, joka isää referenssi otsikon
$id = $objekti->getLastHeadingID(); // Hakee tietokannasta viimeisen referenssi otsikon id:n

function addImgBg($id) { // Funktio, joka lisää uudelle referenssi otsikolle taustakuvan. Poistaa myös vanhan, jos tarve.

    $dir = "../../img/";
    $file = $_FILES['file0']['name'];
    $temp_name = $_FILES['file0']['tmp_name'];
    $info = pathinfo($file);
    $fileExt = $info['extension'];
    $newFilename = "ref" . $id . "_1" . "." . "jpg";
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

function addImg1($id) { // Funktio, joka lisää ensimmäisen kuvan referenssien viereen

    $dir = "../../img/";
    $file = $_FILES['file1']['name'];
    $temp_name = $_FILES['file1']['tmp_name'];
    $info = pathinfo($file);
    $fileExt = $info['extension'];
    $newFilename = "ref" . $id . "_2" . "." . "jpg";
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

function addImg2($id) { // Funktio, joka lisää toisen kuvan referenssien viereen

    $dir = "../../img/";
    $file = $_FILES['file2']['name'];
    $temp_name = $_FILES['file2']['tmp_name'];
    $info = pathinfo($file);
    $fileExt = $info['extension'];
    $newFilename = "ref" . $id . "_3" . "." . "jpg";
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

function addImg3($id) { // Funktio, joka lisää kolmannen kuvan referenssien viereen

    $dir = "../../img/";
    $file = $_FILES['file3']['name'];
    $temp_name = $_FILES['file3']['tmp_name'];
    $info = pathinfo($file);
    $fileExt = $info['extension'];
    $newFilename = "ref" . $id . "_4" . "." . "jpg";
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

// Funktioiden kutsuminen

addImgBg($id);
addImg1($id);
addImg2($id);
addImg3($id);

echo "<br><a href='../add-reference-title.php'>Takaisin</a>";
