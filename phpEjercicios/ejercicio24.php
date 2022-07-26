<!DOCTYPE html>
<head>
</head>
<body>
   <form>
        <label>Ingrese la cantidad de numeros:</label>
        <input name="a">
        <input type="submit"></input>
        
        <div>
            <?php
                $a = $_GET['a'];
                $suma = 0;
                $serie = 2;
                
                for($i = 1; $i <= $a ; $i++){
                    echo '<br>Numero de la serie: '.$serie;
                    $suma = $suma + factorial($serie);
                    echo '<br>Fatorial de '.$serie.' es '.factorial($serie);
                    $serie = $serie + 2;
                }
                echo '<br>Sumatoria = '.$suma;

                function factorial($num){ 
                    $fac = 1; 
                    for ($i = 1; $i <= $num; $i++){ 
                      $fac = $fac * $i; 
                    } 
                    return $fac; 
                }
            ?>
      </div>
   </form>
</body>