<?php


    $image = imagecreatefromjpeg("original.jpg");

    $titleColor = imagecolorallocate($image, 0,0,0);

    $gray = imagecolorallocate($image, 100,100,100);

/*    imagettftext($image, 32, 0,450, 150, $titleColor,"fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan_Regular.ttf","CERTIFICADO");
    imagettftext($image, 32, 0,440, 350, $titleColor,"fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball_Regular.ttf","Divanei Aparecido");*/

    $p1 =__DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf";
    $p2 =__DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf";

    /*echo "$p1</br>";
    echo "$p2</br>";
*/
    
    imagettftext($image, 32, 0,450, 150, $titleColor,$p1,"CERTIFICADO");
    imagettftext($image, 32, 0,440, 350, $titleColor,$p2,"Divanei Aparecido");
    
    imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d-m-Y"), $titleColor);

    header("Content-type: image/jpeg");

    imagejpeg($image);

    imagedestroy($image);
    

?>