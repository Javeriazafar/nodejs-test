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





//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=a3", "root", "");

$query = "SELECT * FROM product WHERE (product_price BETWEEN '".$_POST["minimum_range"]."' AND '".$_POST["maximum_range"]."')   ORDER BY product_price ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '
<h4 align="center">Total Item - '.$total_row.'</h4>
<div class="row">
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$product_id=$row['product_id'];
		$img=$row['image'];
		$disbutton="";
		$c="white";
		$s="green";
		if(array_search($row['product_id'],array_column($cartItems,'pid'))!== false){
		  $disbutton="disabled";
		  $c="green";
		  $s="white";
		}
		$output .= 
		" 
	<div class='product-show'>
  
  <div class='grid' >
                    <figure class='effect-lily'>
                       <a href='details.php?pro_id=$product_id' ><img src='images/$img'/></a>
                        </figure>
                        
                        </div>
    
                        <h4 >".$row['product_name']."</</h4><br>

  <strong><span style='font-size=18px;color:green'>Rs.</span>".$row['product_price']."</strong>
  
      
    <button class='cart-btn' style='background-color:$c;color:$s;' id='cartBtn_$product_id' $disbutton onClick='addToCart($product_id,this.id)' role='button'>ADD TO CART</button>
    </div>";
		
	}
}
else
{
	$output .= '
		<h3 align="center">No Product Found</h3>
	';
}

$output .= '
</div>
';

echo $output;

?>
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