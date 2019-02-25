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
            //Opgave 1, 2 & 3
            $alder = 16;
            if ($alder > 17) {
                echo "Du har stemmeret";
            } elseif ($alder == 17) {
                echo "Du får stemmeret om et år";
            } 
            else {
                echo "Du har ikke stemmeret";
            }
        ?>
    </body>
</html>
