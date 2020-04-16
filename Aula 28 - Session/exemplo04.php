<?php
    require_once("config.php");

    //Força a criação de uma nova sessão
    echo session_regenerate_id();

    echo '</br>';
    
    echo session_id();
    echo '</br>';
    echo '</br>';
    var_dump($_SESSION);

?>