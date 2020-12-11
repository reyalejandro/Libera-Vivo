<?php
include_once 'dbConnection.php';
session_start();
    $esvalido =  true;
    $password =  $_POST['password'];
    
    if($password != 1234)
    {
    $esvalido = false;
    } else
    {
        $_SESSION['pass'] = $password;
        $esvalido = true;
        header("location: admin.php");
    }
    echo $esvalido;
?>