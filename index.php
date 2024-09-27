<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create an account</h1>
    <form action="" method="post" >
        <label for="">Username</label><br>
        <input type="text" name="Uname" required><br><br>

        <label for="">Email</label><br>
        <input type="email" name="email" required><br><br>

        <label for="">Password</label><br>
        <input type="password" name="pass" required><br><br>

        <button type="submit" name="send">Register</button>&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="reset" name="cancel">cancel</button><br><br>
        <p>If you have an account click here <a href="login.php">Login</a></p>

    </form>
</body>
</html>

<?php
include('connection.php');
if (isset($_POST['send'])) {
   
    $user=$_POST['Uname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    $sql="INSERT INTO `users` VALUES('','$user','$email',$pass)";
    $query=mysqli_query($conn,$sql);

    if ($query == true) {
       
        echo"Data inserted";
    }
    else {
        echo"failed";
    }
}
?>