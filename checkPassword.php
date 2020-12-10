<?php
include_once 'dbConnection.php';
    $esvalido =  1;
    $password =  $_POST['password'];
    
    if($password != '1234')
    {
    $esvalido = 0;
    }
    echo $esvalido;

?>