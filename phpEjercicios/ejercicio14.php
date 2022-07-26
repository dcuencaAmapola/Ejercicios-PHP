<!DOCTYPE html>
<head>
</head>
<body>
   <form>
        <label>Ingrese un numero entero:</label>
        <input name="a">
        <input type="submit"></input>
        
        <div>
            <?php
                $a = $_GET['a'];
                
                if($a<=9999 && $a >0){
                    if($a >=1 && $a <= 9){
                        echo "000".$a;
                    }else if($a >=10 && $a<=99){
                        echo "00".$a;
                    }else if($a >= 100 && $a<=999){
                        echo "0".$a;
                    }else if($a >= 1000 && $a<= 9999){
                        echo $a;
                    }
                }else{
                    echo "Numero invalido";
                }
            ?>
      </div>
   </form>
</body>