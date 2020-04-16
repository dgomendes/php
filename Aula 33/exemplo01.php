<?php
    $a = 10;
    $b = 10;
//Passagem de parametros por valor, não tem alteração do valor da variável

//Passagem de parametro por referencia, é feita a alteração do valor da variável, atraves do & antecedendo a variável



//Passagem por valor
    function trocaValor($a)
    {
        $a += 50;

        return $a;
    }


    // Passagem por referência
    function trocaValorRef(&$c)
    {
        $c += 50;

        return $c;
    }


    

    trocaValorRef($b);


    
    echo $a;
    echo '</br>';
    echo $b;
?>