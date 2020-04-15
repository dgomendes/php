<?php

//Variaveis simples
    $nome = "Diego Mendes";
    $email = 'diegomendes@gmail.com';

    $ano = 1997;

    $salario = 5500.99;

    $bloqueado = false;

    ////////////////////////////////////////
//Variáveis do tipo composto

    //Array
    $frutas = array("abacaxi","laranja","manga");

    echo $frutas[2];


    //Objeto
    echo "</br>";
    $nascimento = new DateTime();
    var_dump($nascimento);

    ////////////////////////////////////////
//Tipos especial
    $arquivo = fopen("tiposDados.php","r");
    echo "</br></br>";
    var_dump($arquivo);

    $nulo = NULL;

?>