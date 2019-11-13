<?php
declare(strict_types =1);
include 'includes/class-autoloader.inc.php';

$objekti = new Password;
echo $objekti->changePassword('salasana1', 'salasana1', 'salasana1');
