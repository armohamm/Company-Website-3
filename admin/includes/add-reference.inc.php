<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php';

$id = $_POST['id'];
if ($id == 0) {
    echo 'Et antanut otsikkoa';
}
else {
    $text = $_POST['text'];

    $objekti = new Reference();
    echo $objekti->addReference((int)$id, $text);
}