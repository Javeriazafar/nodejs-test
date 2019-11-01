<? php
 $conn=mysqli_connect("localhost","root","","a2");
// function for ip address

function getRealIpAddr(){
	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		$ip=$_SERVER['HTTP_CLIENT_IP'];
	}
	else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
	{
		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	}
     else{
		 $ip=$_SERVER['REMOTE_ADDR'];
	 }	
	 return $ip;
	
	
}

	if(isset($_GET['add'])){
		$ip_add=getRealIpAddr();
		$p_id=$_GET['id'];
		$p_quan=$_GET['quantity'];
		$check_pro="select * from cart where ip_add='$ip_add' AND p_id='$p_id'";
        $run_check=mysqli_query($conn,$check_pro);
       if(mysqli_num_rows($run_check)>0){
		   echo "";
	   }		
	   else{
		   $q="insert into cart (p_id,ip_add,qty) values ('$p_id','$ip_add','$p_quan')";
		   $run_q=mysqli_query($conn,$q);
	   }
		
		
	}
}



?>
