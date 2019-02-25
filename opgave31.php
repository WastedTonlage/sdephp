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
          $maks = 10;
          $i = 1;
          $sum = 0;
          while ($i > $maks) {
              $sum += $i;
              $i++;
          }
          echo $sum;
        ?>
    </body>
</html>
