<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('connection.php');
    session_start();
    ?>
    <h1>Welcome</h1>
    <p>Your username is <span><?php echo $_SESSION['username']." and ". $_SESSION['email']?></span></p><br><br>
    <p>Your email is <span><?php echo $_SESSION['email']?></span></p><br><br>
    <p>Your password is <span><?php echo $_SESSION['pass']?></span></p><br><br>

    <a href="logout.php">Logout</a>

    
</body>
</html>