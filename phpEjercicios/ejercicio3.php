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
      <input type="submit"></input>
      <div>
         <?php
         $A = $_GET['a'];
         $B = $_GET['b'];
         $resultado = ($A-$B)*($A+$B);

         echo '('.$A . '-' . $B . ')(' . $A . '+'.$B.') = ';
         echo $resultado;
         ?>
      </div>
      
   </form>
</body>