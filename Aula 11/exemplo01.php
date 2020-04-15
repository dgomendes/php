<?php
    $meses = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho",
            "Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

            //Foreach: laço para cada, utilizado em arrays. Para cada item no array é 
            //criado uma variavel que será utilizada no código
            foreach ($meses as $index => $mes) {
                echo "O mês é $mes </br>";
                echo "O index é $index </br></br>";
            }

?>