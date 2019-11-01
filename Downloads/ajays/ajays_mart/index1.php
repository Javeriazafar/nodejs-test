<?php
$conn=mysqli_connect("localhost","root","","a3");
session_start();

$minimum_range = 10;
$maximum_range = 100;
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">     

		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<style>
.slider{
  width:96%;
  height:450px;
  background:url(images/s10.jpg);
  margin-left:30px;
  margin-top:-15px;
  animation:slide 40s infinite;
  border-radius:50px;
  display:inline-block;
  position:relative;
  
  
}

@keyframes slide{
    25%{
      background:url(images/s4.jpg);
    }
    50%{
      background:url(images/eGrocery.jpg);
    }
    75%{
      background:url(images/slide4.jpg);
    }
    100%{
      background:url(images/slide6.jpg);
    }
}
.search-bar{
  padding:12px 20px 14px 42px;
  border-radius:25px !important;
  margin-top:5px;
  outline:none;
  width:240px ;
  transition:width 0.7s ease-in-out;
  font-size:20px;
  border : 3px solid darkgreen;

}
.search-bar:focus{
  width:450px !important;
}
.footer{
  background:#303036;
  color:white;
  height:200px;
  width:100%;
  bottom:0px;
  position:relative;
  top:300px;
}
.footer .footer-content{
  
  height:200px;
  display:flex;
 
}
.footer-bottom{
  background:#343a40;
  color:green;
  height:90px;
  width:100%;
  text-align:center;
  /* position:relative; */
  bottom:20px;
  left:0px;

 
  padding-top:60px;
}
.footer .footer-content .footer-section{
  flex:1;
  padding:50px;
 
}
.footer .footer-content h1,
.footer .footer-content h2 {
color:white;
font-size:1.1em;

} 
.footer .footer-content .about h1 span{
  color:green;
  font-size:1.1em;
}
.footer .footer-content .about .contact span{
display:block;
font-size:1.1em;
margin-bottom:8px;
}
.footer .footer-content .about .socials a{
  border: 1px solid grey;
  width:45px;
  height:40px;
  padding-top:5px;
  margin-right:5px;
  text-align:center;
  display:inline-block;
  font-size:1.1em;
  border-radius:5px;
  transition: all .3s;
}
.footer .footer-content .about .socials a:hover{
  border: 1px solid white;
  color:white;
  transition: all .3s;
}
.footer .footer-content .links ul a{
  display:block;
  margin-bottom:0px;
  font-size:1.2em;
  transition: all .3s;

}
.footer .footer-content .links ul a:hover{
  color:white;
  margin-left:15px;
  transition: all .3s;
}
.footer .footer-content .contact-form{
  color:green;
}

#demo .content li:hover {
        
        color: green !important; 
        font-family: 'Yatra One',cursive;
    }

    #demo {
        margin: 22px 0 20px 0;
        
       
        
    }
    
    #demo .wrapper {
        display: inline-block;
        width: 253px;
        margin: 15px 10px 0 0;
        height: 43px;
        position: relative;
        font-size: 16px;
        
    
    }
    
    #demo .parent {
        height: 100%;
        width: 100%;
        display: block;
        cursor: pointer;
        line-height: 30px;
        height: 35px;
        border-radius: 5px;
        background: #F9F9F9;
        border: 1px solid #AAA;
        border-bottom: 1px solid #777;
        color: #282D31;
        font-size: 20px;
        font-family: 'Yatra One',cursive;
        z-index: 2;
        position: relative;
        -webkit-transition: border-radius .1s linear, background .1s linear, z-index 0s linear;
        -webkit-transition-delay: .8s;
        text-align: center;
    }
    
    #demo .parent:hover,
    #demo .content:hover ~ .parent {
        background: #fff;
        -webkit-transition-delay: 0s, 0s, 0s;
    }
    
    #demo .content:hover ~ .parent {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        z-index: 0;
    }
    
    #demo .content {
        position: absolute;
        top: 0;
        display: block;
        z-index: 1;
        height: 0;
        width: 250px;
        padding-top: 30px;
        -webkit-transition: height .5s ease;
        -webkit-transition-delay: .4s;
        border: 1px solid #777;
        border-radius: 5px;
        box-shadow: 0 1px 2px rgba(0,0,0,.4);
    }
    
    #demo .wrapper:active .content {
        height: 280px;
        z-index: 3;
        -webkit-transition-delay: 0s;
        color: white !important;
    }
    
    #demo .content:hover {
        height: 220px;
        z-index: 3;
        -webkit-transition-delay: 0s;
        color: white !important;
    }
    
    
    #demo .content ul {
        background:white;
        margin: 0;
        padding: 0;
        overflow: hidden;
        height: 110%;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
    }
    
    #demo .content ul a {
        text-decoration: none;
    }
    
    #demo .content li:hover {
        background-color:white;
       color:green !important;
        font-family: 'Yatra One',cursive;
    }
    
    #demo .content li {
        list-style: none;
        text-align: left;
        color: black;
        font-size: 14px;
        line-height: 30px;
        height: 30px;
        padding-left: 10px;
        border-top: 1px solid #ccc;
        color:green;
        
    }
    
    #demo .content li:last-of-type {
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
    }




</style>
<script type="text/javascript">
  $(window).on('load',function(){
    $('.preloader').addClass('complete')
  })

</script>
</head>
<body style="font-family:'Yatra One',cursive !important;	">


<header  id="myHeader" style="z-index:30;width:1345px;font-family:'Yatra One',cursive !important;margin-top:0px !important;	">	

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



<div >
<ul style="top:18.5% !important;" class="menu">
<li>
<a href="#aboutus">ABOUT US
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
 

