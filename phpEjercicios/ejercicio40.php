<!DOCTYPE html>
<head>

</head>
<body>
    <form>
        <label>Ingrese el numero de filas A: </label>
        <input name="filasA"></input>
        <br>
        <label>Ingrese el numero de columnas A: </label>
        <input name="columnasA"></input>
        <br>
        <label>Ingrese el numero de filas B: </label>
        <input name="filasB"></input>
        <br>
        <label>Ingrese el numero de columnas B: </label>
        <input name="columnasB"></input>
        <button type="submit">Ingresar</button>
    </form>

    <?php
        $filasA = $_GET["filasA"];
        $columnasA = $_GET["columnasA"];
        $filasB = $_GET["filasB"];
        $columnasB = $_GET["columnasB"];
        $matriz = [];
        echo 'Matriz A: <br>';
        $matrizA = generarMatriz($filasA,$columnasA);
        echo 'Matriz B: <br>';
        $matrizB = generarMatriz($filasB,$columnasB);

        intercambiar($matrizA,$matrizB,$filasA,$filasB,$columnasA,$columnasB);

        function imprimirMatriz($matriz,$filas,$columnas){
            for($i = 0; $i<$filas;$i++){
                for($j = 0; $j < $columnas;$j++){
                    echo ' '.$matriz[$i][$j];
                }
                echo '<br>';
            }
        };
        
        function generarMatriz($filas,$columnas){
            $matriz = [];
            for($i = 0; $i<$filas;$i++){
                for($j = 0; $j < $columnas;$j++){
                    $matriz[$i][$j] = $i.$j;
                    echo ' '.$matriz[$i][$j];
                }
                echo '<br>';
            }
            return $matriz;
        };

        function menor($matriz,$filas,$columnas){
            $var = $matriz[0][0];
            for($i = 0; $i < $filas; $i++){
                for($j = 0; $j < $columnas; $j++){
                    if($matriz[$i][$j] < $var){
                        $var = $matriz[$i][$j];
                    }
                }
            }
            return $var;
        }

        function mayor($matriz,$filas,$columnas){
            $var = $matriz[0][0];
            for($i = 0; $i < $filas; $i++){
                for($j = 0; $j < $columnas; $j++){
                    if($matriz[$i][$j] > $var){
                        $var = $matriz[$i][$j];
                    }
                }
            }
            return $var;
        }

        function intercambiar($matrizA,$matrizB,$filasA,$filasB,$columnasA,$columnasB){
            $min = menor($matrizA,$filasA,$columnasA);
            $max = mayor($matrizB,$filasB,$columnasB);

            for($i = 0; $i < $filasA; $i++){
                for($j = 0; $j < $columnasA; $j++){
                    if($matrizA[$i][$j] == $min){
                        $matrizA[$i][$j] = $max;
                    }
                }
            }

            for($i = 0; $i < $filasB; $i++){
                for($j = 0; $j < $columnasB; $j++){
                    if($matrizB[$i][$j] == $max){
                        $matrizB[$i][$j] = $min;
                    }
                }
            }
            echo 'Intercambio Realizado.<br>';

            imprimirMatriz($matrizA,$filasA,$columnasA);
            echo '<br>';
            imprimirMatriz($matrizB,$filasB,$columnasB);
        }
    ?>
</body>