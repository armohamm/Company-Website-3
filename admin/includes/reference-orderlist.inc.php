<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

ini_set('display_errors', 'on');
ini_set('display_startup_errors', 'on');
error_reporting(E_ALL);

$object = new Reference(); // Kutsuu reference classia
$array = $object->getRefHeadingsToArray(); // Methodi, joka hakee referenssi otsikot tietokannasta ja laittaa ne tauluun
$array1 = $object->getReferences(); // Methodi, joka hakee kaikki referenssit tietokannasta

// Funktiot

function makeSelector(array $array) { // Funktio, joka tekee valitsimen
    echo '
    <select id="titleselector" name="titleselector">
        <option value="0">Valitse</option>';

    for ($i=0; $i <= count($array)-1 ; $i++) { 
        echo '<option value="'.$array[$i][0].'">'.$array[$i][1].'</option>';
    }
    
    echo '
    </select>
    ';
}

function makeLists(array $array) { // Funktio, joka tekee listat

    $object0 = new Reference(); // Kutsuu reference classia
    $array1 = $object0->getReferences(); // Methodi, joka hakee kaikki referenssit tietokannasta

    echo '
    <div class="list-container" id="0" style="margin-top: 25px; display:block;">
        <h1 class="h3 mb-4 text-gray-800">Valitse minkä referenssiotsikon referenssejä haluat muokata</h1>
    </div>
    ';

    for ($i=1; $i <= count($array) ; $i++) { 
        
        $pos = utf8_decode($object0->getRefHeadingString($i-1));
        
        echo '<div class="list-container" id="'.$array[$i-1][0].'" style="margin-top: 25px; display:none;">
        
            <h1 class="h3 mb-4 text-gray-800">'.$array[$i-1][1].' referenssit</h1>';

            echo '<ul id="sortable'. $i .'">';
                
            for ($a=1; $a <= count($array1[$i-1][$object0->getRefHeadingString($i-1)]); $a++) { 
                echo '

                <li id="'.$array[$i-1][0].'" reference-id="'.$array1[$i-1][$object0->getRefHeadingString($i-1)][$a-1][0].'" class="bg-gray-100 border-bottom-info ui-state-default">
                    '.$array1[$i-1][$object0->getRefHeadingString($i-1)][$a-1][1].' <br>
                    <a href="edit-reference.php?id='.$array1[$i-1][$object0->getRefHeadingString($i-1)][$a-1][0].'" style="color: rgb(230, 149, 0);">Muokkaa</a>
                    <a href="includes/delete-reference.inc.php?id='.$array1[$i-1][$object0->getRefHeadingString($i-1)][$a-1][0].'" style="color: red;"> Poista</a>
                </li>

                ';
            }

            echo '
                </ul>

                <button class="btn btn-success btn-icon-split" onclick="saveOrder'. $i .'();">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Tallenna järjestys</span>
                </button>
                
                <button class="btn btn-danger btn-icon-split" onclick="location.reload(true);">
                    <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">Hylkää muutokset</span>
                </button>
            </div>';
    }
}

function makeJS0(array $array) // Funktio, joka tekee ensimmäisen osan javascriptistä
{
    for ($i=1; $i <= count($array) ; $i++) { 
        echo '
        <script>
            $(function () {
                $("#sortable'.$i.'").sortable();
                $("#sortable'.$i.'").disableSelection();
            });
        </script>
        ';
    }
}

function makeJS1(array $array) // Funktio, joka tekee toisen osan javascriptistä
{
    for ($i=1; $i <= count($array) ; $i++) { 
        echo '
        <script type="text/javascript">
            function saveOrder'. $i .'() {
                var referenceorder'. $i .' = "";
                var otsikko = "'.$array[$i-1][1].'"

                $("#sortable'. $i .' li").each(function (i) {
                    if (referenceorder'. $i .' == "")
                        referenceorder'. $i .' = $(this).attr("reference-id");
                    else
                        referenceorder'. $i .' += "," + $(this).attr("reference-id");
                });
                
                $.post("includes/reference-order.inc.php?id='. $array[$i-1][0] .'", { order: referenceorder'. $i .' })
                .done(function (result) {
                    if(alert("Referenssien järjestys on tallennettu \nTallennetut tiedot: " + result)){}
                    else window.location.reload(true);
                })
                .fail(function (data) {
                    alert("Error: " + data);
                });
                
            }
        </script>
        ';
    }
}

function makeJS2() // Funktio, joka tekee kolmannen osan javascriptistä
{
    echo '
    <script type="text/javascript">
        $(function () {
            $("#titleselector").change(function () {
                $(".list-container").hide();
                $("#" + $(this).val()).show();
            });
        });
    </script>';
}

// if(alert("Referenssien järjestys on tallennettu \nTallennetut tiedot: " + result)){}
// else window.location.reload(true); 