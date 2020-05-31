<?php
$conn = mysqli_connect('localhost','root',"",'shop');
 $name = $_POST['f_name'];
$last = $_POST['l_name'];
 $email = $_POST['email'];
 $password = $_POST['pass'];
 $repassword = $_POST['rpass'];
 $add1 = $_POST['add1'];
 $add2 = $_POST['add2'];
/*
$namef ="/^[A-Z][a-zA-Z ]+$/";
$emailvalidation = "/[_a-z0-9]+(\.[a-z0-9]) *@[a-z0-9]+(\.[a-z]{2,4})$/";
$numbervalidation = "/^[0-9]+$/";
*/

if(empty ($name) || empty ($last) || empty ($email) || empty ($password) || empty ($repassword) || empty ($add1) ||
	empty ($add2))
{
	echo '<div class="alert  alert-warning">
	       <a href="#" class="close" data-dismiss="alert" >&times</a>
				 <b>fill all the filed...!</b>
	    </div>';
	exit();
}
/*else
{
    if(!preg_match($namef,$name))
 {
	 echo " this  name $name is not valid";
	 
 }

if(!preg_match($emailvalidation,$email))
 {
	 echo " this  name $emailvalidation is not valid";
	 exit();
 }
if(!preg_match($numbervalidation,$password))
 {
	 echo " this  name $numbervalidation is not valid";
	 exit();
 }

 if(strlen($password)<9)
 {
	 echo "password is week";
		 exit();
 }
if(strlen($repassword)<9)
{
	echo "password is week";
	exit();
}
if($password!= $repassword)
{
	echo "password not same";
	exit();
}
	
}*/

$sql ="select  user_id from user_info where email = '$email' limit 1";
$check_query = mysqli_query($conn,$sql);
$count_email =mysqli_num_rows($check_query);
 if($count_email >0)
 {
	 echo "email address is allready inserted try another email";
	 exit();
 }




else
{
	
$sql=" INSERT INTO `user_info`( `firstname`, `lastname`, `email`, `password`, `mobile`, `add1`, `add2`) VALUES
('$name','$last','$email','$password','$repassword','$add1','$add2')";


$result = mysqli_query($conn,$sql) or mysqli_error($conn);
	if($result)
{
	echo"data inserted";
}
else
{
	echo "data not inserted";
}
}


?>	