<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login form</h1><br><br>

    
   <center>
   <form style="width:300px; height:200px; border:2px solid black" action="" method="post" >
        <label for="">Username</label><br>
        <input type="text" name="Uname" required><br><br>


        <label for="">Password</label><br>
        <input type="password" name="pass" required><br><br>

        <button type="submit" name="login">Login</button>&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="reset" name="cancel">cancel</button><br><br>

</form>
   </center>
</body>
</html>

<?php
include('connection.php');
session_start();

error_reporting(0);

if (isset($_POST['login'])) {
   
    $username=$_POST['Uname'];
    $password=$_POST['pass'];

    $sql="SELECT * FROM `users` WHERE `username`='$username' && `password`='$password'";
    $query=mysqli_query($conn,$sql);
    $rowcheck=mysqli_num_rows($query);

    $call=mysqli_fetch_assoc($query);

    if ($call['username']==$username && $call['password']==$password) {


        echo "you are allowed";
        $_SESSION['username']=$call['username'];
        $_SESSION['email']=$call['email'];
        $_SESSION['pass']=$call['password'];
       header('location:homepage.php');


        
    }else{

        echo "wrong username and password";
    }
}
?>