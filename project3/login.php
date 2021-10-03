<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/nav_css.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<?php include "header.php";?>
<form class="box" action="" method="POST">
    <h1>LOG IN</h1>
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="LOGIN">
</form>
<?php //include "footer.php";?>
</body>
</html>