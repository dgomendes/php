<?php
//echo phpversion();

echo phpinfo();


    $conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","","");

    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin,");

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($results)
  // var_dump($results);
?>