<?php 
    //unset all session variables
    session_destroy();
    //return login page
    header("Location: login.php");
    die();    
?>