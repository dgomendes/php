<?php


function ola()
{
    //Retorna em um array todos os argumentos passasdos nessa função
    $argumentos = func_get_args();
    
    return $argumentos;


}

var_dump(ola("Bom dia",10));

?>