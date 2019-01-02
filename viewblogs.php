<?php
    require_once 'BlogBusinessService.php';
    $blog = getAllBlogs();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Blogs</title>
    <link rel="stylesheet" href="main.css"/>
</head>
<body>
    <?php include 'DefaultNavbar.php'?>
    <?php 
        for($x = 0; $x < count($blog); $x++)
        {
            print("blog id = ".$blog[$x][0].": title: ".$blog[$x][1]." body: ".$blog[$x][2]." - user id = ".$blog[$x][3]." ");?> <br/> <?php
        }
    ?>
    <?php include 'DefaultFooter.php'?>
</body>
</html>
