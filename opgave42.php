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
          Session_start();
          if (!isset($_SESSION['antal'])) {
              $_SESSION["antal"] = 10;
              echo "10 tries left<br>";
          } else {
              echo $_SESSION["antal"] . "tries left<br>";
              $_SESSION["antal"]--;
          }
          $guess = $_GET["guess"];
          $target = 50;
          $diff = abs($guess - $target);
          if ($guess == $target) {
              echo "Hit target, Victory";
              $_SESSION["antal"] = 10;
          } elseif ($guess < 0 || $guess > 100) {
              echo "invalid number";
          } elseif ($diff < 20) {
              echo "close";
          } elseif ($diff < 50) {
              echo "sorta close";
          } else {
              echo "Far AF";
          }
        ?>
    </body>
</html>
