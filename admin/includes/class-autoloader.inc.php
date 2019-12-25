<?php

spl_autoload_register('classAutoloader');

function classAutoloader($className) {
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if (strpos($url, 'includes') !== false) {
        $path = '../classes/';
    }
    elseif (strpos($url, 'admin') !== false) {
        $path = 'classes/';
    }
    else {
        $path = 'admin/classes/';
    }
    $className = lcfirst($className);
    $extension = '.class.php';
    require_once $path . $className . $extension;
}
