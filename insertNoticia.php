<?php 
  include_once 'dbConnection.php';

  if (!empty($_POST['titulo']) && !empty($_POST['copete']) && !empty($_POST['imagen']) && !empty($_POST['cuerpo']) && !empty($_POST['imagen_cuerpo'])) {
  $pdo = connect();

  if (isset($_POST['id']) && $_POST['id'] != "") {
    $stmt = $pdo -> prepare("UPDATE noticias SET titulo = :titulo, copete = :copete, imagen = :imagen, cuerpo = :cuerpo, imagen_cuerpo = :imagen_cuerpo WHERE id = :id");
    $stmt -> bindParam(':id', $_POST['id']);
  } else {
    $stmt = $pdo -> prepare("INSERT INTO noticias (titulo, copete, imagen, cuerpo, imagen_cuerpo) VALUES (:titulo, :copete, :imagen, :cuerpo, :imagen_cuerpo)");
    $stmt;
  }
  
  /*$titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
  $copete = mysqli_real_escape_string($conn, $_POST['copete']);
  $imagen = mysqli_real_escape_string($conn, $_POST['imagen']);
  $cuerpo = mysqli_real_escape_string($conn, $_POST['cuerpo']);
  $imagen_cuerpo = mysqli_real_escape_string($conn, $_POST['imagen_cuerpo']);*/

  $titulo =  $_POST['titulo'];
  $copete =  $_POST['copete'];
  $imagen =  $_POST['imagen'];
  $cuerpo =  $_POST['cuerpo'];
  $imagen_cuerpo =  $_POST['imagen_cuerpo'];

  $stmt -> bindParam(':titulo', $titulo);
  $stmt -> bindParam(':copete', $copete);
  $stmt -> bindParam(':imagen', $imagen);
  $stmt -> bindParam(':cuerpo', $cuerpo);
  $stmt -> bindParam(':imagen_cuerpo', $imagen_cuerpo);

  $stmt -> execute();

  header('location: index.html');
}else {header('location: error.html'); }
?>
