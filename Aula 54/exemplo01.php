<?php
    $conn = new mysqli("localhost","root","","dbphp7");

    if($conn->connect_error)
    {
        echo "Error: " .$conn->error;
    }
    else
    {
        echo "<script>alert('Conection sucess');</script>";
    }

   /* $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");
    $stmt->bind_param("ss",$login,$pass);

    $login = "user";
    $pass = "123456";

    $stmt->execute();

    $login = "root";
    $pass = "987654321";

    $stmt->execute();
*/

?>