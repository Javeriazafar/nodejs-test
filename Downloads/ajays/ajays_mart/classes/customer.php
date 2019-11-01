<?php

class customer{
      private $customer_id;
      private $customer_name;
      private $password;
      private $email;
      private $address;
      
       
       function setId($customer_id){$this->customer_id = $customer_id;}
       function getId(){return $this->customer_id;}
       function setName($customer_name){$this->customer_name = $customer_name;}
       function getName(){return $this->customer_name;}
       function setPassword($password){$this->password = $password;}
       function getPassword(){return $this->password;}
       function setEmail($email){$this->email = $email;}
       function getEmail(){return $this->email;}
       function setAddress($address){$this->address = $address;}
       function getAddress(){return $this->address;}

       public function getCustomerByEmailId(){
              $conn=mysqli_connect("localhost","root","","a3");
               $sql="select * from customer where email= ?";
               $stmt=$conn->prepare($sql);
               $stmt->bind_param('s',$this->email);
               $stmt->execute();
               $result=$stmt->get_result();
               $customer=$result->fetch_array(MYSQLI_ASSOC);
               return $customer;
             }
             public function getCustomerById(){
              $conn=mysqli_connect("localhost","root","","a3");
               $sql="select * from customer where customer_id= ?";
               $stmt=$conn->prepare($sql);
               $stmt->bind_param('i',$this->customer_id);
               $stmt->execute();
               $result=$stmt->get_result();
               $customer=$result->fetch_array(MYSQLI_ASSOC);
               return $customer;
             }


}
?>