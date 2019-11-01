<?php

class cart{
      private $id;
      private $cid;
      private $pid;
      private $qty;
      private $totalAmount;
      private $title;
      private $stock;
      
       
       function setId($id){$this->id = $id;}
       function getId(){return $this->id;}
       function setCid($cid){$this->cid = $cid;}
       function getcid(){return $this->cid;}
       function setPid($pid){$this->pid = $pid;}
       function getPid(){return $this->pid;}
       function setQuantity($qty){$this->qty = $qty;}
       function getQuantity(){return $this->qty;}
       function setTotalamount($totalAmount){$this->totalAmount = $totalAmount;}
       function getTotalamount(){return $this->totalAmount;}
       function setTitle($title){$this->title = $title;}
       function getTitle(){return $this->title;}
       function setStock($stock){$this->stock = $stock;}
       function getStock(){return $this->stock;}

       public function addItem()
       {
            $conn=mysqli_connect("localhost","root","","a3");
            $sql="insert into `cart` (`cid`,`pid`,`title`,`qty`,`totalAmount`) values (?,?,?,?,?)";
            //$sql="insert into `cart` (`id`,`cid`,`pid`,`title`,`qty`,`totalAmount`) values (null,:cid,:pid,:title,:qty,:totalAmount)";
            $stmt=$conn->prepare($sql);
            $stmt->bind_param('iisii',$this->cid,$this->pid,$this->title,$this->qty,$this->totalAmount); 
           /* $stmt->bind_param(':cid',$this->cid);
            $stmt->bind_param(':pid',$this->pid);
            $stmt->bind_param(':title',$this->title);
            $stmt->bind_param(':qty',$this->qty);
            $stmt->bind_param(':totalAmount',$this->totalAmount);
           // $stmt->bind_param('d',$this->product_id);*/
            try{
              if($stmt->execute()){
                     return true;
              }
              else{
              
                     return false;
              }
            }
            catch(Exception $e){
                     echo $e->getMessage();
            }
       }

       public function checkstock(){
              $conn=mysqli_connect("localhost","root","","a3");
              
               $sql="update product set stock=(stock-1) where product_id= ?";
               $stmt=$conn->prepare($sql);
               $stmt->bind_param('d',$this->pid);
               try{
                     if($stmt->execute()){
                            return true;
                     }
                     else{
                     
                            return false;
                     }
                   }
                   catch(Exception $e){
                            echo $e->getMessage();
                   }
              
               
             }
             public function reducestock(){
              $conn=mysqli_connect("localhost","root","","a3");
               $sql="update product set stock=(stock-($this->qty-1)) where product_id= ?";
               $stmt=$conn->prepare($sql);
               $stmt->bind_param('d',$this->pid);
               try{
                     if($stmt->execute()){
                            return true;
                     }
                     else{
                     
                            return false;
                     }
                   }
                   catch(Exception $e){
                            echo $e->getMessage();
                   }
               
             }





       public function getALLCartItems(){
              $conn=mysqli_connect("localhost","root","","a3");
           $sql="select c.*,w.product_price,w.product_desc,w.image from cart c join product w on c.pid=w.product_id where cid= ?";
           $stmt=$conn->prepare($sql);
           $stmt->bind_param('d',$this->cid);
           $stmt->execute();
           $result=$stmt->get_result();
           $carts=mysqli_fetch_all($result,MYSQLI_ASSOC);
           return $carts;
       } 
          public function updateItem(){
              $conn=mysqli_connect("localhost","root","","a3");
                 $sql="update `cart` set `qty`=?,`totalAmount`=? where cid=? and pid=?";
                 $stmt=$conn->prepare($sql);
                 $stmt->bind_param('iiii',$this->qty,$this->totalAmount,$this->cid,$this->pid); 
                 try{
                     if($stmt->execute()){
                            return true;
                     }
                     else{
                     
                            return false;
                     }
                   }
                   catch(Exception $e){
                            echo $e->getMessage();
                   }
          }
      public function removeItem(){
             $conn=mysqli_connect("localhost","root","","a3");
             $sql="delete from `cart` where id=?";
             $stmt=$conn->prepare($sql);
                 $stmt->bind_param('i',$this->id); 
                 try{
                     if($stmt->execute()){
                            return true;
                     }
                     else{
                     
                            return false;
                     }
                   }
                   catch(Exception $e){
                            echo $e->getMessage();
                   }

      }
      public function calculatePrices(){

     

       $cartItems=$this->getALLCartItems();
       
       $subTotal =0;
       $taxes=10;
       $qty=0;
       foreach($cartItems as $key=>$cartItem){
         $subTotal +=$cartItem['totalAmount'];
         $qty +=$cartItem['qty']; 
       }
       $totalPrice=number_format($this->getTotalamount(),2);
       $taxes=$taxes*$qty;
       $finalPrice= number_format($subTotal+$taxes,2);
       $subTotal=number_format($subTotal,2);
       $taxes=number_format($taxes,2);
       $data=['itemCount'=>count($cartItems),'totalPrice'=>$totalPrice,'subTotal'=>$subTotal,'taxes'=>$taxes,'finalPrice'
       =>$finalPrice];
       return $data;
             
}
       public function removeAllItem(){
       $conn=mysqli_connect("localhost","root","","a3");
       $sql="delete from `cart` where cid=?";
       $stmt=$conn->prepare($sql);
           $stmt->bind_param('i',$this->cid); 
           try{
               if($stmt->execute()){
                      return true;
               }
               else{
               
                      return false;
               }
             }
             catch(Exception $e){
                      echo $e->getMessage();
             }

}

}
?>