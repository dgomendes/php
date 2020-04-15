<?php
$anoNascimento = 1997;

//Na liha de baixo temos uma variável nome
$nomeCompleto = "Diego";

echo $nomeCompleto;

echo "</br>";

//Comando unset exclui a variável
//unset($nomeCompleto);

//Concatenação
$info = $nomeCompleto . " " .$anoNascimento;

echo $info;

//Comando exit executa o codigo até a linha que ele foi escrito
exit;


echo "</br>";

//Comando isset verifica se a variavel existe
if (isset($nomeCompleto)) {
  echo $nomeCompleto;

}
//Como a linha de cima exclui a variável,
//a linha abaixo resultaá em um erro
//echo $nomeCompleto;


?>