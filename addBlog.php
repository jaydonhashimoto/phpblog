<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Blog</title>
    <link rel="stylesheet" href="Resources/main.css"/>
</head>
<body>
    <?php include 'Layouts/DefaultNavbar.php'?>
    <form action="Controllers/AddBlogHandler.php" method="POST">
        <h1>Add Blog</h1>
        <p>Title</p>
        <input type="text" name="title" minlength="1" maxlength="299" required/>
        <p>Body</p>
        <textarea name="body" id="" cols="30" rows="10"  minlength="3" maxlength="499" required></textarea>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php include 'Layouts/DefaultFooter.php'?>
</body>
</html>
