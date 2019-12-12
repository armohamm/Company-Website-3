<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

$text1=$_POST['text1'];
$text2=$_POST['text2'];

$object = new TextFrontpage(); // Kutsuu TextFrontpage classia
$object->editTextFrontpage("title", $text1); // Muokkaa etusivun aloitus tekstiä
$object->editTextFrontpage("about", $text2); // Muokkaa etusivun meistä -osion tekstiä 

echo "muokattu";