<?php

declare(strict_types=1);
include 'class-autoloader.inc.php';

$id = $_POST['id'];
$title = $_POST['text1'];

$objekti = new Reference();
echo $objekti->editReferenceHeading($id, $title);