<?php
    $file = fopen("teste.txt","w+");
    
    fclose($file);

    unlink("teste.txt");

    echo "<script>alert('Arquivo removido com sucesso');</script>"
?>