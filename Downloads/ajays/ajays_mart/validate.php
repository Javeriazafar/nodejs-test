<?php 
@session_start();

$conn=mysqli_connect("localhost","root","","a3");
if (isset($_POST['user_login'])){
$email= $_POST['user_email'];
$password = $_POST['user_password'];

$select_user = "select * from customer where email = '$email' AND password = '$password' ";
$run_user = mysqli_query($conn,$select_user);
if(mysqli_num_rows($run_user)==1)
{
    
    echo "succefu;l";
    $_SESSION['email']=$email;
    header('location:checkout.php');
}
else {
    echo "unsuccefu;l";
    header('location:loginpage.php');
}
}
?>
