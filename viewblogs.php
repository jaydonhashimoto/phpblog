<?php
    require_once 'BlogBusinessService.php';
    $blog = getAllBlogs();
    /**
     * [0] = blog id
     * [1] = title
     * [2] = body
     * [3] = user id
     * [4] = username
     */
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
            ?><a href="viewblog.php?blog=<?php echo $blog[$x][0]?>"><?php print($blog[$x][1]." by:".$blog[$x][4]);?></a> <br/> <?php
        }
    ?>
    <?php include 'DefaultFooter.php'?>
</body>
</html>
