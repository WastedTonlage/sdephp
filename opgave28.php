<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MY NEW SIDE</title>
    </head>
    <body>
        
        <?php
 
            $TAL = rand(1,6);
            switch ($TAL)
                {
                case 1:
                    echo "I";
                    break;
                case 2:
                    echo "II";
                    break;
                case 3:
                    echo "III";
                    break;
                case 4:
                    echo "IV";
                    break;
                case 5:
                    echo "V";
                    break;
                case 6:
                    echo "VI";
            }
        
        ?>
        

    </body>
</html