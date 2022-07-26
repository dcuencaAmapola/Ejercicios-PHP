<!DOCTYPE html>
<head>

</head>
<body>
   <form>
      <label>Ingrese la cantidad expresada en litros:</label>
      <input name="l">
      <input type="submit"></input>
      <div>
        <?php
            $l = $_GET['l'];

            $mc = $l/1000;
            $yc = $l/764.55;
            $porcentajeRiegoMC = $mc * 0.25;
            $porcentajeDomesticoMC = $mc * 0.75;
            $porcentajeRiegoYC = $yc * 0.25;
            $porcentajeDomesticoYC = $yc * 0.75;

            echo "Cantidad en Metros Cubicos: " . $mc;
            echo "<br>Cantidad en Yardas Cubicas: " . $yc;
            echo "<br>Cantidad en agua dedicada al riego en metros cubicos: " . $porcentajeRiegoMC;
            echo "<br>Cantidad en agua dedicada al consumo domestic en metros cubicos: " . $porcentajeDomesticoMC;
            echo "<br>Cantidad en agua dedicada al riego en metros cubicos: " . $porcentajeRiegoYC;
            echo "<br>Cantidad en agua dedicada al consumo domestic en metros cubicos: " . $porcentajeDomesticoYC;
        ?>
      </div>
   </form>
</body>