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
            $NavnListe = array('Peter','Niels','Mikkel','Flemming', 'Hans', 'Nikolaj');

            foreach ($NavnListe as $Navn) {
                echo $Navn;
            }

        ?>

    </body>
</html>
