<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php';

if(!empty($_POST['check'])) {

    $object = new Job();
    $object->changeStatus(1);


} else {

    $object = new Job();
    $object->changeStatus(0);
    
}

if(!empty($_POST['link'])) {

    $link = $_POST['link'];

    $object = new Job();
    $object->changelink($link);

}