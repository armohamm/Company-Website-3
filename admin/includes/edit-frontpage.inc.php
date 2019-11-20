<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php';

$text1=$_POST['text1'];
$text2=$_POST['text2'];

$object = new TextFrontpage();
$object->editTextFrontpage("title", $text1);
$object->editTextFrontpage("about", $text2);

echo "muokattu";