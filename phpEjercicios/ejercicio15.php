<!DOCTYPE html>
<head>
</head>
<body>
   <form>
        <label>Ingrese el numero de cuadernos comprados:</label>
        <input name="a">
        <input type="submit"></input>
        
        <div>
            <?php
                $a = $_GET['a'];
                $l = 0;
                $c = 0;
                $n = 0;

                if($a<12){
                    echo "No tiene obsequios";
                }else if($a >=12 && $a<24){
                    $l = $a/4;
                    echo "Recibira: " . intval($l) . " lapiceros Lucas";
                }else if ($a>=24 && $a<36){
                    $c = ($a/4)*2;
                    echo "Recibira: " . intval($c) . " lapiceros Cross";
                }else if($a>=36){
                    $n = ($a/4)*3;
                    $l = 1;
                    $c = 1;
                    echo "Recibira: " . intval($n) . " lapiceros Novo. Ademas, ".$l." lapicero Lucas y ".$c. " lapicero Cross";
                }
                
                
            ?>
      </div>
   </form>
</body>