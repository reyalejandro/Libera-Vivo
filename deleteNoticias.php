<?php 
  include 'dbConnection.php';

  $pdo = connect();

  $stmt = $pdo -> prepare("DELETE FROM noticias WHERE id = :id");

  $stmt -> bindParam(':id',$_GET['id']);

  $stmt -> execute();

  header('location: admin.php');
?>