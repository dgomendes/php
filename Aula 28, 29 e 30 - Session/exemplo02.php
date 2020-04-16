<?php
require_once("config.php");

//a função session_unset LIMPA a variável de sessão informada
//Caso não seja informado a variável de sessão noa função, serão 
//limpas todas as variáveis de sessão
session_unset($_SESSION['nome']);

//
echo($_SESSION["nome"]);


?>