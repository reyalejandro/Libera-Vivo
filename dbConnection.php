<?php 

function connect() {
  $host='localhost';
  $user='root';
  $pass='';
  $db='diario';

  return new PDO("mysql:host={$host};dbname={$db}", $user, $pass);

  //$conn = mysqli_connect($host,$user,$pass,$db);
}

?>
