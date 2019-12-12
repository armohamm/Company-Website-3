<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php';

$array = explode(',', $_POST['order']);

$object = new Reference();
echo $object->changeHeadingPositions($array);