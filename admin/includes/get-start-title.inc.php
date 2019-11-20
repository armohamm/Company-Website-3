<?php

declare(strict_types=1);
include 'class-autoloader.inc.php';

$object = new TextFrontpage();
echo $object->getTextFrontpage('title');