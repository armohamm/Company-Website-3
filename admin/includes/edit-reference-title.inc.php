<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php';

$id = $_POST['id'];
$title = $_POST['text'];

$objekti = new Reference();
echo $objekti->editReferenceHeading($id, $title);

function editImgBg($id) {

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

function editImg1($id) {

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

function editImg2($id) {

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

function editImg3($id) {

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

editImgBg($id);
editImg1($id);
editImg2($id);
editImg3($id);