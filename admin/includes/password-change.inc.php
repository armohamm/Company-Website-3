<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php';

$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$password3 = $_POST['password3'];

$object = new Password();
echo $object->changePassword($password1, $password2, $password3);