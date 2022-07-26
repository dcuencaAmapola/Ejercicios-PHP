<?php
    $array = array(
        1 => 10,
        2 => 30,
        3 => 8,
        4 => 20,
        5 => 90
    );

    sort($array);
    foreach ($array as $clave => $valor) {
        echo "Numero" . $clave . " = " . $valor . "\n";
    }
?>