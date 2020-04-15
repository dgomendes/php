<?php
    $frase = "A repetição é a mãe da retenção";
    $palavra = "mãe";

        /*A função strpos() retorna a posição na string que que o texto informado se encontra.
        strpos($texto, $textoProcurado) */
        $q = strpos($frase, $palavra);
        

        /* A função substr() é utilizada para cortar frases.
        str($stringQueSeraCortada, $indexInicial, $indexFinal) */
        $texto = substr($frase,0,$q);
        echo $texto;
        echo "</br>";

        //strlen() retorna a quantidade de caracter daquela string
        $texto2 = substr($frase, $q+strlen($palavra), strlen($frase));
        echo $texto2;
        echo "</br>";
    var_dump($q);
?>