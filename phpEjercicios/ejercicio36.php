<!DOCTYPE html>
<head>

</head>
<body>
    <form>
        <label>Array = [5,8,9,5,1,4,5,6,2,1,7]</label>
    </form>

    <?php
        $a = [5,8,9,5,1,4,5,6,2,1,7];
        $arraystr = implode("\n", $a);
        $reverso = reverse($a);

        $mostrar = implode("\n",$reverso);
        echo '<br> Array Invertido: '. $mostrar;
        
        function reverse($numeros){
            $arrayInvertido = [];
            for($i = 0; $i < count($numeros); $i++){
                $arrayInvertido[count($numeros) - 1 - $i] = $numeros[$i];
            }

            for($i = 0; $i < count($numeros); $i++){
                $arrayInvertido[$i]= $numeros[$i]; 
            }
            return($arrayInvertido);
        }
        
    ?>
</body>