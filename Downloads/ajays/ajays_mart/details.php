<?php
$conn=mysqli_connect("localhost","root","","a3");
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width:device-width initial scaling 1"/>

<link rel="stylesheet" href="styles/detail-des.css"  />
<link rel="stylesheet" href="styles/main.css"  /> 

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body  style="font-family:'Yatra One',cursive !important;"	>

<!-- <div class="container">
  <video autoplay muted  id="video1"  class="video1"  loop="loop">
   <source src="https://www.videvo.net/videvo_files/converted/2015_08/preview/Baking_Cookies_Alt.mp421867.webm"  type="video/mp4">

	   </video>
	     <video autoplay muted  id="video2"  class="video2" >
   <source src="https://www.videvo.net/videvo_files/converted/2015_04/preview/FoodPack1_05_Videvo.mov28204.webm"  type="video/webm">
	   </video>
	    <video autoplay muted  id="video3"  class="video3" >
   <source src="https://www.videvo.net/videvo_files/converted/2015_08/preview/Baking_Cookies_Alt.mp421867.webm"  type="video/webm">
	   </video>
	   <video autoplay muted  id="video4"  class="video4" >
   <source src="https://www.videvo.net/videvo_files/converted/2013_04/preview/FoodMarketApples2H264.mov62474.webm"  type="video/webm">
	   </video>-->
	   
	   <!-- </div> -->
	   <header  id="myHeader" style="z-index:30">	

<div style="height:200px"> 
<div class="div1" style="height:90px;background-color:#079e1e;";>
<img src="images/mylogo.png" style=" width:180px !important;
	height: 90px !important; ">
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




<div>
<ul style="top:22% !important;" class="menu">
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
<a href="bakery.php?cat=10">BAKERY
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
<!-- </div>
<div id="right-content">
	<div id="headlines">
		<div id="headline-content">
			 <span> items </span>
			</div>
  </div>
</div> -->
<div class="show" style="margin-top:110px !important;">
<?php

if(isset($_GET['pro_id'])){
	$product_id=$_GET['pro_id'];
	

$get_products ="select * from product where product_id ='$product_id'";
$run_pro = mysqli_query($conn,$get_products);
while($row_products=mysqli_fetch_array($run_pro))
{
	$product_id =$row_products['product_id'];
	$pro_name = $row_products['product_name'];	
	$pro_desc = $row_products['product_desc'];	
	$pro_img = $row_products['image'];	
	$pro_brand_id = $row_products['brand_id'];
    $pro_price=$row_products['product_price'];	
	$pro_quan=0;
	$disbutton="";
	$c="white";
   $s="green";
   if(array_search($row_products['product_id'],array_column($cartItems,'pid'))!== false){
	 $disbutton="disabled";
	 $c="green";
     $s="white";
   }
	echo " 
	<div class='product-show'>

	
         
	<div class='grid' >
	<figure class='effect-lily'>
	   <a href='details.php?pro_id=$product_id' ><img src='images/$pro_img'/></a>
		</figure>
		
		</div>
		<h3 >$pro_name</h3>
	<p style='margin-left:300px;margin-top:-250px;font-size:18px;width:200px'>$pro_desc</p>
	<p style='margin-left:300px;margin-top:50px;font-size:18px'> Rs.$pro_price</p>
	<button class='cart-btn' style='background-color:$c;color:$s;margin-left:250px;width:200px;font-weight:bold;margin-top:-100px' id='cartBtn_$product_id' $disbutton onClick='addinCart($product_id,this.id)' role='button'>ADD TO CART</button>
	</div>

	
   

	
	";
	
	
}
}
?>
</div>

<div class="container" >

   <form method="POST" id="comment_form">
   
    <div class="form-group">
	
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
	 <input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id; ?>"  />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>



</body>
</html>
<script type="text/javascript">
function addinCart(wId,btnId){
console.log("hello");
  $('#loader').show();
  $.ajax({
    url: "action.php",
    data: "wId="+wId+"&action=add",
    method:"post"
  }).done(function(response){
       var data=response;
       console.log(response.status);
      // $('#loader').hide();
      // $('.alert').show();
       if(data.status==0){
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
<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
	 console.log(data);
     load_comment(<?php echo $product_id;?>);
    }
   }
  })
 });

 load_comment(<?php echo $product_id;?>);

 function load_comment(p_id)
 {
	
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   data:"p_id="+p_id+"&action=com",
   success:function(data)
   {
    $('#display_comment').html(data);
	console.log(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>