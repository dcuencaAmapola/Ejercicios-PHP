<!DOCTYPE html>
<head>

</head>
<body>
    <form>
        <label>Ingrese un numero positivo: </label>
        <input name="n"></input>
        <button type="submit">Ingresar</button>
    </form>

    <?php
        $n = $_GET["n"];
        $rev = 0;
        $parar = false;
        
        while(!$parar) {
            $rev = $rev * 10 + ($n % 10);
            $n = intval($n/10);
            if($n == 0){
                $parar = true;
            };
            
        };
        echo $rev;
    ?>
</body>