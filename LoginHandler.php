<?php 
    require 'UserBusinessService.php';

    //get user info from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(loginUser($username, $password))
    {
        //return index page
        header("Location: index.php");
        die();
    }
    else 
    {
        //return login page
        header("Location: login.php");
        die();
    }
?>