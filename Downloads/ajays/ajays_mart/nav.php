<?php
$conn=mysqli_connect("localhost","root","","a3");

include('delete.php');

?> 




<!DOCTYPE html>
<html> 
<head>
<meta name="viewport" content = "width=device-width, initial-scale=1.0" >
<title> navbar</title>
<link rel="stylesheet" href="nav.css" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<style>
/* table {
  border-collapse: collapse;
  width:80%;
  text-align:center;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
} */
body {
    font-size: 19px;
}
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover {
    background: #F5F5F5;
}

form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
</style>
</head>
<body>

<header>
<a href='#'  class="logo">Ajays Mart</a>
<button type="button"class ="btn" style="margin-top:30px; margin-right:30px; " ><a href="logout.php">logout</a></button>
<div class="menu-toggle"></div>

</header>
<nav>
<ul>
<li><a href="#"  class="active"> Home </a></li> 
<li><a href="#" > Home </a></li>
<li><a href="#" > Home </a></li>
<li><a href="#" > Home </a>
</li>
</ul>
</nav>
</header>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<!-- 
 <div>
 <form method="post" action="nav.php" enctype="multipart/form-data">
 <table width="500"  text-align="center">
   <tr>
   <td style="text-align:center"><h1>Insert New Products</h1></td>
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
 </div>
 <div >
 <div >
 <br><br>
 <h1 style="text-align:center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" >
 
 <tr >
 
 <th> Id </th>
 <th> Username </th>
 <th> Password </th>
 <th> Delete </th>
 <th> Update </th>

  </tr >

  <?php

//   include 'db.php'; 
//  $q = "select * from ajay's_mart ";

//   $query = mysqli_query($conn,$q);

//   while($res = mysqli_fetch_array($query)){
//  ?>
//  <tr  style="text-align:centre">
//  <td> <?php echo $res['id'];  ?> </td>
//  <td> <?php echo $res['customer_name'];  ?> </td>
//  <td> <?php echo $res['password'];  ?> </td>
//  <td> <button > <a href="delete.php?id=<?php echo $res['id']; ?>" > Delete </a>  </button> </td>
//  <td> <button> <a href="update1.php?id=<?php echo $res['id']; ?>" > Update </a> </button> </td>

//   </tr>

//   <?php 
//  }
//   ?>
 
//  </table>  

//   </div>
//  </div>

//   <script type="text/javascript">
 
//  $(document).ready(function(){
//  $('#tabledata').DataTable();
//  }) 
 
//  </script>
// <?php
//  if(isset($_POST['insert_product'])){
	 
// 	 $product_name=$_POST['product_name'];
//      $product_desc=$_POST['product_desp'];
//     // $product_id=$_POST['product_id']; 
// 	 $product_brand=$_POST['brand_id'];
	
// 	 $product_img=$_FILES['product_img']['name'];
// 	// $temp_img=$_FILES['product_img']['temp_name'];
		
//     // uploading images in folder
//   // move_uploaded_file($temp_img,"product_images/$product_img");

// // insert in table
// $insert_product="insert into product(product_name,image,product_desc,brand_id) values ('$product_name','$product_img','$product_desc','$product_brand')";
// $run_product=mysqli_query($conn,$insert_product);
// if($run_product)
// {
// echo  "<script>alert('successfully inserted')</script>";

// }	
  
  
	 
//  }

?> -->
<?php
$conn=mysqli_connect("localhost","root","","a3");?>


<table style="text-align:center">
	<thead>
		<tr>
			<th colspan="2">Product Name</th>
			<th colspan="2" >Brands</th>
      <th colspan="2"> Image</th>
			<th colspan="2">Product Description</th>
      <th colspan="3">ACTION</th>
		</tr>
	</thead>
	



  <?php $conn=mysqli_connect("localhost","root","","a3");
   $results = mysqli_query($conn, "SELECT * FROM product") ;
    while ($row = mysqli_fetch_array($results)) : ?>
		<tr>
			<td colspan="2"><?php echo $row['product_name']; ?></td>
			<td colspan="2"><?php echo $row['brand_id']; ?></td>
      <td colspan="2"><?php echo $row['image']; ?></td>
      <td colspan="2"><?php echo $row['product_desc']; ?></td>
			<td>
				<a href="nav.php?edit=<?php echo $row['product_id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="delete.php?del=<?php echo $row['product_id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
    <?php  
  endwhile;?>
</table>


 
 
<form  action="delete.php"  method="post">
		<div class="input-group">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
			<label>Product Name</label>
      <input type="text" id="product_name" name="product_name" value="<?php echo $product_n; ?>" required>
		</div>
		<div class="input-group">
			<label>Product Description</label>
      <input type="text"  id="product_desc" name="product_desc" value="<?php echo $product_d; ?>" required>
		</div>
    <div class="input-group">
			<label>Product Image: </label>
     <input type="file" name="image" value="<?php echo $images; ?>" />
		</div>
    <div class="input-group">
			<label>Brand_id</label>
      <input type="text"  id="brand_id" name="brand_id" value="<?php echo $brand_i; ?>" required>
		</div>
		<div class="input-group">
		<?php if ($update == false): ?>
	<button class="btn" type="submit" name="Update"  id="update_btn" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" id="save_btn" >Save</button>
   <?php endif; 
?>
		</div>
	</form>

 



 <div class="clearfix"></div>

<script
src="https://code.jquery.com/jquery-3.4.1.js"
  ></script>
  <script type="text/javascript">
  $(document).ready(function(){
  $('.menu-toggle').click(function(){
    $('.menu-toggle').toggleClass('active')
	 $('nav').toggleClass('active')
  })
  })
  
  </script>
  
</body>
</html>