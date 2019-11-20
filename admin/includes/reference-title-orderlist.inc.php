<?php

declare(strict_types=1);
include_once 'class-autoloader.inc.php';

function makeList() {

    $object = new Reference();
    $headingsArray = $object->getRefHeadingsToArray();
    $headingsAmount = count($headingsArray);

    for ($i=0; $i <= $headingsAmount-1; $i++) { 
        printf(
        '<li referencetitle-id="'.$headingsArray[$i][0].'" class="bg-gray-100 border-bottom-info ui-state-default">'.$headingsArray[$i][1].'<br> 
            <a href="edit-reference-title.php?id='.$headingsArray[$i][0].'" style="color: rgb(230, 149, 0);">Muokkaa</a>
            <a href="includes/delete-reference-title.inc.php?id='.$headingsArray[$i][0].'" style="color: red;"> Poista</a>
        </li>');
    }
}

function makeJS() {

    $object = new Reference();
    $headingsArray = $object->getRefHeadingsToArray();
    $headingsAmount = count($headingsArray);

    printf('
    <script>
        $(function () {
            $("#sortable1").sortable();
            $("#sortable1").disableSelection();
        });
    </script>

    <script type="text/javascript">
        function saveOrder() {
            var referencetitleorder = "";

            $("#sortable1 li").each(function (i) {
                if (referencetitleorder == "")
                    referencetitleorder = $(this).attr("referencetitle-id");
                else
                    referencetitleorder += "," + $(this).attr("referencetitle-id");
            });

            $.post("includes/reference-heading-order.inc.php", { order: referencetitleorder })
                .done(function (result) {
                    if(alert("Referenssi otsikoiden järjestys on tallennettu \nTallennetut tiedot: " + result)){}
                    else window.location.reload(true); 
                })
                .fail(function (data) {
                    alert("Error: " + data);
                });

        }
    </script>
    ');
}

