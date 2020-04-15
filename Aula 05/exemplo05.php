<?php

// ?? Caso o valor informado antes desse operador seja nulo, 
//ele executará o trecho de código seguinte
    $a = NULL;
    $b = NULL;
    $c = 10;
    
    //Imprima na tela o valor de $a, caso seje nulo
    //mostre o b, e caso o mesmo seja nulo, mostre o c
    echo $a ?? $b ?? $c;
?>