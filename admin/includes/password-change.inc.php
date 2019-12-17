<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$password3 = $_POST['password3'];

$object = new Password(); // Kutsuu password classia
echo $object->changePassword($password1, $password2, $password3); // Methodi, joka vaihtaa salasanan