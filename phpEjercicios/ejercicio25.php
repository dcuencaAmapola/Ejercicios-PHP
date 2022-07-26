<!DOCTYPE html>
<head>

</head>
<body>
    Generacion de la serie <br/>
    Inicio 5<br/>Fin 23<br/>


    <?php
        $a = 1;
        $b = 23;
        $esVerdaero = true;

        do{
            echo '<br>Serie: '. $a . ' ';
            if($esVerdaero){
                $a += 4;
            }else{
                $a -=2;
                $esVerdaero = false;
            }

        } while($a <= $b);
    ?>
</body>