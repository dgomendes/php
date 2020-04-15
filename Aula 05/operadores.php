<?php
//= é um sinal de atribuição

$nome = "Diego";
echo "</br>";

// . Sinal de concatenação
echo $nome . " Mendes";
echo "</br>";

//.= resulta no valor da variável seguido do valor informado depois
//Diego Mendes
$nome .= " Mendes";
echo $nome;
echo "</br>";

///// Operadores Matemáticos////
//Soma com atribuição
$valortotal = 0;

$valortotal += 100;


$valortotal += 25;

echo $valortotal;
echo "</br>";
////Subtração com atribuição////

$valortotal -= 25;

//Atribuição com percentual
$valortotal *= .9;
echo $valortotal;
?>