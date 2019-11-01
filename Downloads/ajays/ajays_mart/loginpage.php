<?php
session_start();

$conn=mysqli_connect("localhost","root","","a3");

?>
<!DOCTYPE html>
<html> 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Login Form</title>
<link rel="stylesheet" href="loginpage.css" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
</head>
<body>
<div class="container" style="height:350px">
<div class="glass"><h3> Sign In </h3>
<form action="validate.php" method="post">
<div class="user"><input type="email" name="user_email" placeholder="Username/Email-address" required >
<span><i class="fa fa-user" aria-hidden="true"></i></span></div>
<div class="user"><input type="password" name="user_password" placeholder="password" required>
<span><i class="fa fa-lock" aria-hidden="true"></i></span></div>
<input type="submit" value="Login" name="user_login" ><br><br>
<h5> Already registered?<a href="function.php" id="register">Register!</a></h5>
</form>
<p><a  href="C:/Users/Abc/Documents/grocery/about.html"> Forgot Your Password ?</a></p>
</div>

</div>
<?php 
// if(isset($_POST['user_login'])){
// $email= $_POST['user_email'];

// $password = $_POST['user_password'];
// $select_user = "select * from customer where email = '$email' AND password = '$password' ";

// $run_user = mysqli_query($conn,$select_user);
// $check_user= mysqli_num_rows($run_user);
// // $get_ip= getRealIpAddr();
// // $select_cart= "select * from "

// if($check_user===0){
//     echo "<script>alert('Email or password is wrong, try again !')</script>";
//     exit();
// }
// else{
//     $_SESSION['email']=$email;
//     echo "<script>window.open('customers/index.php','_self')</script>";
    
// }

// }


?>

<!-- 
-->

</body>
</html>