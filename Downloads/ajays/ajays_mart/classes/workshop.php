<?php
$conn=mysqli_connect("localhost","root","","a3");
class workshop{
      private $product_id;
      private $product_name;
      private $product_price;
      private $product_desc;
      private $image;
      private $stock;
      public $dbConn;
       
       function setId($product_id){$this->product_id = $product_id;}
       function getId(){return $this->product_id;}
       function setName($product_name){$this->product_name = $product_name;}
       function getName(){return $this->product_name;}
       function setPrice($product_price){$this->product_price = $product_price;}
       function getPrice(){return $this->product_price;}
       function setDesc($product_desc){$this->product_desc = $product_desc;}
       function getDesc(){return $this->product_desc;}
       function setImage($image){$this->image = $image;}
       function getImage(){return $this->image;}
       function setStock($image){$this->stock = $stock;}
       function getStock(){return $this->stock;}

  
     
       public function getAllWorkshops(){
        $conn=mysqli_connect("localhost","root","","a3");
              $sql= "select * from product order by rand() LIMIT 0,25";
              $stmt=mysqli_query($conn,$sql);
              return $stmt;
         }
         public function getWorkshopById(){
          $conn=mysqli_connect("localhost","root","","a3");
           $sql="select * from product where product_id= ?";
           $stmt=$conn->prepare($sql);
           $stmt->bind_param('d',$this->product_id);
           $stmt->execute();
           $result=$stmt->get_result();
           $workshop=$result->fetch_array(MYSQLI_ASSOC);
           return $workshop;
         }



}
?>