<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php';

if(!isset($_GET['id'])) {

    header("Location: http://localhost/top/hamss/admin/reference-contents.php");

} else {

    $id = $_POST['id'];
    $text = $_POST['text'];

    $objekti = new Reference();
    echo $objekti->editReference($id, $text);

}