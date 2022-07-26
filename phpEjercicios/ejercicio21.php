<!DOCTYPE html>
<head>
</head>
<body>
   <form>
        <label>Ingrese el Instituto A,B,C:</label>
        <input name="a">
        <br>
        <label>Ingrese el colegio de procedencia (1)Nacional, (2)Particular:</label>
        <input name="b">
        <br>
        <label>Ingrese el monto de la pension</label>
        <input name="c">
        <input type="submit"></input>
        
        <div>
            <?php
                $a = $_GET['a'];
                $b = $_GET['b'];
                $c = $_GET['c'];
                $desc = 0;
                $total = 0;
                
                switch ($a){
                    case 'A':
                        switch ($b){
                            case 1:
                                $desc = 50;
                            break;
                            case 2:
                                $desc = 25;
                            break;
                        }
                    break;
                    case 'B':
                        switch ($b){
                            case 1:
                                $desc = 40;
                            break;
                            case 2:
                                $desc = 20;
                            break;
                        }
                    break;
                    case 'C':
                        switch ($b){
                            case 1:
                                $desc = 30;
                            break;
                            case 2:
                                $desc = 15;
                            break;
                        }
                    break;
                }
                $total = $c - ($c * ($desc/100));


                echo 'Instituto: '.$a
                .'<br>Colegio: '.$b
                .'<br>Descuento: '.$desc.'%'
                .'<br>Total: '.$total;
            ?>
      </div>
   </form>
</body>