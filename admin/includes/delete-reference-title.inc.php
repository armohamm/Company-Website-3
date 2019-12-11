<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php';

if(!isset($_GET['id'])) {

    header("Location: http://localhost/top/hamss/admin/reference-contents.php");
    
} else {

    $id = $_GET['id'];

    $objekti = new Reference();
    $objekti->deleteReferenceHeading($id);

    echo "Poistettu.<br><br>";

    echo '<a href="../reference-titles.php">Takaisin<a>';

}