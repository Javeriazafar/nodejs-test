<html>
<head>
<link rel="stylesheet" href="styles/cart.css"  />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<style>
*{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background:#ededf2;
}
h2{
    text-align: center;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: black;
    font-family: 'Yatra One',cursive;
    padding: 10px 500px;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 70px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
    font-family: 'Yatra One',cursive;
    font-size:20px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 15px;
    color:black;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
.ser-btn{
  background:white;
  color:black;
  border:none;
  position:relative;
  height:35px;
  font-size:1em;
  padding:0 2em;
  border-radius:25px;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
  font-family:'Yatra One',cursive;;
}
.ser-btn:hover{
  background: #4FC3A1;
  color:black;
}

.ser-btn:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
.ser-btn:hover:before,.ser-btn:hover:after{
  width:100%;
  transition:800ms ease all;
}




</style>

</head>
<body>

<div  class="container">
  <div class="text-center">
    <h2 style="margin-top:0px;padding-top:0px;padding-left:500px;">Update your items</h2>
  </div>
  <hr>
  <button type="button"class ="btn" style="margin-top:30px; left:0px; " ><a href="logout.php">logout</a></button>
  <?php 
  
  session_start();
    //$_SESSION['cid']=$customer['customer_id'];

    require 'classes/cart2_class.php';
    $objCart=new cart;
    $objCart->setCid($_SESSION['cid']);
    $cartItems=$objCart->getALLCartItems();
    $cartCss='display:none';
    $emptyCss='display:block';
    if(count($cartItems)>0){
      $cartCss='display:block';
      $emptyCss='display:none';
    }
  ?>
  
<div   style="margin-left:95%">
 <a href="cart2.php" style="text-decoration:none;color:black"><span ><img src="images/cart-icon.png" class="icon"  style=" width:30px !important;
	height: 30px !important; "></span><sup id="itemCount"> <?php echo count($cartItems); ?> </sup></a>
</div>


<div   class="row" >
<div id="emptyCart" style="<?=$emptyCss?>">
       <div >
       
       <p><strong>Your cart is empty. <a href="index1.php">Click here</a>to shop
       </strong></p>
       
       </div>
      
      
      </div>
      
    <div class="table-wrapper" style="<?=$cartCss?>" id="fullCart">
 <table class="fl-table">
 
  <thead>
  <tr >
   <th style="width:45%;" >Items</th>
   <th style="width:15%;" >Quantity</th>
   <th style="width:15%;" >Price</th>
   <th style="width:15%;">Total</th> 
   <td style="width:150;">
    <button  onclick="clearall()" class="ser-btn"> <span><img src="images/del-icon.png"  style=" width:30px !important;
	height: 30px !important; "></span>Clear</button>
   </td > 
  </tr>
</thead>
<tbody>

<?php

$subTotal =0;
$qty=0;
$taxes=0;
foreach($cartItems as $key=>$cartItem){
  $subTotal +=$cartItem['totalAmount'];
  $qty +=$cartItem['qty'];
   $taxes+=10;

?>

 <tr  id="Item_<?= $cartItem['id']?>">
  <td >
    <div>
     <a href="#"><img src="images/<?= $cartItem['image']; ?>" style=" width:30px !important;
    height: 30px !important;"></a>
    <div >
        <h4><a href="#" style="text-decoration:none;color:black;"><?= $cartItem['title']; ?></a></h4>
        <p><?= $cartItem['product_desc']; ?></p>
    </div>
</div> 
</td >
<td >
 <select  class="form-control" id="seat_<?= $cartItem['id']?>"  onchange="updateCart(<?= $cartItem['pid']?>,<?= $cartItem['id']?>)" >
     <?php
      for($i=1;$i<11;$i++){
     ?>
     <option  value="<?=  $i; ?>"<?php ($i==$cartItem['qty']) ? "selected":'';?>  ><?php echo $i; ?></option>
      <?php }?>
      </select>
      </td>
      <td > 
          <strong><span style="font-size:18px;">Rs. </span>
           <span id="price"><?= number_format($cartItem['product_price'],2); ?></span>
        </strong>  
      </td>
      <td> 
          <strong><span style="font-size:18px;">Rs. </span>
           <span id="totalPrice_<?= $cartItem['id']  ?>"><?= number_format($cartItem['totalAmount'],2); ?></span>
        </strong>  
      </td>
      <td >
      <button class="ser-btn" onclick='removeItem(<?= $cartItem["id"]  ?>)'>
          <span><img src="images/r.jpg" style=" width:30px !important;
    height: 30px !important; "><span>Remove
      </button>

      
      </td>
 </tr>
      <?php  } ?>
 <tr>
  <td>Subtotal</td>
  <td > <strong><span style="font-size:18px;">Rs. </span>
           <span id="subTotal"><?= number_format($subTotal,2); ?>"</span>
        </strong></td>
 </tr>
 <tr>
  <td >Taxes</td>
  <td > <strong><span style="font-size:18px;">Rs. </span>
           <span id="taxes"> <?= number_format($taxes,2); ?></span>
        </strong></td>
 </tr>
 <tr>
  <td >Final Price</td>
  <td > <strong><span style="font-size:18px;">Rs. </span>
           <span id="finalPrice"><?= number_format($subTotal+$taxes,2); ?></span>
        </strong></td>
 </tr>
</tbody>

 
 </table>



</div>

</div>
<form action="check1.php" method="get">
<input name="qty"  value="<?php    $qty +=$cartItem['qty']; echo $qty;
$_SESSION['qty']=$qty; ?>" type="hidden"/>

<a href="check1.php">
<input type="submit" class="ser-btn" style="margin-left:90px"  value="checkout"></a>
</form>
</div>





</body>
    <script type="text/javascript">
     function updateCart(pId,cartId){
        
         $('#loader').show();
  $.ajax({
    url: "update.php",
    data: "wId="+pId+"&action=update&qty="+$('#seat_'+cartId).val(),
  // dataType: 'json',
    method:"post"
  }).done(function(response){
    
       var data=JSON.parse(response);
       console.log(data);
       
      $('#loader').hide();
       $('.alert').show();
      
       if(data.status==0){
       $('.alert').addClass('alert-danger');
           $('#result').html(data.msg);
           alert("not available");
       }
      else{  
           // $('.alert').addClass('alert-success');
            //$('#result').html(data.msg);
            // $('#'+btnId).prop('disabled',true);
            // $('#itemCount').text(parseInt(data[2][0]);
            $('#itemCount').text(parseInt(data.data.itemCount));

              $('#totalPrice_'+cartId).text(data.data.totalPrice);
              $('#subTotal').text(data.data.subTotal);
             $('#taxes').text(data.data.taxes);
            $('#finalPrice').text(data.data.finalPrice); 
            console.log(data);  
            console.log("hello");       
     }
    
    }
  )
     }

 function removeItem(cartId){
  $('#loader').show();
  $.ajax({
    url: "action.php",
    data: "cartId="+cartId+"&action=remove",
  // dataType: 'json',
    method:"post"
  }).done(function(response){
    
    console.log(response);
       var data=JSON.parse(response);
      $('#loader').hide();
       $('.alert').show();
      
       if(data.status==0){
       $('.alert').addClass('alert-danger');
           $('#result').html(data.msg);
       }
      else{  
           // $('.alert').addClass('alert-success');
            //$('#result').html(data.msg);
            // $('#'+btnId).prop('disabled',true);
            
           
             $('#Item_'+cartId).remove();
             $('#itemCount').text(parseInt(data.data.itemCount));
              if(data.data.itemCount==0.00){
                    $('#fullCart').hide();
                    $('#emptyCart').show();
              }else{
              $('#subTotal').text(data.data.subTotal);
             $('#taxes').text(data.data.taxes);
            $('#finalPrice').text(data.data.finalPrice);  
              }        
     }
    
    })
    
 }
 function clearall(){
  $('#loader').show();
  $.ajax({
    url: "action.php",
    data: "action=clear",
  // dataType: 'json',
    method:"post"
  }).done(function(response){
    
    console.log(response);
       var data=response;
      $('#loader').hide();
       $('.alert').show();
      
       if(data.status==0){
       $('.alert').addClass('alert-danger');
           $('#result').html(data.msg);
       }
      else{  
           // $('.alert').addClass('alert-success');
            //$('#result').html(data.msg);
            // $('#'+btnId).prop('disabled',true);
            
            $('#itemCount').text(0);

            $('#fullCart').hide();
            $('#emptyCart').show();
            //console.log("hello");
               
     }
  })
 }


 </script>
</html>