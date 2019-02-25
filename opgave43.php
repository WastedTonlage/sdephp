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
            $email = $_GET["email"];
            if (strlen($email) > 7 && strlen($email) < 30) {
                if (strstr($email, "@")) {
                    if (substr($email, strlen($email) - 3 , 3) == ".dk") {
                        echo "valid email";
                    }
                    else {
                        echo "invalid email: wrong TLD";
                    }
                }
                else {
                    echo "invalid email: doesn't contain @";
                }
            }
            else {
                echo "invalid email: length is invalid";
            }
        ?>
    </body>
</html>
