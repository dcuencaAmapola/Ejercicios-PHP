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
                
                if($a<=9 && $a>=-9){
                    echo $a . " tiene 1 cifra.";
                }else if($a<=99 && $a>=-99){
                    echo $a . " tiene 2 cifras.";
                }else if($a<=999 && $a>=-999){
                    echo $a . " tiene 3 cifras.";
                }else{
                    echo "No es un numero entero o excede las 4 cifras.";
                };
            ?>
      </div>
   </form>
</body>