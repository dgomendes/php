<?php
//A função date necessita de pelo menos um parametro que indicará como ela será retornada
//Também pode ser informado como segundo parametro, um timestamp, ele equivale a data atual 
//a partir da quantidade de segundos desde 1970. Quando informado, a propria função fará essa conversão.

    //dia,mês, ano
    echo date("d/m/Y");
    echo '</br>';
    

    //Hora:Minutos:Segundos
    echo date("H:i:s");
    echo '</br>';
    echo '</br>';
    


    //Hora:Minutos:Segundos
    echo date("d/m/Y H:i:s",-1001587056248);
    echo '</br>';

    
    
   // echo time();
?>