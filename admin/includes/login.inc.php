<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

session_start(); // Aloittaa uuden session

$password = $_POST['password']; 

$object = new Password(); // Kutsuu password classia
$return = $object->checkPassword($password); // Methodi, joka tarkistaa salasanan tietokannasta

if ($return == 1) {
    $_SESSION['logged_in'] = true;
    $_SESSION['password'] = $object->getPassword();
    $_SESSION['admin'] = true;
    echo $return;
}
else {
    echo $return;
}