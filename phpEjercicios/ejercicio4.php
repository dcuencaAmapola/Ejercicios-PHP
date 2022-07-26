<!DOCTYPE html>
<head>

</head>
<body>
   <form>
      <label>Ingrese minutos del primer atleta:</label>
      <input name="m1">
      <br>
      <label>Ingrese segundos del primer atleta:</label>
      <input name="s1">
      <br>
      <label>Ingrese minutos del primer atleta:</label>
      <input name="m2">
      <br>
      <label>Ingrese segundos del primer atleta:</label>
      <input name="s2">
      <input type="submit"></input>
      <div>
        <?php
            $m1 = $_GET['m1'];
            $s1 = $_GET['s1'];
            $m2 = $_GET['m2'];
            $s2 = $_GET['s2'];
            $m = $m1 + $m2;
            $s = $s1 + $s2;
            $h = 0;
                        
            if($s > 60){
                $m++;
                $s = $s - 60;
                if($m > 60){
                    $h++;
                    $m = $m -60;
                }
            }

            echo 'Hora: '.$h;
            echo ' Minutos: '.$m;
            echo ' Segundo: '.$s;
        ?>
      </div>
   </form>
</body>