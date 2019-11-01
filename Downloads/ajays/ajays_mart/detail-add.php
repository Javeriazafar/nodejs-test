<?php
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
  
         
          $objCart->setCid($_SESSION['cid']);
          $objCart->setPid($workshop['product_id']);
          $objCart->setTitle($workshop['product_name']);
          $objCart->setQuantity(1);
          $objCart->setTotalamount($workshop['product_price']);
           
          if($objCart->addItem()){
            echo json_encode( ["status" => 1,"msg"=>"Added to cart."] );
            
          }else{
            echo json_encode( ["status" =>0,"msg"=>"Opps!! Something  went wrong."] );
            

          }
        }
          else{
            header('location: index1.php');
        }