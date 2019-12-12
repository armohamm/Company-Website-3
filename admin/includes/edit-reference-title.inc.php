<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

if(!isset($_GET['id'])) { // Jos id:tä EI ole, palauttaa takaisin referenssi otsikko sivulle

    header("Location: http://localhost/top/hamss/admin/reference-titles.php");

} else {

    $id = $_POST['id'];
    $title = $_POST['text'];

    $objekti = new Reference(); // Kutsuu reference classia
    echo $objekti->editReferenceHeading($id, $title); // Methodi, joka muokkaa referenssi otsikkoa

    function editImgBg($id) { // Funktio, joka muokkaa referenssi otsikon taustakuvaa

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

    function editImg1($id) { // Funktio, joka muokkaa referenssi otsikon ensimmäistä kuvaa

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

    function editImg2($id) { // Funktio, joka muokkaa referenssi otsikon toista kuvaa

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

    function editImg3($id) { // Funktio, joka muokkaa referenssi otsikon kolmatta kuvaa

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
    if(!empty($_FILES['file0']['name'])) { // Tarkistaa onko uusi taustakuva asetettu
        editImgBg($id);
    }

    if(!empty($_FILES['file1']['name'])) { // Tarkistaa onko uusi referenssi otsikon kuva asetettu
        editImg1($id);
    }

    if(!empty($_FILES['file2']['name'])) { // Tarkistaa onko uusi referenssi otsikon kuva asetettu
        editImg2($id);
    }

    if(!empty($_FILES['file3']['name'])) { // Tarkistaa onko uusi referenssi otsikon kuva asetettu
        editImg3($id);
    }
    
}


