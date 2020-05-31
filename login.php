<?php
include('db.php');
session_start();
	
if(isset($_POST['userlogin']))
{
	
	 $email = $_POST['email'];
   $pass = $_POST['password'];
	
	$sql = " select * from user_info where email='$email' AND password ='$pass'";
	$run_query = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($run_query);
	if($count==1)
	{
		$row= mysqli_fetch_array($run_query);
		 $_SESSION['uid'] = $row['user_id'];
		 $_SESSION['name'] = $row['firstname'];
		echo "true";
	}
	else
	{
		echo "condition false";
	}
}
else
{
	echo " user login not clicked";
}


?>