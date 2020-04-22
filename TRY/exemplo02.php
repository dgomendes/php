<?php

    function trataNome($nome)
    {
        if (!$nome) {
            throw new Exception("Nenhum nome foi informado", 1);
            
        }

        echo ucfirst($nome). "<br>";
    }
    try 
    {
        trataNome("João");
        trataNome("");
            
    } 
    catch (Exception $e)
    {
        
    }
    finally
    {
        echo "Executou o Try";
    }
?>