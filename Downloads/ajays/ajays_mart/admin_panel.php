<?php
$conn=mysqli_connect("localhost","root","","");

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
<?php
$conn=mysqli_connect("localhost","root","","");?>


<table style="text-align:center">
	<thead>
		<tr>
      <th colspan="2"> Image</th>
		</tr>
	</thead>
    <?php $conn=mysqli_connect("localhost","root","","a3");
   $results = mysqli_query($conn, "SELECT * FROM product") ;
    while ($row = mysqli_fetch_array($results)) : ?>
		<tr>
        <td colspan="2"><?php echo $row['image']; ?></td>
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
        <div class="input-group">
			<label>Product Image: </label>
     <input type="file" name="image" value="<?php echo $images; ?>" />
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


</body>
