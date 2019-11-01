<?php 
@session_start();

$conn=mysqli_connect("localhost","root","","a3");

$email= $_POST['user_email'];
$password = $_POST['user_password'];
$customer_city= $_POST['user_city'];
$customer_name = $_POST['user_name'];
$select_user = "select * from customer where email = '$email' AND password = '$password' AND address= '$customer_city' AND customer_name = '$customer_name'";
$run_user = mysqli_query($conn,$select_user);
if(mysqli_num_rows($run_user)==1)
{
    $_SESSION['email']=$email;
    
    header('location:function/function.php');
    echo " <script>alert('username already exits !')</script>";
}
else
{
    $reg = "insert into customer(email,password,address,customer_name) values ('$email','$password','$customer_city','$customer_name')";
    mysqli_query($conn,$reg);
    header('location:loginpage.php');

}


?>
<!-- <?php 

// $customer_name= $_POST['user_name'];
// $customer_email = $_POST['user_email'];
// $customer_tel = $_POST['user_mobile'];
// $customer_address  = $_POST['user_address'];
// $customer_city=$_POST['user_city'];
// $customer_country=$_POST['user_country'];
// $customers=array($customer_name,$customer_email,$customer_tel,$customer_address,$customer_city,$customer_country);
// $_SESSION['$customer_name']=$customers;
// header('location:checkout.php') ;?> -->