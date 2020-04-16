<?php
$pessoas = array();

array_push($pessoas, array(
    'nome'=>'Joao',
    'idade'=>25
));

array_push($pessoas, array(
    'nome'=>'Diego',
    'idade'=>23
));

//a função json_encode() transforma um array em um objeto json();
echo json_encode($pessoas);
echo '</br>';


?>