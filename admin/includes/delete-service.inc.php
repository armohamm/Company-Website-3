<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php';

if(!isset($_GET['id'])) {

    header("Location: http://localhost/top/hamss/admin/services.php");
    
} else {

    $id = $_GET['id'];

    $objekti = new Service();
    $objekti->deleteService($id);

    echo "Poistettu.<br><br>";

    echo '<a href="http://localhost/top/hamss/admin/services.php">Takaisin<a>';

}