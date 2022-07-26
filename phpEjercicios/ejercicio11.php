<!DOCTYPE html>
<head>
</head>
<body>
   <form>
        <label>Ingrese el puntaje obtenido:</label>
        <input name="a">
        <input type="submit"></input>
        
        <div>
            <?php
                $a = $_GET['a'];

                $val;
                
                if($a==0){
                    $val = 0;
                }else if($a>=1 && $a<=5){
                    $val = 6;
                } if($a>=6 && $a<=8){
                    $val = 9;
                }else if($a>=9 && $a<=10){
                    $val = 10;
                };

                echo "El puntaje calculado fue: " . $val;
            ?>
      </div>
   </form>
</body>