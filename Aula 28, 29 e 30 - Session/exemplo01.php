<?php
//Por padrão, as sessões não php não são iniciadas automaticamente,
//por isso, para inicia-las, usa-se o comando session_start();
session_start();

$_SESSION["nome"] = "Diego";
?>