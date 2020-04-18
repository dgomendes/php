<?php
    interface Veiculo
    {
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($marcha);


    }

    class Automovel implements Veiculo
    {
        public function acelerar($velocidade)
        {
            echo "O veículo acelerou ate $velocidade km/h";
        }

        public function frenar($velocidade)
        {
            echo "O veículo frenou ate a velocidade $velocidade km/h";
        }

        public function trocarMarcha($marcha)
        {
            echo "O veículo engatou a $marcha ° marcha.";
        }
    }
?>