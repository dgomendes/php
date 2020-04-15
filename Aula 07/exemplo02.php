<?php

//include: Inclui o arquivo exemplo01.php e com isso suas funções estão disponiveis
//Caso ele não encontre o arquivo indicado, o restante do código PHP será executado. 
//Caso o arquivo a ser incluído esteja em uma pasta acima, devera ser indicado ../ no include
    //include "exemplo01.php";


//require: Exige que o arquivo exista e o que o mesmo esteja funcionando corretamente
//Caso ele não esteja funcionando, o require retorna um erro fatal e para a execução

//require_once ou include_once inclui o arquivo somente uma vez

    require_once "exemplo01.php";

    $resultado = soma(1,2);

    echo $resultado;
?>