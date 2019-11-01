
<?php
session_start();

$conn=mysqli_connect("localhost","root","","a3");
 if(isset($_POST['sub'])){
    
 $cus_name=$_POST['billing_name'];
 $cus_email=$_POST['billing_email'];
 $cus_tel=$_POST['billing_tel'];
 $cus_country=$_POST['billing_country'];
 $cus_city=$_POST['billing_city'];
 $cus_address=$_POST['billing_address'];

$item_title=$_SESSION['qty'];
 $item_finalprice= $_SESSION['cartp'];
 $sql = "INSERT INTO bill (cus_email,cus_name,cus_address,cus_tel,cus_city,cus_country,item_title,item_finalprice) VALUES ('$cus_email','$cus_name','$cus_address','$cus_tel','$cus_city','$cus_country','$item_title','$item_finalprice')";

 if( mysqli_query($conn, $sql)){$id=mysqli_insert_id($conn); ?> <script>alert("inserted")</script><?php }
$cid=mysqli_insert_id($conn);
}
    
 
?>
<?php
    require 'classes/customer.php';
    
    $objCustomer=new customer();
    

    $objCustomer->setId($_SESSION['cid']);
    $customer=$objCustomer->getCustomerById();
       $cid=$_SESSION['cid'];
    require 'classes/cart2_class.php';
    $objCart=new cart;
    $objCart->setCid($customer['customer_id']);
    $cartItems=$objCart->getALLCartItems();
    $cartPrices=$objCart->calculatePrices();
    

  // print_r($cartPrices); exit;
    


?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles/cart.css"  />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<STYLE>
div{
    font-size:20px;
    font-size: 1.3em; 
    color:#000000cf;
}
body{
	margin:0;
	padding:0;
	background-image:url('https://media-public.canva.com/MADapfjUW98/1/thumbnail_large.jpg');
    background-attachment:fixed;
    background-size: cover;
	background-repeat:no-repeat;
	
	
}
</STYLE>
</head>
<body>
<button type="button"class ="btn" style="margin-top:30px; right:0px; " ><a href="logout.php">logout</a></button>
<center>
<h4  style="margin-top:5%"> INVIOCE </h4>
</center>
<form style="test-align:center"> 
<div align= "center" style="margin-top:10%, height:5px;">

<div >
 
<td > Customer Name : <?php echo $cus_name; ?></td><br>
 
   </div>
   <div>
 <td > Email : <?php echo $cus_email; ?></td><br>
 
   </div>
   <div>
   
   <td > Contact : <?php echo $cus_tel; ?></td><br>
 
   </div>
   <div>
   <td > Address : <?php echo $cus_address; ?></td><br>
 

   </div>
   <div>
 
   <td > City : <?php echo $cus_city; ?></td><br>
   </div>
   
  
   <div>
 
   <td > Country : <?php echo $cus_country; ?></td>
   </div>
  
<?php foreach($cartItems as $key=>$cartItem){ 
    $cart1=$cartItem['title'];
  $cart2=$cartItem['product_price'];
  $cartp=$cartPrices['finalPrice'];?>
   
  
  
   <br><td > Cart Items : <?php echo $cart1; ?></td><br>
   <td > Price : <?php echo $cart2; ?></td><?php }?><br>
   
    
   <td > Bill : <?php echo $cartp; ?></td>
   </div>
   </form>
</body>
</html>
