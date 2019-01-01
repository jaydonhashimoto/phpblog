<?php 
    require_once '../Business/UserBusinessService.php';
    require_once '../Models/User.php'; 
    
    //get user info from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    $isDuplicateUser = getUser($username);
    //if user is not found, add user
    if($isDuplicateUser == false)
    {
        addUser($username, $password);
        //return login page
        header("Location: ../login.php");
        die();
        
    } 
    else 
    {
   
        //return login page
        //include "../register.php";
        header("Location: ../register.php", $message);
        die();
        
    }
    
?>