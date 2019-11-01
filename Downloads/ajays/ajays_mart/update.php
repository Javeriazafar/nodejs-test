<?php

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
    $objCart->setCid($_SESSION['cid']);
          $objCart->setPid($workshop['product_id']);
          //$objCart->setTitle($workshop['product_name']);
          $objCart->setQuantity($_POST['qty']);
          $objCart->setTotalamount($workshop['product_price']*$_POST['qty']);
             if($_POST['qty']<=$workshop['stock']){
          if($objCart->updateItem()&&$objCart->reducestock()){

            $cartItems=$objCart->getALLCartItems();
            $subTotal =0;
            $taxes=10;
            $qty=0;
            foreach($cartItems as $key=>$cartItem){
              $subTotal +=$cartItem['totalAmount'];
              $qty +=$cartItem['qty']; 
               
            }
          
            $totalPrice=number_format($objCart->getTotalamount(),2);
            $taxes=$taxes*$qty;
            $finalPrice= number_format($subTotal+$taxes,2);
            $subTotal=number_format($subTotal,2);
            $taxes=number_format($taxes,2);
           $data=['itemCount'=>$qty,'totalPrice'=>$totalPrice,'subTotal'=>$subTotal,'taxes'=>$taxes,'finalPrice'=>$finalPrice];
           echo json_encode(["status" =>1,"msg"=>"update succesfully.",'data'=>$data]);
          }
             else{
           echo json_encode( ["status" =>0,"msg"=>"Opps!! Something  went wrong."] );
          
          }
        }
        else{
          echo json_encode( ["status" =>0,"msg"=>"Opps!! Something  went wrong."] );
        }
        
        
      }
        else{
            header('location: index1.php');
        }
        
?>