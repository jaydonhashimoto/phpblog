<?php 
    require 'UserBusinessService.php';
    
    //get user info from form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

    $isDuplicateUser = getUser($username);
    //if user is not found, add user
    if($isDuplicateUser == false)
    {
        addUser($username, $hashedPass);
        //return login page
        header("Location: login.php");
        die();
        
    } 
    else 
    {
        //return login page
        //include "../register.php";
        header("Location: register.php");
        die();
    }
?>