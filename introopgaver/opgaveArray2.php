<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MY NEW SIDE</title>
    </head>
    <body>
        
        <?php
        $Dage = array(31,28,31,30,31,30,31,30,31,30,31,30,31);
        $Måneder = array("Januar","Febuar","Marts","April","Maj","Juni","Juli","Agust","Sebtember","Oktober","November","December");
           
           for($i = 0;$i < count($Måneder);$i++){
             echo  $Måneder[$i]." : ".$Dage[$i].'<br>';  
           }
        ?>
        

    </body>
</html