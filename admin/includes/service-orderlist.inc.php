<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php';

function makeList() {

    $object = new Service();
    $array = $object->getServiceToArray();
    $amount = count($array);

    for ($i=0; $i <= $amount-1; $i++) { 
        printf(
        '<li service-id="'.$array[$i][0].'" class="bg-gray-100 border-bottom-info ui-state-default">'.$array[$i][1].'<br>
            <a href="edit-service.php?type=edit&id='.$array[$i][0].'" style="color: rgb(230, 149, 0);">Muokkaa</a>
            <a href="edit-service.php?type=delete&id='.$array[$i][0].'" style="color: red;"> Poista</a>
        </li>');
    }
}

function makeJS() {

    $object = new Service();
    $array = $object->getServiceToArray();
    $amount = count($array);

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
                    alert("Palveluiden järjestys on tallennettu \nTallennetut tiedot: " + result + "\nKoodissa laskeminen alkaa nollasta, eli 0 = ensimmäinen");
                })
                .fail(function (data) {
                    alert("Error: " + data);
                });

        }
    </script>
    ');
}