<?php 
    require_once 'BlogBusinessService.php';
    $blog_id = $_POST["blog_id"];
    $blog = getBlogById($blog_id);
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
    <title>Update Blog</title>
    <link rel="stylesheet" href="main.css"/>
</head>
<body>
    <?php include 'DefaultNavbar.php'?>
    <form action="AddBlogHandler.php" method="POST">
        <h1>Update Blog</h1>
        <input type="hidden" name="blog_id" value="<?php echo $blog[0]?>">
        <p>Title</p>
        <input type="text" name="title" minlength="1" maxlength="299" value="<?php echo $blog[1]?>" required/>
        <p>Body</p>
        <textarea name="body" id="" cols="30" rows="10"  minlength="3" maxlength="499" required><?php echo $blog[2]?></textarea>
        <input type="submit" name="submit" value="Update">
    </form>
    <?php include 'DefaultFooter.php'?>
</body>
</html>