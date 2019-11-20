<?php

declare(strict_types=1);
include 'class-autoloader.inc.php';

$id = $_POST['id'];
$text = $_POST['text'];

$objekti = new Reference();
echo $objekti->editReference($id, $text);