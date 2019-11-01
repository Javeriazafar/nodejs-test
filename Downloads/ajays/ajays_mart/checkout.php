<html>
<head>
<link rel="stylesheet" href="styles/cart.css"  />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<style>
input{
  border:2px solid green;
  background:none;
	border:none;
	outline:none;
	position:relative;
	height:40px;
	background:transparent;
	border-bottom:2px solid #01403a;
	padding-left:15px;
	font-size:16px;
	box-sizing:border-box;
}
::placeholder{
  color:#01403a;
}
input[type="submit"]{
    left:50px;
	bottom:-10px;
	position:relative;
	border:none;
	outline:none;
	font-size:16px;
	background:#01403a;
	border-radius:5px;
	cursor:pointer;
	color:#7cf700ed;
	width:100px;
	height:30px;
	box-sizing:border-box;
	box-shadow:0 3px 15px rgb(1, 103, 5);
}
button{
  left:30px;
	bottom:-10px;
	position:relative;
	border:none;
	outline:none;
	font-size:16px;
	background:#01403a;
	border-radius:5px;
	cursor:pointer;
	color:#7cf700ed;
	width:100px;
	height:30px;
	box-sizing:border-box;
	box-shadow:0 3px 15px rgb(1, 103, 5);
}
body{
	margin:0;
	padding:0;
	background-image:url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/7849c3f3-615d-431b-b966-a6ba66f0322a/d3gpv0-5902e35e-be5d-4a7b-8f8b-efa8cea4bded.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzc4NDljM2YzLTYxNWQtNDMxYi1iOTY2LWE2YmE2NmYwMzIyYVwvZDNncHYwLTU5MDJlMzVlLWJlNWQtNGE3Yi04ZjhiLWVmYThjZWE0YmRlZC5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.xTaHDgJQqLl2n4jOmn8404DNeZSRhbF3UxHWEPzx8uU');
    background-attachment:fixed;
    background-size: cover;
	background-repeat:no-repeat;
	
	
}
</style>
</head>

<body>
<?php

if (isset($_POST['sub'])){
  $cus_name=$_POST['billing_name'];
  $cus_email=$_POST['billing_email'];
  $cus_tel=$_POST['billing_tel'];
  $cus_country=$_POST['billing_country'];
  $cus_city=$_POST['billing_city'];
  $cus_address=$_POST['billing_address'];
  $_SESSION['cart1']=$cart1;
  $_SESSION['cart2']=$cart2;
  $_SESSION['cartp']=$cartp;

}?>

<?php

    require 'classes/customer.php';
    session_start();
    $objCustomer=new customer();
    

    $objCustomer->setId($_SESSION['cid']);
    $customer=$objCustomer->getCustomerById();
       
    require 'classes/cart2_class.php';
    $objCart=new cart;
    $objCart->setCid($customer['customer_id']);
    $cartItems=$objCart->getALLCartItems();
    $cartPrices=$objCart->calculatePrices();
    

  // print_r($cartPrices); exit;
    


?>
<div class="container well ">

<center>
<h2 style="color:#001903;">BUY YOUR ITEMS</h2>
</center>

<div>

<button type="button"class ="btn" style=" margin-left:800px; text-decoration:none;color:green;" ><a href="logout.php" style="text-decoration:none;color:#7cf700ed;" >logout</a></button>
<form method="POST" action="invoice.php" onsubmit="check()">
<center><div>
  <h2 style="color:#001903;">Your Items</h2>
  <h4><span><img src="images/cart-icon.png"  style=" width:30px !important;
	height: 30px !important;"></span></sup></h4>
  <?php 
     foreach($cartItems as $key=>$cartItem){ 
  ?>
  <p ><a href="#" style="text-decoration:none;color:#001903;"><?= $cartItem['title'];
  $cart1=$cartItem['title'];
  $_SESSION['cart1']=$cart1;
  
  // print_r( $_SESSION['cart1']);
  ?></a>
  
  <strong>
   <span>Rs. </span><?= $cartItem['product_price'];
   $cart2=$cartItem['product_price'];
   $_SESSION['cart2']=$cart2;
   ?>
  </strong></p>
     <?php } ?>
  <p ><a href="#" style="text-decoration:none;color:#001903">Total:</a> 
  <strong>
   <span style="text-decoration:none;color:#001903;">&#x2069: </span><?=  $cartPrices['finalPrice'];
   $cartp=$cartPrices['finalPrice'];
   $_SESSION['cartp']=$cartp;?>
  </strong></p>
 <!-- <a href="invoice.php?cart1=$cart1 cart2=$cart2 cartp=$cartp"></a> -->
</div>
<div>
 <h3 style="color:#001903;">Billing Address</h3>
 
 <div>
 
 
  <input type="text" id="billing_name" name="billing_name" placeholder="Miss ABC"  required>
   </div>
   <div>
 
  <input type="email" id="billing_email" name="billing_email" placeholder="abc@gmail.com" required>
   </div>
   <div>

  <input type="tel" id="billing_tel" name="billing_tel" placeholder="12789921" required>
   </div>
   <div>
 
  <input type="text" id="billing_address" name="billing_address" placeholder="67665"required >
   </div>
   <div>

  <input type="text" id="billing_city" name="billing_city" placeholder="Karachi" required>
   </div>
   
  
   <div>

  <input type="text" id="billing_country" name="billing_country" placeholder="Pakistan"required >
   </div>
   <div>
  
  <input  style="margin-right:100px;text-align:center;" type="submit" value="Submit" name ="sub">
   </div>
   
  </div>
 
 



</div>
     </center>
</form>
</div>
</div>
<script>





// load_invoice();
// function load_invoice(){
//   $.ajax({
//     var action="load";
//     url:"invoice.php",
//     method:"POST",
//     data:{cart1:cart1,cart2:cart2,cartp:cartp , action:action},
//     success : function(data){
//       echo "inseerted";
//     }
//   });
// }

//  function check()
//  {
//    alert(" connect");
//  }
</script>




</body>
</html>

