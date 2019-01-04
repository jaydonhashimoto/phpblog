<?php 
    include "User.php";
    //unset al session variables
    session_start();
    session_unset();
    session_destroy();
    //return login page
    header("Location: login.php");
    die();    
?>