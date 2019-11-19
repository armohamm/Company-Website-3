<?php

declare(strict_types=1);
include 'class-autoloader.inc.php';

$id = $_POST['id'];
$dir = "../../img/";
$file = $_FILES['file0']['name'];
$temp_name = $_FILES['file0']['tmp_name'];
$info = pathinfo($file);
$fileExt = $info['extension'];
$newFilename = $id . "_1" . "." . "jpg";
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


// $title = $_POST['text'];

// $objekti = new Reference();
// echo $objekti->addReferenceTitle($title);