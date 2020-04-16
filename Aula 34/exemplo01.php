<?php

    //Os ... indica que a função receberá x parâmetros do tipo int que será convertido em em array

    //A função array_sum($array) soma todos os itens de um determinado array

    //Os : que podem ser postos a frente da função, permite que o desenvolvedor escolha o tipo de retorno daquela função
    function soma(int ...$valores):string
    {
        return array_sum($valores);
    }

    echo soma(1,2,3);
    echo '</br>';

    echo soma(10,20,30,40);
    echo '</br>';

    echo soma(1,9);
    echo '</br>';
    echo '</br>';

    echo 'Tipo de retorno </br>';
    var_dump(soma(90,85));
    echo '</br>';    
?>