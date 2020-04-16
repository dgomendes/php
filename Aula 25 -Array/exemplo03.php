<?php
    $pessoas = array();
/* A função arraypush() insere um valor no array ja criado e informado. 
O primeiro parametro a ser informado na função é justamente o array que
 receberá o novo valor  */
    array_push($pessoas, array(
        'nome'=>'Diego Mendes',
        'idade'=>23,
    ));

    array_push($pessoas, array(
        'nome'=>'Joao',
        'idade'=>28,
    ));


    print_r($pessoas);
    echo "</br>";
    print_r($pessoas[0]['nome']);
    
?>