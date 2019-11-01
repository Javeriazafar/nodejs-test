<?php
include("include/db.php");


?> 





<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width:device-width initial scaling 1"/>

</head>
<body>
<form method="post" action="insert_product.php" enctype="multipart/form-data">
 <table width="700"  align="center">
   <tr>
   <td><h1>Insert New Products</h1></td>
   </tr>
   <tr>
   <td>Product name: <input type="text" name="product_name" required /></td>
   </tr>
    <tr>
   <td>Product image: <input type="file" name="product_img" required /></td>
   </tr>
    <tr>
   <td>Product Description: <input type="text" name="product_desp" required /></td>
   </tr>
   
    <tr>
   <td>Brand Id: <input type="text" name="brand_id" required /></td>
   </tr>
    <tr>
   <td><input type="submit" name="insert_product" value="insert"/></td>
   </tr>
 </table>
 </form>
</body>
</html>
<?php
 if(isset($_POST['insert_product'])){
	 
	 $product_name=$_POST['product_name'];
     $product_desc=$_POST['product_desp'];
    // $product_id=$_POST['product_id']; 
	 $product_brand=$_POST['brand_id'];
	
	 $product_img=$_FILES['product_img']['name'];
	// $temp_img=$_FILES['product_img']['temp_name'];
		
    // uploading images in folder
  // move_uploaded_file($temp_img,"product_images/$product_img");

// insert in table
 $insert_product="insert into product(product_name,image,product_desc,brand_id) values ('$product_name','$product_img','$product_desc','$product_brand')";
  $run_product=mysqli_query($conn,$insert_product);
if($run_product)
{
	echo  "<script>alert('successfully inserted')</script>";
	
}	
		
		
		
	 
 }




?>







