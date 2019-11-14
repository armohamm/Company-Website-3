<?php
declare(strict_types =1);
include 'includes/class-autoloader.inc.php';

$objekti = new Reference();
$array = $objekti->getReferences();
$pos = $objekti->getRefHeading(3);
print_r($array[3][$pos]);
