<?php
    $link = "https://bonsinvestimentos.com.br/wp-content/uploads/2018/07/entrar-agora-direto-no-meu-facebook.jpg";

    $content = file_get_contents($link);

    $parse = parse_url($link);

    $basename = basename($parse["path"]);

    $file = fopen($basename,"w+");

    fwrite($file, $content);

    fclose($file);



?>

<img src="<?=$basename?>">