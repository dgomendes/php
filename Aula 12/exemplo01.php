<?php
    $condicao = true;

    while ($condicao) {
        
        $numero = rand(1, 10);

        if ($numero == 3) {
           echo "TREES !!!</br>";
           $condicao = false;
        }
        else 
        {
            echo "Número $numero</br></br>";
         }


    }

?>