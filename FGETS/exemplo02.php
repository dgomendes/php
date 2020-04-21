<?php
    $filename = "php7.png";

    $base64 = base64_encode(file_get_contents($filename));

    $fileinfo = new finfo(FILEINFO_MIME_TYPE);

    $nimetype = $fileinfo->file($filename);

    $base64encode = "data:".$nimetype.";base64,".$base64;

   // echo $base64encode;
    /*<a href="<?=$base64enconde?>" target="_blank">Link para imagem
*/
?>
<a href="<?=$base64encode?>" target="_blank">Link para imagem</a>

<img src="<?=$base64encode?>" alt="">
