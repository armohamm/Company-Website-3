<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php';

session_start();

$password = $_POST['password'];

$object = new Password();
$return = $object->checkPassword($password);

if ($return == 1) { // Jos salaasana on oikein
    $_SESSION['logged_in'] = true;
    $_SESSION['password'] = $object->getPassword();
    $_SESSION['admin'] = true;
    echo $return;
}
else { // jos ei
    echo $return;
}
