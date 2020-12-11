<?php 
  include_once 'dbConnection.php';
  
  function getNoticia($id) {

    $pdo = connect();
  
    $stmt = $pdo -> prepare("SELECT * FROM noticias WHERE id = :id");
  
    $stmt -> bindParam(':id',$id);
  
    $stmt -> setFetchMode(PDO::FETCH_ASSOC);
  
    $stmt -> execute();
  
    return $stmt -> fetch();
  }

?>