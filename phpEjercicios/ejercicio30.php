<!DOCTYPE html>
<head>

</head>
<body>
    <form>
        <label>Ingrese un numeros: </label>
        <input name="a"></input>
        <button type="submit">Ingresar</button>
    </form>

    <?php
        $a = $_GET["a"];
        $b = factorial($a);

        echo 'El factorial de '.$a.' es '.$b;

        function factorial($num){ 
            $fac = 1; 
            for ($i = 1; $i <= $num; $i++){ 
              $fac = $fac * $i; 
            } 
            return $fac; 
        }
    ?>
</body>