<?php
    session_start();
    include '../conecta.php';

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "select * from login where nome= '" . $usuario . "'";
    $stmt = $dbh->prepare($sql);
    
    $stmt->execute();
    $rows = $stmt->fetchAll();
    foreach ($rows as $rs)
    {
      $idUser = $rs['idUser'];
      $nmUser = $rs['nmUser'];
      $data = $data['$data'];
     }

?>