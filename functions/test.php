<?php
    require_once "conn.inc.php";
    require_once "fptext.inc.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
        <?php
            $title = new Heading;
            echo $title->getHeading();
        ?>
    </body>
</html>