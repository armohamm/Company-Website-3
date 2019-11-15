<?php

declare(strict_types=1);
include 'class-autoloader.inc.php';

$array = explode(',', $_POST['order']);

$object = new Reference();
echo $object->changeHeadingPositions($array);