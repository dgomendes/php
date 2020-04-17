<?php
    class Pessoa
    {
        public $nome; //Atributo

        public function falar()// Método
        {
            return "O meu nome é ".$this->nome;
        }
    }

    $diego = new Pessoa();
    $diego->nome = "Diego Mendes";
    echo $diego->falar();
?>