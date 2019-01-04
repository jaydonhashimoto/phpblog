<?php
    session_start();
    require_once 'BlogBusinessService.php';
    require_once 'User.php';
    $blog_id = $_GET["blog"];
    $blog = getBlogById($blog_id);
    $user_id = getId();
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
            if($user_id !== null)
            {
                if($user_id == $blog[3])
                { ?>
                    <!--update form-->
                    <form action="updateblog.php" method="POST">
                        <input type="hidden" name="blog_id" value="<?php echo $blog[0]?>"/>
                        <input type="submit" name="submit" value="UPDATE" />
                    </form>
                    <!--delete form-->
                    <form action="DeleteBlogHandler.php" method="POST">
                        <input type="hidden" name="blog_id" value="<?php echo $blog[0]?>"/>
                        <input type="submit" name="submit" value="DELETE" />
                    </form>
                    <?php
                } 
            }
           ?>
        <h1><?php print($blog[1]);?></h1>
        <h3>by: <?php print($blog[4]);?></h3>
        <p><?php print(nl2br($blog[2]));?></p>

    <?php include 'DefaultFooter.php'?>
</body>
</html>
