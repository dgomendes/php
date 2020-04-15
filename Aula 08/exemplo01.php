 <?php
$idade = 11;

 $idadeCrianca = 12;
 $idadeMaior = 18;
 $idadeMelhor = 65;
 if ($idade < $idadeCrianca) 
 {
     echo "Criança";
 }
 else if ($idade < $idadeMaior) {
     echo "Adolescente";
 }
 else if ($idade < $idadeMelhor) {
     echo "Adulto";
 }
 else {
     echo "Idoso";
 }
 
echo "</br>";
echo "</br>";

//If ternario: Consiste em uma condição de uma linha 
//onde o ? informa o if e o : indica o que fazer caso seja verdadeiro
echo ($idade < $idadeMaior)?"Menor de idade":"Maior de idade";
 ?>