<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="main.css"/>
</head>
<body>
    <?php include 'DefaultNavbar.php'?>
    <form action="RegisterHandler.php" method="POST" autocomplete="off">
    <h1>Register</h1>
        <p>Username</p>
        <input type="text" name="username" maxlength="30" minlength="3" required/>
        <br/>
        <p>Password</p>
        <input type="password" name="password" maxlength="30" minlength="3" required/>
        <br/>
        <input type="submit" name="register" value="Sign Up"/>
    </form>
    <?php include 'DefaultFooter.php'?>
</body>
</html>