<? php
class dbConnect{

    private $host='localhost';
    private $dbName='a2';
    private $user='root';
    private $pass='';
    
     public function connect(){
         try{
             $conn=mysqli_connect("localhost","root","","a2");
             return $conn;
         }
         catch($e)
         {
               echo 'Database Error: ' . $e->getMessage();
         }
     }


}





?>