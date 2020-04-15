<?php

$a = 30;
$b = 55;

$c = 55.0;
$d = 55;

//Mostra o tipo do retorno, se é verdadeiro ou falso
var_dump($a > $b);
echo "</br>";

var_dump($b > $a);
echo "</br>";

//Comparação de valores
var_dump($c == $d);
echo "</br>";

//Comparação de valores e tipo de variável
var_dump($c === $d);
echo "</br>";
//////////////

//Verifica se os valores das variáveis são diferentes
var_dump($c != $d);
echo "</br>";

//Verifica se os valores e os tipos das variavéis diferem
var_dump($c !== $d);
echo "</br>";

?>