<?php
session_start();
$conn=mysqli_connect("localhost","root","","a3");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register Form</title>
    <link rel="stylesheet" href="loginpage.css" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
</head>
<body>
 
<div class="container" style="height:400px">
<div class="glass"><h3> Sign In </h3>
<form action="register.php" method="post">
<div class="user"><input type="email" name="user_email" placeholder="Username/Email-address" >
<span><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span></div>
<div class="user"><input type="password" name="user_password" placeholder="Password">
<span><i class="fa fa-lock" aria-hidden="true"></i></span></div>
<div class="user"><input type="text" name="user_city" placeholder="enter your city">
<span><i class="fa fa-lock" aria-hidden="true"></i></span></div>
<div class="user"><input type="text" name="user_name" placeholder="Enter your name " >
<span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span></div>
<br>
<input type="submit" value="Register" name="user_login" >
<br><br>
</form>

</div>
</div> 
</body>
</html>