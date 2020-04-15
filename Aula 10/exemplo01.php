<?php
for($i = 0; $i < 1000; $i+=5)
{
    //Continue pula para o proximo comando.
    if ($i > 200 && $i < 800) continue; 

    //Comando Break para o laço
    if ($i === 900) break;
    echo $i . "</br>";
}
?>
