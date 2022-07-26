<!DOCTYPE html>
<head>
</head>
<body>
   <form>
       <label>
           El numero indica el dia:<br>
           1.Lunes<br>
           2.Martes<br>
           3.Miercoles<br>
           4.Jueves<br>
           5.Viernes<br>
           6.Sabado<br>
           7.Domingo<br>
       </label>
        <label>Ingrese el dia de la semana que desea calcular el costo:</label>
        <input name="a">
        <br>
        <label>Ingrese la cantidad de horas que se quedo:</label>
        <input name="b">
        <br>
        <label>Ingrese la cantidad de minutos que se quedo:</label>
        <input name="c">
        <br>
        <input type="submit"></input>
        
        <div>
            <?php
                $a = $_GET['a'];
                $b = $_GET['b'];
                $c = $_GET['c'];
                $costo = 0;

                switch ($a):
                    case 1:  
                        $costo=2.0;
                    break;
                    case 2:  
                        $costo=2.0;
                    break;
                    case 3:  
                        $costo=2.0;
                    break;
                    case 4:  
                        $costo=2.5;
                    break;
                    case 5:  
                        $costo=2.5;
                    break;
                    case 6:  
                        $costo=3.0;
                    break;
                    case 7:  
                        $costo=3.0;
                    break;
                    default: 
                        $costo = -1;
                endswitch;

                if($costo == -1 || $b > 24 || $c > 59 ){
                    echo "No se pudo calcular";
                }else if($c > 5){
                    $costo = $costo * ($b +1);
                }else{
                    $costo = $costo * ($b);
                }

                echo "El costo del parqueadero es: $" . $costo;
            ?>
      </div>
   </form>
</body>