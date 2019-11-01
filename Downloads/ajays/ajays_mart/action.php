<?php
$conn=mysqli_connect("localhost","root","","a3");
//header('Content-type: application/json');
if(isset($_POST['action'])){
    session_start();
    require 'classes/workshop.php';
    require 'classes/cart2_class.php';
    if(isset($_POST['wId'])){
    $objWorkshop = new workshop();
    $objWorkshop->setId($_POST['wId']);
    $workshop=$objWorkshop->getWorkshopById();
    }
    
    
    $objCart=new cart;
    switch($_POST['action']){
        case 'add':
         
          $objCart->setCid($_SESSION['cid']);
          $objCart->setPid($workshop['product_id']);
          $objCart->setTitle($workshop['product_name']);
          $objCart->setQuantity(1);
          $objCart->setTotalamount($workshop['product_price']);
          $objCart->setStock($workshop['stock']);
          if("1"<=$workshop['stock']){
          if($objCart->addItem()&&$objCart->checkstock()){
            
            echo json_encode( ["status" => 1,"msg"=>"Added to cart."] );
            
          }else{
            echo json_encode( ["status" =>0,"msg"=>"Opps!! Something  went wrong."] );
            

          }
        }
        else{
          echo json_encode( ["status" =>0,"msg"=>"Opps!! Something  went wrong."] );
        }
          break;
          case 'remove':
      
          $objCart->setCid($_SESSION['cid']);
          $objCart->setId($_POST['cartId']);
          
          if($objCart->removeItem()){

           $data=$objCart->calculatePrices();
                  
            echo json_encode( ["status" =>1,"msg"=>"item removed",'data'=>$data] );
            
          }else{
           echo json_encode( ["status" =>0,"msg"=>"Opps!! Something  went wrong."] );
            

          }
          break;
          case 'clear':
      
          $objCart->setCid($_SESSION['cid']);
          
          
          if($objCart->removeAllItem()){

           
                  
            echo json_encode( ["status" =>1,"msg"=>"cart is clear"] );
            
          }else{
           echo json_encode( ["status" =>0,"msg"=>"Opps!! Something  went wrong."] );
            

          }
          break;
        default:
        break;
    }
}else{
    header('location: index1.php');
}





?>