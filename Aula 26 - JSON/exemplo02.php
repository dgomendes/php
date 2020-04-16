<?php
$json = '[{"nome":"Joao","idade":25},{"nome":"Diego","idade":23}]';


//O comando json_decode, transforma um objeto json em um array
//o true informado transforma o em array, caso seja false, o mesmo será transformado em objeto
$data = json_decode($json,true);

var_dump($data);

echo '</br>';
echo '</br>';
echo '</br>';

echo $json;
?>