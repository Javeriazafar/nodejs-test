<?php
$conn=mysqli_connect("localhost","root","","a3");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width:device-width initial scaling 1"/>
<link rel="stylesheet" href="styles/main.css"  /> 
<link rel="stylesheet" href="styles/grocery.css"  />
<link rel="stylesheet" href="styles/cart.css"  />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<header  id="myHeader" style="z-index:30">	

	<div style="height:200px"> 
<div class="div1" style="height:90px;background-color:#079e1e;";>
<h1 ><bold> A.JAY'S MART</bold> </h1>
</div>
</div>

<div id="form">
<form method="get" action="result.php" enctype="multipart/form-data" class="f">

  <input type="text" name="user-query" placeholder="Search a Product" class="search-bar"/>
  <input type="submit" name="search" value="Search" class="ser-btn"/>
</form>
</div>




<?php

    require 'classes/customer.php';
    $objCustomer=new customer();
    $objCustomer->setEmail('xyz@gmail.com');
    $customer=$objCustomer->getCustomerByEmailId();
    //session_start();
    $_SESSION['cid']=$customer['customer_id'];
       
    require 'classes/cart2_class.php';
    $objCart=new cart;
    $objCart->setCid($customer['customer_id']);
    $cartItems=$objCart->getALLCartItems();
    //print_r($cartItems);


?>

<div class="row"  style="margin-left:90%;margin-top:-4%">
 <a href="cart2.php" style="text-decoration:none;color:black;font-weight:bold"><span ><img src="images/cart-icon.png" class="icon"  style=" width:50px !important;
	height: 50px !important; "></span><sup id="itemCount"> <?php echo count($cartItems); ?> </sup></a>
</div>

</header>

<div >
<ul style="top:18.5% !important;" class="menu">
<li>
<a href="index1.php#aboutus">ABOUT US
<span></span>
<span></span>
<span></span>
<span></span>
</a>
</li>
<li>
<a href="index1.php">HOME
<span></span>
<span></span>
<span></span>
<span></span>
</a>
</li>
<li>
<a href="grocery.php?cat=10">BAKERY
<span></span>
<span></span>
<span></span>
<span></span>
</a>
</li>
<li>
<a href="grocery.php?cat=9">GROCERY 
<span></span>
<span></span>
<span></span>
<span></span>
</a>
</li>

<li>
<a href="checkout.php">My BILLINGS
<span></span>
<span></span>
<span></span>
<span></span>
</a>
</li>
</ul>
<div style="margin-top:60px;font-size:14px;margin-left:10px">
<h2>you are looking for....</h2>	
<div>

<div class="show" style="margin-top:30px;margin-left:20px;width:1200px">

<div class="product-box">
<?php

if(isset($_GET['search'])){
	$user_keyword=$_GET['user-query'];
	

$get_products ="select * from product where product_keyword like '%$user_keyword%'";
$run_pro = mysqli_query($conn,$get_products);
while($row_products=mysqli_fetch_array($run_pro))
{
	$pro_id =$row_products['product_id'];
	$pro_name = $row_products['product_name'];	
	$pro_desc = $row_products['product_desc'];	
	$pro_img = $row_products['image'];	
	$pro_brand_id = $row_products['brand_id'];
	$disbutton="";
    $c="white";
   $s="green";
    if(array_search($row_products['product_id'],array_column($cartItems,'pid'))!== false){
      $disbutton="disabled";
      $c="green";
     $s="white";
    }	
	
	echo "<div class='product-show'>
     
	<div class='grid' >
	<figure class='effect-lily'>
	   <a href='details.php?pro_id=$pro_id' ><img src='images/$pro_img'/></a>
		</figure>
		
		</div>
		<h4 >".$row_products['product_name']."</</h4><br>
  
	   
   
	 <strong><span style='font-size=18px;color:green'>Rs.</span>".$row_products['product_price']."</strong>
	 
		 
	   <button id='cartBtn_$pro_id' class='cart-btn' style='background-color:$c;color:$s;' $disbutton onClick='addToCart($pro_id,this.id)' role='button'>ADD To Cart</button>
	   </div>";
}
}
?>

</div>
</body>
</html>
<script type="text/javascript">
function addToCart(wId,btnId){

  $('#loader').show();
  $.ajax({
    url: "action.php",
    data: "wId="+wId+"&action=add",
    method:"post"
  }).done(function(response){
       var data=JSON.parse(response);
       //console.log(response.status);
      // $('#loader').hide();
      // $('.alert').show();
       if(data.status==0){
		alert("not available");
        //  $('.alert').addClass('alert-danger');
          //$('#result').html(data.msg);
       }
       else{
           // $('.alert').addClass('alert-success');
           // $('#result').html(data.msg);
            $('#'+btnId).prop('disabled',true);
			$('#'+btnId).css("background-color","green");
            $('#'+btnId).css("color","white");
            $('#itemCount').text(parseInt($('#itemCount').text())+1);
       }
    
       
  })
  
}
</script>