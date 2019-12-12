<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php'; // Automaattisesti sisällytää tällä sivulla tarvittavien classien tiedostot

function makeList() { // Funktio, joka tekee listan

    $object = new Service(); // Kutsuu service classia
    $array = $object->getServiceToArray(); // Methodi, joka hakee palvelut tietokannasta ja laittaa ne tauluun
    $amount = count($array); // Laskee palveluiden määrän

    for ($i=0; $i <= $amount-1; $i++) { 
        printf(
        '<li service-id="'.$array[$i][0].'" class="bg-gray-100 border-bottom-info ui-state-default">'.$array[$i][1].'<br>
            <a href="edit-service.php?id='.$array[$i][0].'" style="color: rgb(230, 149, 0);">Muokkaa</a>
            <a href="includes/delete-service.inc.php?id='.$array[$i][0].'" style="color: red;"> Poista</a>
        </li>');
    }
}

function makeJS() { // Funktio, joka tekee javascriptin

    $object = new Service(); // Kutsuu service classia
    $array = $object->getServiceToArray(); // Methodi, joka hakee palvelut tietokannasta ja laittaa ne tauluun
    $amount = count($array); // Laskee palveluiden määrän

    printf('<script>
        $(function () {
            $("#sortable1").sortable();
            $("#sortable1").disableSelection();
        });
    </script>

    <script type="text/javascript">
        function saveOrder() {
            var serviceorder = "";

            $("#sortable1 li").each(function (i) {
                if (serviceorder == "")
                    serviceorder = $(this).attr("service-id");
                else
                    serviceorder += "," + $(this).attr("service-id");
            });

            $.post("saveorder.php", { order: serviceorder })
                .done(function (result) {
                    if(alert("Palveluiden järjestys on tallennettu \nTallennetut tiedot: " + result)){}
                    else window.location.reload(true);
                })
                .fail(function (data) {
                    alert("Error: " + data);
                });

        }
    </script>
    ');
}