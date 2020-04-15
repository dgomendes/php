<?php

    $nome = "Diego";

    //a função str_replace faz a substituição de um trecho de string informado por outro.
    //Sendo esses os parâmetros da função
    $nome = str_replace("o","0", $nome);
    $nome = str_replace("e","3", $nome);
    $nome = str_replace("i","1", $nome);

    echo $nome;

?>