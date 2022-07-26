<!DOCTYPE html>
<head>

</head>
<body>
    <form>
        <label>Ingrese el numero de filas: </label>
        <input name="filas"></input>
        <br>
        <label>Ingrese el numero de columnas: </label>
        <input name="columnas"></input>
        <button type="submit">Ingresar</button>
    </form>

    <?php
        $filas = $_GET["filas"];
        $columnas = $_GET["columnas"];
        $matriz = [];
        echo 'Matriz: <br>';

        for($i = 0; $i<$filas;$i++){
            for($j = 0; $j < $columnas;$j++){
                if(($i+$j) < ($columnas + 1) && ($i+$j) < ($filas + 1)){
                    $matriz[$i][$j] = $i.$j;
                }else{
                    $matriz[$i][$j] = 00;
                }
                echo ' '.$matriz[$i][$j];
            }
            echo '<br>';
        }
    ?>
</body>