<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php';

$object = new Reference(); // Luo referensseistä objektin
$refsArray = $object->getReferences(); // Hakee referenssit
$refHeadingsArray = $object->getRefHeadingsToArray(); //Hakee referenssi otsikot

$count = count($refsArray); //laskee Referenssi otsikoiden määrän

makeSlideSelector((int)$count);
makeSlides((int)$count, $refsArray, $refHeadingsArray);

function makeSlideSelector(int $count) { //Tekee valinta napit sliderin alaosaan kohtien vaihtamista varten 
    echo '<div id="slideshow2" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">';
        echo '<li data-target="#slideshow2" data-slide-to="0" class="active"></li>';
    
        for ($i=1; $i < $count ; $i++) { 
            echo '<li data-target="#slideshow2" data-slide-to="'.$i.'"></li>';
        }
    echo '</ol>';
    echo '<div class="carousel-inner" role="listbox">';
}

function makeSlides(int $count, array $refsArray, array $refHeadingsArray) { //Tekee slidit jotka näyttävät informaation
    $object1 = new Reference();
    $object1->getReferences();
    for ($i=1; $i <= $count ; $i++) { 
        $id = $object1->getRefHeadingID($i-1);
        $refImg = "'img/ref". $id ."_1.jpg'";
        if ($i==1) {
            echo '<div class="carousel-item active" style="background-image: url('.$refImg.')">';
        } else {
            echo '<div class="carousel-item" style="background-image: url('.$refImg.')">';
        }
        echo '<h1 class="reference-heading text-center"> '.$refHeadingsArray[$i-1][1].' </h1>';
        echo '<div class="row">
                <div class="col-lg-2 hidden-md hidden-sm">  </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">';

        $refsCount = count($refsArray[$i-1][$object1->getRefHeadingString($i-1)]);
        if ($refsCount > 15) {
            echo '<ul class="reference-ul" style="columns: 2; -webkit-columns: 2; -moz-columns: 2;">';
        } else {
            echo '<ul class="reference-ul">';
        }

        for ($a=0; $a < $refsCount ; $a++) { 
            echo '<li>'.$refsArray[$i-1][$object1->getRefHeadingString($i-1)][$a][1].'</li>';
        }

        echo '</ul>
            </div>
            <div class="col-lg-5 col-md-6 hidden-sm">
                <img src="img/ref'.$i.'_2.jpg" class="reference-img-0">
                <img src="img/ref'.$i.'_3.jpg" class="reference-img-1">
                <img src="img/ref'.$i.'_4.jpg" class="reference-img-2">
            </div>
          </div> </div>';
        
    }
    echo '</div> </div> </div> </div>';
}
