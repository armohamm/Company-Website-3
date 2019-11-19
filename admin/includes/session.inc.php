<?php

declare(strict_types=1);
include 'class-autoloader.inc.php';

session_start();

$object = new Password();

if (basename($_SERVER['PHP_SELF']) == 'login.php') {
    
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {


        if (isset($_SESSION['password'])){

            $return = $object->checkSessionPassword($_SESSION['password']);

            if ($return == 1) {
                if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
                    header("Location: index.php");
                    exit;
                } else {
                    
                }
            } else {

            }
        } else {

        }
    }
    else {

    }

} else {

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {


        if (isset($_SESSION['password'])){

            $return = $object->checkSessionPassword($_SESSION['password']);

            if ($return == 1) {
                if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
                    
                } else {
                    header("Location: login.php");
                }
            } else {
                header("Location: login.php");
            }
        } else {
            header("Location: login.php");
        }
    }
    else {
        header("Location: login.php");
    }

}