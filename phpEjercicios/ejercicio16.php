<!DOCTYPE html>
<head>
</head>
<body>
   <form>
   <label>Ingrese su nacionalidad:</label>
        <input name="a">
        <br>
        <label>Ingrese su sexo:</label>
        <input name="b">
        <br>
        <label>Ingrese la talla:</label>
        <input name="c">
        <br>
        <input type="submit"></input>
        
        <div>
            <?php
            //este ejercicio requeria de 
                $a = $_GET['a'];//variable de nacionalidad
                $b = $_GET['b'];//variable de sexo
                $c = $_GET['c'];//variable de talla en 
                $talla = '';

                switch ($a) {
                    case 'P':
                        switch ($b){
                            case 'H':
                                switch ($c){
                                    case 'S':
                                        $talla = 5;
                                    break;
                                    case 'M':
                                        $talla = 7;
                                    break;
                                    case 'L':
                                        $talla = 10;
                                    break;
                                    default:
                                        echo "Dato invalido";
                                    break;
                                }
                            break;
                            case 'Mu':
                                switch ($c){
                                    case 'S':
                                        $talla = 4;
                                    break;
                                    case 'M':
                                        $talla = 9;
                                    break;
                                    case 'L':
                                        $talla = 12;
                                    break;
                                    default:
                                        echo "Dato invalido";
                                    break;
                                }
                            break;
                        }
                    break;
                    case'E':
                        switch ($b){
                            case 'H':
                                switch ($c){
                                    case 'S':
                                        $talla = 4;
                                        break;
                                    case 'M':
                                        $talla = 9;
                                        break;
                                    case 'L':
                                        $talla = 12;
                                        break;
                                    default:
                                        echo "Dato invalido";
                                        break;
                                }
                            break;
                            case 'Mu':
                                switch ($c){
                                    case 'S':
                                        $talla = 5;
                                    break;
                                    case 'M':
                                        $talla = 7;
                                    break;
                                    case 'L':
                                        $talla = 10;
                                    break;
                                    default:
                                        echo "Dato invalido";
                                        break;
                                }
                            break;
                        }
                    break;
                }
                echo "La talla correspondiente a ". $c . " es " . $talla;
            ?> 
      </div>
   </form>
</body>