<?php
session_start();

$conn= mysqli_connect("localhost","root","","a3");


// initialize variables
$product_n = "";
$product_d = "";
$brand_i="";
$id = 0;
$update = false;

if (isset($_POST['Update'])) {
	
$product_n= $_POST['product_name'];
$product_d = $_POST['product_desc'];
$brand_i = $_POST['brand_id'];
$images = $_POST['image'];

$sql= "INSERT INTO product (product_id,product_name, product_desc ,image, brand_id) VALUES ('','$product_n','$product_d ','$images', '$brand_i') ";

   if(mysqli_query($conn,$sql)){
	
	   $id=mysqli_insert_id($conn) ;
	 
    $_SESSION['message'] = "Address saved"; 
    header('location: nav.php');}
}


if (isset($_POST['save'])) {
	$id = $_POST['id'];
	$product_n= $_POST['product_name'];
  $product_d =  $_POST['product_desc'];
  $brand_i =  $_POST['brand_id'];
  $images =  $_POST['image'];
 $sql= "UPDATE product SET product_name='$product_n', product_desc='$product_d',brand_id='$brand_i',image='$images' WHERE product_id=$id";
  if(mysqli_query($conn,$sql)){

	$_SESSION['message'] = "Address updated!"; 
	header('location: nav.php');}
}


if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$sql="DELETE FROM product WHERE product_id=$id";
	if(mysqli_query($conn,$sql)){
	$_SESSION['message'] = "Address deleted!"; 
	header('location: nav.php');}
}


	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$sql= "SELECT * FROM product WHERE product_id=$id";
		$record = mysqli_query($conn,$sql );

		if (@count($record) == 1 ) {
			$row= mysqli_fetch_array($record);
			$product_n= $row['product_name'];
    $product_d = $row['product_desc'];
   $brand_i = $row['brand_id'];
   $images = $row['image'];
		}
	}


 $results = mysqli_query( $conn,"SELECT * FROM product"); 

?>
 
 