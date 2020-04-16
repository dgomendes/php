<?php
    require_once("config.php");

    echo session_save_path();

    echo '</br>';
    
    var_dump(session_status());

    switch (session_status()) {
        case 'PHP_SESSION_DISABLED':
            echo "As conexões ESTÃO desabilitadas";
            break;
        
        case 'PHP_SESSION_NONE':
            echo "As conexões estão habilitadas mas nenhuma existe;";
            break;

        case 'PHP_SESSION_ACTIVE':
            echo "As conexões estões estão habilitadas";
            break;
    }
    ?>