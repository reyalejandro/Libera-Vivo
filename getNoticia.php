<?php 
  include 'dbConnection.php';

  $pdo = connect();

  $stmt = $pdo -> prepare("SELECT * FROM noticias");

  $stmt -> execute();

  $noticias = $stmt -> fetchAll(PDO::FETCH_OBJ);

  echo json_encode($noticias);
?>
