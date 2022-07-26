<!DOCTYPE html>
<head>

</head>
<body>
    <form>
        <label>Ingrese la cantidad de numeros: </label>
        <input name="a"></input>
        <button type="submit">Ingresar</button>
    </form>

    <?php
        $a = $_GET["a"];
        $b = $a;
        $cont = 1;

        while($cont<=$a){
            echo '<br>'.$b;
            $b--;
            $cont++;
        }
    ?>
</body>