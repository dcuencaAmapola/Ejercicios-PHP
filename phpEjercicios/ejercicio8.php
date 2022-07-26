<!DOCTYPE html>
<head>
</head>
<body>
   <form>
        <label>Ingrese 1 para Si, 2 para No</label>
        <br>
        <label>Ingrese la cantidad de encuestados:</label>
        <input name="a">
        <input type="submit"></input>
        
        <div>
            <?php
                $a = $_GET['a'];
                $i = 1;

                while($i<=$a){
                    echo '¿Tiene televidor?';
                    echo '<input type="radio">';
                    

                }

            ?>
      </div>
   </form>
</body>