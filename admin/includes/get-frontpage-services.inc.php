<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

$object = new Service(); // Luo palveluista objektin
$array = $object->getServices(); // Hakee palvelut

$count = count($array); //laskee Palveluiden määrän

makeSlideNav((int)$count);
makeSlides1((int)$count, $array);

function makeSlideNav(int $count) { //Tekee valinta napit sliderin alaosaan kohtien vaihtamista varten 
    echo '<div id="slideshow1" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">';
        echo '<li data-target="#slideshow1" data-slide-to="0" class="active"></li>';
    
        for ($i=1; $i < $count ; $i++) { 
            echo '<li data-target="#slideshow1" data-slide-to="'.$i.'"></li>';
        }
    echo '</ol>';
    echo '<div class="carousel-inner" role="listbox">';
}

function makeSlides1(int $count, array $array) { //Tekee slidit jotka näyttävät informaation
    $object1 = new Service();
    $object1->getServices();
    for ($i=1; $i <= $count ; $i++) { 
        $serImg = "'img/ser". $i ."_1.jpg'";
        if ($i==1) {
            echo '<div class="carousel-item active" style="background-image: url('.$serImg.')">';
        } else {
            echo '<div class="carousel-item" style="background-image: url('.$serImg.')">';
        }
        echo '<h1 class="service-heading text-center"> '.$array[$i-1][0].' </h1>';
        echo '<div class="row">
                <div class="service-text">
                    <p>'.$array[$i-1][1].'</p>
                </div>
            </div>
        </div>';
    }
    echo '</div>';
}