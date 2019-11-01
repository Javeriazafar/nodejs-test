<?php
session_start();
$conn=mysqli_connect("localhost","root","","a3");
$status="";
if (isset($_POST['product_id']) && $_POST['product_id']!=""){
$product_id = $_POST['product_id'];
$result = mysqli_query(
$conn,
"SELECT * FROM `product` WHERE `product_id`='$product_id'"
);
$row = mysqli_fetch_assoc($result);
$product_name = $row['product_name'];
$product_id = $row['product_id'];
$product_price = $row['product_price'];
$product_image = $row['product_image'];
 
$cartArray = array(
	$product_id=>array(
	'product_name'=>$product_name,
	'product_id'=>$product_id,
	'product_price'=>$product_price,
	'quantity'=>1,
	'product_image'=>$product_image)
);
 
if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($product_id,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}
 
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width:device-width initial scaling 1"/>

<link rel="stylesheet" href="styles/hello.css"  />
</head>
<body>



<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>

<div class="cart_div">
<a href="cart.php"><img src="images/cart-icon.png" /> Cart<span>
<?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>
<?php
$result = mysqli_query($conn,"select * from product order by rand() LIMIT 0,4");
while($row = mysqli_fetch_assoc($result)){
	$image=$row["image"];
    echo "<div class='product_wrapper'>
    <form method='post' action=''>
    <input type='hidden' name='product_id' value=".$row['product_id']." />
    <img src='images/$image' height='180' width='180' />
	
    <div class='name'>".$row['product_name']."</div>
    <div class='price'>$".$row['product_price']."</div>
    <button type='submit' class='buy'>Buy Now</button>
    </form>
    </div>";
        }
mysqli_close($conn);
?>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>


</body>
</html>