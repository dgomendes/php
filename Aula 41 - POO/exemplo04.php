<?php
    class Endereco
    {
        private $logradouro;
        private $numero;
        private $cidade;

        //Método mágico: Possuem __ na frente
        //Método __construct é chamado toda vez 
        //que um objeto novo é instanciado. 
        public function __construct($a,$b,$c)
        {
            $this->logradouro = $a;
            $this->numero = $b;
            $this->cidade = $c;
        }
        public function __destruct()
        {
            var_dump("DESTRUIR");
        }

        public function __toString()
        {
            return $this->logradouro.", ".$this->numero. " - ".$this->cidade;
        }
    }


    $meuEndereco = new Endereco("Rua 2","123","Moratão");
    var_dump($meuEndereco);

?>