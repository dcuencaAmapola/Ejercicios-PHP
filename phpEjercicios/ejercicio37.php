<!DOCTYPE html>
<head>

</head>
<body>
    <form>
        <label>Polinomio: x^2 + 5x - 4</label>
        <br/>
        <label>Ingrese la x para evaluar en el polinomio: </label>
        <input name="x"></input>
        <br/>
        <label>Ingrese la cantidad e numeros a generar: </label>
        <input name="cant"></input>
        <button type="submit">Ingresar</button>
    </form>

    <?php
        $x = $_GET["x"];//numero a evaluar en el polinomio
        $cant = $_GET["cant"];//cantidad de numero a generar para el array
        $a = 1;//primer coeficiente
        $b = 5;//segundo coeficiente
        $c = -4;//termino independeinte
        $n = 2;//potencia del primer coeficiente
        $m = 1;//potencia del segundo coeficiente

        $vector = generarArray($x, $cant);//creacion del vector
        $mostrar = implode($vector);
        echo 'Vector generado '.$mostrar.'<br>';

        evaluar($vector,$a,$b,$c,$n,$m);
        
        function evaluar($vector,$a,$b,$c,$n,$m){
            $resultado = 0;
            for($i = 0; $i < count($vector); $i++){
                $resultado = ($a*(pow($vector[$i],$n))) + ($b * (pow($vector[$i],$m))) + ($c);
                echo '('.$a.')'.$vector[$i].'^'.$n.' + ('. $b .')'. $vector[$i].'^'.$m.' + ('. $c.') = '.$resultado.'<br>';
            }
        }
        
        function generarArray($x, $cant){
            $array = [];
            $cont = 0;
            $var = $x;
            for($i = 0; $i < $cant; $i++){
                $array[$cont] = $var;
                $cont++;
                $var++;
            }
            return $array;
        };


        
    ?>
</body>