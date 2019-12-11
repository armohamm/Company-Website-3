<?php

function editImgStart() {

    $dir = "../../img/";
    $file = $_FILES['file0']['name'];
    $temp_name = $_FILES['file0']['tmp_name'];
    $info = pathinfo($file);
    $fileExt = $info['extension'];
    $newFilename = "section-start" . "." . "jpg";
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

function editImgAbout() {

    $dir = "../../img/";
    $file = $_FILES['file1']['name'];
    $temp_name = $_FILES['file1']['tmp_name'];
    $info = pathinfo($file);
    $fileExt = $info['extension'];
    $newFilename = "section-about" . "." . "jpg";
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

if(!empty($_FILES['file0']['name'])) {
    editImgStart();
}
if(!empty($_FILES['file1']['name'])) {
    editImgAbout();
}

