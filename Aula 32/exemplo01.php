<?php
//Parametros ou argumentos são valores necessarios para determinada função funcionar corretamente

//É possivel também determinar o valor padrão de um argumento, caso ele não seje passado, o valor padrão utilizado

/* 
    function ola($texto = "jovem")
    {
        echo "Olá $texto </br>";
    }
    ola("Diego"); ====> Olá Diego
    ola();        ====> Olá jovem
    
    */
    function ola($texto)
    {
        echo "Olá $texto </br>";
    }

    ola("Diego");
    ola("João");
    ola("Maria");
?>