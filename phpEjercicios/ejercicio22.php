<!DOCTYPE html>
<head>
</head>
<body>
   <form>
        <label>Ingrese la cantidad entradas a comprar:</label>
        <input name="a">
        <br>
        <label>Ingrese el tipo de entrada (1)Trubuna Norte, (2)Tribuna Sur, (3)Tribuna Oriente, (4)Tribuna Occidente:</label>
        <input name="b">
        <input type="submit"></input>
        
        <div>
            <?php
                $a = $_GET['a'];
                $b = $_GET['b'];
                $total = 0;
                
                if($a > 0){
                    switch ($b) {
                        case 1: 
                            $total = $a * 25;
                        break;
                        case 2: 
                            $total = $a * 25;
                        break;
                        case 3: 
                            $total = $a * 45;
                        break;
                        case 4: 
                            $total = $a * 65;
                        break;
                    }
                }else{
                    echo 'Ingrese un numero valido';
                }

                echo 'El total de su compra seria: '.$total.' de '.$a.' entradas para la opcion '.$b;
            ?>
      </div>
   </form>
</body>