<div id="demo">
  <div class="wrapper" >
    <div class="content" style="color:green !important;">
<ul>



<?php 

$get_cats="select * from category";
$run_cats=mysqli_query($conn,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats)){
  $cat_id=$row_cats['cat_id'];
  $cat_title=$row_cats['cat_title'];
  echo "<li style='color:green !important;'><a style='color:green !important;' href='category.php?cat=$cat_id'>$cat_title</a></li>";
}

?>
</ul>
</div>
<div class="parent" style="font-size:20px">shop by category</div>
</div>
</div>


<div class="slider">
<div class="button-container" style="margin-left:-200px;padding-top:200px">
  <a href="cart2.php" style="text-decoration:none" class="button">
    My Cart
  </a>
</div>
<div style="margin-left:100px;margin-top:-243px" class="button-container">
  <a href="grocery.php?cat=9"  style="text-decoration:none" class="button">
    Grocery
  </a>
</div>
</div>
<div class="show"  style="margin-left:100px !important;">
<?php
    
   require 'classes/workshop.php';
   $objWorkshop=new workshop();
   $workshops=$objWorkshop->getAllWorkshops();
   while($workshop=mysqli_fetch_assoc($workshops)){
   $img= $workshop['image'];
   $product_id=$workshop['product_id'];
   $disbutton="";
   $c="white";
   $s="green";
   if(array_search($workshop['product_id'],array_column($cartItems,'pid'))!== false){
     $disbutton="disabled";
     $c="green";
     $s="white";
   }
   
 echo " 
	<div class='product-show'>
  
  <div class='grid' >
                    <figure class='effect-lily'>
                       <a href='details.php?pro_id=$product_id' ><img src='images/$img'/></a>
                        </figure>
                        
                        </div>
    
                        <h4 >".$workshop['product_name']."</</h4><br>

  <strong><span style='font-size=18px;color:green'>Rs.</span>".$workshop['product_price']."</strong>
  
      
    <button class='cart-btn' style='background-color:$c;color:$s;' id='cartBtn_$product_id' $disbutton onClick='addToCart($product_id,this.id)' role='button'>ADD TO CART</button>
    </div>";
   }
?>
</div>


<div class="container" style="margin-top:100px">  
            <br />  
            <br />
			<br />
			<h3 align="center" style="margin-top:600px">SEARCH BY PRICE</a></h3><br />
			<br />
			<div class="row">
				<div class="col-md-2">
					<input type="text" name="minimum_range" id="minimum_range" class="form-control" value="<?php echo $minimum_range; ?>" />
				</div>
				<div class="col-md-8" style="padding-top:12px">
					<div id="price_range"></div>
				</div>
				<div class="col-md-2">
					<input type="text" name="maximum_range" id="maximum_range" class="form-control" value="<?php echo $maximum_range; ?>" />
				</div>
			</div>
			<br />
			<div id="load_product"></div>
			<br />
		</div>
    <div class="footer" id="aboutus">
    <div class ="footer-content">
    <div class="footer-section about">
    <h1 class="logo-text"><span>AJAYS MART</span><br>About Us</h1><p>The A-Jay's is the acronym of Anfas and Javeria,the developers,designer and owner of this online grocery store .A-Jay's Mart is a grocery products web store which aims at saving users from the hassle of going out and buying every day necessities. The online store brings to you different categories such as biscuits and chocolates, breakfast & dairy, grocery and Staples, beverages, baby & kids and Pet Care. You can choose from thousands of products. A-Jays's Mart is currently delivering in Karachi only.A-Jays mart help you to order easily items sitting back at home .</p>
    <div class="contact">
    <span><i class="fa fa-phone"></i>&nbsp;123-456-789</span>
    <span><i class="fa fa-envelope"></i> &nbsp; info@ajays</span>
    </div>
    <div class="socials">
    <a href="#"><i class= "fa fa-facebook"></i></a>
    <a href="#"><i class= "fa fa-instagram"></i></a>
    <a href="#"><i class= "fa fa-twitter"></i></a>
    <a href="#"><i class= "fa fa-youtube"></i></a>
    </div>
    </div>
    
    
    </div>
    <div class="footer-bottom">&copy; ajay's_mart.com | Designed and Developed  by Javeria & Anfas</div>
    </div>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    
	$( "#price_range" ).slider({
		range: true,
		min: 10,
		max: 500,
		values: [ <?php echo $minimum_range; ?>, <?php echo $maximum_range; ?>],
		slide:function(event, ui){
			$("#minimum_range").val(ui.values[0]);
			$("#maximum_range").val(ui.values[1]);
			load_product(ui.values[0], ui.values[1]);
		}
	});
	
	load_product(<?php echo $minimum_range; ?>, <?php echo $maximum_range; ?>);
	
	function load_product(minimum_range, maximum_range)
	{
  
		$.ajax({
			url:"fetch.php",
			method:"POST",
			data:{minimum_range:minimum_range, maximum_range:maximum_range},
			success:function(data)
			{
				$('#load_product').fadeIn('slow').html(data);
        console.log(data);
			}
		});
	}
	
});  







</script>





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
        //  $('.alert').addClass('alert-danger');
          //$('#result').html(data.msg);
          alert("not available");
          console.log(response);
       }
       else{
           // $('.alert').addClass('alert-success');
           // $('#result').html(data.msg);
            $('#'+btnId).prop('disabled',true);
            $('#'+btnId).css("background-color","green");
            $('#'+btnId).css("color","white");
            $('#itemCount').text(parseInt($('#itemCount').text())+1);
            ///console.log(response);
       }
    
       
  })
  
}
</script>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
