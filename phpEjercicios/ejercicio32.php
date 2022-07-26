<!DOCTYPE html>
<head>

</head>
<body>
    <form>
        <label>Ingrese la base: </label>
        <input name="base"></input>
        <br>
        <label>Ingrese la potencia: </label>
        <input name="potencia"></input>
        <button type="submit">Ingresar</button>
    </form>

    <?php
        $base = $_GET["base"];
        $potencia = $_GET["potencia"];
        
        $resultado = pow($base, $potencia);
        echo $resultado;
    ?>
</body>