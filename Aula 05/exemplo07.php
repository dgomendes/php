<?php
    $resultado = 10 + 3 / 2;

    echo $resultado;

    $resultado = (10 + 3) / 2;

    echo "</br>";
    echo $resultado;

    //////////

    
//Operador lógico E (&&)
    $resultado2 = (10 + 3) / 2 > 5 && 10 + 5 < 30;

    echo "</br>";
    var_dump($resultado2);

//Operador lógico OU (||)
    $resultado3 = (10 + 3) / 2 > 8 || 10 + 5 < 30;

    echo "</br>";
    var_dump($resultado3);

    
?>