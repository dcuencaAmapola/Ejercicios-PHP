<!DOCTYPE html>
<head>

</head>
<body>
   <form>
      <label>Ingrese la cantidad en pies:</label>
      <input name="p">
      <br>
      <label>Ingrese la cantidad en metros:</label>
      <input name="m">
      <input type="submit"></input>
      <div>
        <?php
            $p = $_GET['p'];
            $m = $_GET['m'];

            $pul = ($p * 12) + ($m/0.0254);
            $yar = ($p/3)+($m*1.09361);
            $met = ($p*0.3048)+$m;
            $mil = ($p*0.000189394)+($m*0.000621371);

            echo "Pulgadas: " . $pul;
            echo " Yardas: " . $yar;
            echo " Metros: " . $met;
            echo " Millas: " . $mil;
        ?>
      </div>
   </form>
</body>