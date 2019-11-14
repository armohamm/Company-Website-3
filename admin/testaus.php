<?php
declare(strict_types =1);
include 'includes/class-autoloader.inc.php';

$array = array(5, 4, 3, 2, 1);

$objekti = new Reference();
echo $objekti->changeReferencePositions($array);

