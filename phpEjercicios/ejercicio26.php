<!DOCTYPE html>
<head>

</head>
<body>
    <form>
        <label>Ingrese la cantidad de numeros a sumar</label>
        <input name="a"></input>
        <button type="submit">Ingresar</button>
    </form>

    <?php
        $a = $_GET["a"];
        $b = 5;
        $cont = 0;

        while($cont<=$a){
            echo '<br>'.$b;
            $b +=5;
            $cont++;
        }
    ?>
</body>