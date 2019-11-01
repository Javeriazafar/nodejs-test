<?php
include("include/db.php");
//include("function/functions.php");
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width:device-width initial scaling 1"/>

<link rel="stylesheet" href="styles/grocery.css"  />
</head>
<body>

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
	     <!-- -->
<header>	
	<div> 
<div class="div1">
<h1 ><bold> A.JAY'S MART</bold> </h1>
</div>
</div>

<div id="form">
<form method="get" action="result.php" enctype="multipart/form-data">

  <input type="text" name="user-query" placeholder="Search a Product"/>
  <input type="submit" name="search" value="Search" />
</form>
</div>
</header>

<div id="right-content">
	<div id="headlines">
		<div id="headline-content">
			 <span>-Items - Price </span>
			</div>
  </div>
</div>





<div>
<ul>
<li>
<a href="#">ABOUT US
<span></span>
<span></span>
<span></span>
<span></span>
</a>
</li>
<li>
<a href="#">HOME
<span></span>
<span></span>
<span></span>
<span></span>
</a>
</li>
<li>
<a href="#">BAKERY
<span></span>
<span></span>
<span></span>
<span></span>
</a>
</li>
<li>
<a href="#">GROCERY 
<span></span>
<span></span>
<span></span>
<span></span>
</a>
</li>
<li>
<a href="#">COMMUNITY
<span></span>
<span></span>
<span></span>
<span></span>
</a>
</li>
<li>
<a href="#">My BILLINGS
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

<div class="product-box">
<?php

$get_products ="select * from product order by rand() LIMIT 0,4";
$run_pro = mysqli_query($conn,$get_products);
while($row_products=mysqli_fetch_array($run_pro))
{
	$pro_id =$row_products['product_id'];
	$pro_name = $row_products['product_name'];	
	$pro_desc = $row_products['product_desc'];	
	$pro_img = $row_products['image'];	
	$pro_brand_id = $row_products['brand_id'];	
	
	echo " <div class='single-product'>
	<h3>$pro_name</h3>
    
	<img src='images/$pro_img'  height='180' width='180' style='right:100% float:left' /><br><br>

	<a href='details.php?pro_id=$pro_id' style='float:left'>details</a>
    <a	 href='index.php?add_cart=$pro_id'><button  style='float:right ;' >Add to cart </button></a>
	
	

	
	</div>
	";
}
?>

</div>
</body>
</html>