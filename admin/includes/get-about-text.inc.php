<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php';

$object = new TextFrontpage();
$array = $object->getTextFrontpage('about');

echo $array[1];