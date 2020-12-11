<?php 
  include 'dbConnection.php';
  session_start();

  $pdo = connect();

  $stmt = $pdo -> prepare("DELETE FROM noticias WHERE id = :id");

  $stmt -> bindParam(':id',$_GET['id']);

  $stmt -> execute();
  unset($_SESSION['pass']);
  header('location: index.php');
?>