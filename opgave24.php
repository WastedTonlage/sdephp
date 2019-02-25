<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MY NEW SIDE</title>
    </head>
    <body>
        
        <?php
$alder = rand(-100, 200);
        echo $alder;
        if($alder <= 0 || $alder >= 130){
        echo "Ugyldig alder";}
        
        else {
        /   if($alder < 18){
                echo "Du får ungdomsrabat";
            }
            elseif($alder >= 18 && $alder <=65){
                echo "Du få ingen rabat";
            
           }
             else {
                echo "Du få pensionistrabat";
           }
            }
           $alder = 17;
            if($alder = 18) {
                echo 'Alder er 18 år';
                            }
            else {
                echo 'Alder er ikke 18 år';
                            }
        //    = Alder er 18 år.
        
        ?>
        

    </body>
</html