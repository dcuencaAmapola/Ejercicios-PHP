<!DOCTYPE html>
<head>

</head>
<body>
   <form>
      <label>Ingrese A:</label>
      <input name="a" placeholder="A">
      <br>
      <label>Ingrese B:</label>
      <input name="b" placeholder="B">
      <br>
      <label>Ingrese C:</label>
      <input name="c" placeholder="C">
      <input type="submit"></input>
      <div>
         <?php
         $A = $_GET['a'];
         $B = $_GET['b'];
         $C = $_GET['c'];
         $resultado = $A+$B-$C+100;

         echo $A . '+' . $B . '-' . $C . '+ 100 es: ';
         echo $resultado;
         ?>
      </div>
      
   </form>
</body>