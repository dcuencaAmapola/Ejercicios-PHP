<!DOCTYPE html>
<head>
</head>
<body>
   <form>
        <label>Ingrese el sueldo de un trabajador para saber el impuesto a pagar:</label>
        <input name="a">
        <input type="submit"></input>
        
        <div>
            <?php
                $a = $_GET['a'];
                $imp = 0;
                $sueldo = 0;
                
                if($a > 600){
                    $imp = $a * 0.1;
                }

                $sueldo = $a - $imp;

                echo 'El sueldo del trabajador es : '.$a.' y tiene que pagar un impuesto de: '.$imp;
            ?>
      </div>
   </form>
</body>