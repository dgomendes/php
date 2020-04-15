<?php
    $nome = "Diego";

    function teste()
    {
        //o comando global permite que a variável seje
        //visivel em outros escopos
        global $nome;
        echo $nome;
    }

teste();
?>