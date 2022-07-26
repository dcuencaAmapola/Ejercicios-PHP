<!DOCTYPE html>
<head>
</head>
<body>
   <form>
      <label>Ingrese un numero:</label>
      <input name="a">
      <input type="submit"></input>
      <div>
        <?php
            $a = $_GET['a'];
            if($a==0){
                echo 'Es Nulo';
            }else if($a>0){
                echo 'Es Positivo';
            }else{
                echo 'Es Negativo';
            }
        ?>
      </div>
   </form>
</body>