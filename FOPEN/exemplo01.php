<?php
    $file = fopen("log.txt","a+");

    fwrite($file, date("d-m-Y H:i:s"). "\r\n");

    fclose($file);

    echo "<script>alert('Arquivo criado com sucesso');</script>";
    

?>