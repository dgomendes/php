<?php

    $name = "images";

    //IsDir verifica existencia do diretorio
    if (!is_dir($name)) {
        mkdir($name);
        echo "Diretório criado com sucesso";
    }
    else
    {

        //Comando que apaga o diretorio rm_dir
        rmdir($name);
        
        //echo "O diretório $name já existe"; 
    }
?>