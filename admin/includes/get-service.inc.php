<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php';

$object = new Service();
$array = $object->getServicesById();
