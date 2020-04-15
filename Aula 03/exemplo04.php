<?php

// o $_GET é uma variável predefinida pelo php e recebe o dados 
//enviados pelo metodo get, onde as informações são passadas pelo url
//Todos os dados fornecidos pelo $_GET são retornados como string, 
//e para a sua conversão para algum outro tipo de variavel, é necessario
//um cast antecedendo o $_GET
$nome = (int)$_GET["a"];
var_dump($nome);

//Pegado o ip da pagina
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;
?>