<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>testside</title>
    </head>
    <body>
        <?php
            $nextAlder = intval($_GET["alder"]) + 5;
            echo "Velkommen " . $_GET["name"] . ". Der er " . strlen($_GET["name"]) . " bogstaver i dit navn og dit navn stavet bagfra er " . strrev($_GET["name"]) . ".";
            echo "<br>";
            echo "Om 5 år er du " . $nextAlder . " år gammel ";
        ?>

    </body>
</html>
