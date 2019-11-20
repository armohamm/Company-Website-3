<?php

declare(strict_types=1);
include 'class-autoloader.inc.php';

session_start();

$password = $_POST['password'];

$object = new Password();
$return = $object->checkPassword($password);

if ($return == 1) {
    $_SESSION['logged_in'] = true;
    $_SESSION['password'] = $object->getPassword();
    $_SESSION['admin'] = true;
    echo $return;
}
else {
    echo $return;
}