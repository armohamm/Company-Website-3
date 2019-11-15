<?php

declare(strict_types=1);
include 'class-autoloader.inc.php';

$password = $_POST['password'];

$object = new Password();
echo $object->checkPassword($password);