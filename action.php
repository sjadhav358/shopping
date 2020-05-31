<?php
session_start();
$conn = mysqli_connect('localhost','root',"",'shop');
if(isset($_POST["category"]))
{
	$conn = mysqli_connect('localhost','root',"",'shop');
	
	$catergory_query = "SELECT * FROM `catergory`";
	$run_query = mysqli_query($conn,$catergory_query);
	echo "
	       <div class='nav nav-pills flex-column'>
			<a href='#' class='nav-link active' role='button' data-toggle='pill'>Categoreis</a>
	   ";
	if(mysqli_num_rows($run_query)>0)
	{
		while($row =mysqli_fetch_array($run_query))
	   {
		  $cid = $row['cid'];
		  $ctitle = $row['ctitle'];
			echo  "
			      	<a href='#' cid='$cid' class='nav-link category' role='button' data-toggle=''>$ctitle</a>
			      ";
		}
		echo"</div>";
	}
}

if(isset($_POST["brand"]))
{
	$conn = mysqli_connect('localhost','root',"",'shop');
	
	$_query = "SELECT * FROM `brand`";
	$r_query = mysqli_query($conn,$_query);
	echo "
	       <div class='nav nav-pills flex-column'>
			<a href='#' class='nav-link active' role='button' data-toggle=''>Brand</a>
	   ";
	if(mysqli_num_rows($r_query)>0)
	{
		while($row =mysqli_fetch_array($r_query))
	   {
		  $bid = $row['brand_id'];
		  $ctitle = $row['brand_title'];
			echo  "
			      	<a href='#' bid='$bid'  class='nav-link selectBrand ' role='button' data-toggle=''>$ctitle</a>
			      ";
		}
		echo"</div>";
	}
}



if(isset($_POST['getproduct']))
{
	$sql = " SELECT * FROM `product` ORDER BY RAND () LIMIT 0,9 ";
	 $RESULT = mysqli_query($conn,$sql);
	if(mysqli_num_rows($RESULT)>0)
	{
		while($row= mysqli_fetch_array($RESULT))
		{
		 $pid = $row['product_id'];
		 $pcat = $row['product_cat'];
			$pbrand = $row['product_brand'];
			$ptitle = $row['product_title'];
			$pprice = $row['product_price'];
			$pimg = $row['product_image'];
			echo "
			      
			    		<div class='col-md-4 col-lg-4 mb-5 '>
					    <div class='card card-info'>
					    	<div class='card-heading text-center bg-info text-white p-2 '>
					    		$ptitle
					    	</div>
					    	
					    		<img src='img/$pimg'id='imgdis'>
					    	
					    	<div class='card-heading bg-info text-white p-2'>
					    				Rs : $pprice 
					    		<button pid='$pid' style='float:right;' class='btn btn-danger btn-sm'
									id='product'>Add to card</button>
					    	</div>
					    </div>			
							</div>
						
							
							
			 ";
		}
	}
	
}
if(isset($_POST['get_select_catergory'])||(isset($_POST['selectBrand']))||(isset($_POST['search'])))
{
	if(isset($_POST['get_select_catergory'])){
			$id = $_POST['cat_id'];
	
	$sql = " select * from product where product_cat = '$id'";
	}
	else if(isset($_POST['selectBrand']))
	{
				$id = $_POST['brand_id'];
	
	$sql = " select * from product where product_brand = '$id'";
	}
	else
	{
					$keyword = $_POST["keyword"];
	
	$sql = " select * from product where product_keyword LIKE '%$keyword%' ";
	}

	$run_query = mysqli_query($conn,$sql);
	 while($row = mysqli_fetch_array($run_query))
	 {
		  $pid = $row['product_id'];
		 $pcat = $row['product_cat'];
			$pbrand = $row['product_brand'];
			$ptitle = $row['product_title'];
			$pprice = $row['product_price'];
			$pimg = $row['product_image'];
			echo "
			      
			    		<div class='col-md-4 col-lg-4 mb-5 '>
					    <div class='card card-info'>
					    	<div class='card-heading text-center bg-info text-white p-2'>
					    		$ptitle
					    	</div>
					    	<div class='card-body'>
					    		<img src='img/$pimg' >
					    	</div>
					    	<div class='card-heading bg-info text-white p-2'>
					    				Rs : $pprice 
					    		<button  pid='$pid' style='float:right;' class='btn btn-danger btn-sm' id='product'>Add to card</button>
					    	</div>
					    </div>			
							</div>
						
							
							
			 ";
	 }
	
}

if(isset($_POST['login']))
{
	echo $email = $_POST['userEmail'];
	echo $pass = $_POST['userPassword'];
	
	$sql = " select * from user_info where email='$email' AND password ='$pass'";
	$result =mysqli_query($conn,$sql);

	$flag=0;
	while($row=mysqli_fetch_array($result))
	{
		 if($email==$row['email'])
		 {
			 $flag=1;
			 echo $_SESSION['userid'] = $row['userid'];
			 echo $_SESSION['name'] = $row['firstname'];
		 }
		
	}
	if($flag==1)
	{
		header('location:profile.php');
	}
	else
	{
		header('location:1index.php');
		
	}
	
	

}

if(isset($_POST['addtoproduct'])){
if(isset($_SESSION['uid']))
{
	$p=$_POST['addtoproduct'];
	
		$p_id = $_POST['proid'];
	
	
	 $user_id =$_SESSION['uid'];
	
	$sql = "SELECT * FROM `card` where p_id = '$p_id' AND id ='$user_id'";
	$run_query = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($run_query);
	 if($count >0){
		 echo "product is all ready addeded to card continue shopping";
	 }
	else
	{
		$sql = " SELECT * FROM product where product_id='$p_id'";
		$run_query=mysqli_query($conn,$sql);
	   
		 if($run_query)
		 {
		   $row = mysqli_fetch_array($run_query);
		$product_id = $row['product_id'];
		$product_titile =	$row['product_title'];
		$product_img =	$row['product_image'];
		$product_price =$row['product_price'];
		
		$sql =" INSERT INTO `card` (`id`, `user_id`, `p_id`, `ip_add`, `product_title`,
		`product_image`, `qty`, `price`, `total_amount`)
		VALUES (NULL, '$user_id', '$product_id', '0', '$product_titile', '$product_img', '1', '$product_price', '$product_price');";
		
	
		if(mysqli_query($conn,$sql))
		{
			echo " <div class='alert alert-success'>
			       <a href='#' class='close' data-dismiss='alert'>&times;<b></a>
						 product added
			     </div>
			     ";
		}
			 else
			 {
				 echo "query failed";
			 }
			 
		 }
		else
		{
			echo " not work";
		}
		
	
		
		
		
		
	}
}
	else{
		echo "you have to sign-in for shopping..";
	}
	 
	
}


if(isset($_POST['get_card_product'])|| isset($_POST['card_checkout']))
{
	$uid = $_SESSION['uid'];
	$sql = "select * from card where user_id = '$uid'";
	$run_query =mysqli_query($conn,$sql);
	$count = mysqli_num_rows($run_query);
	if($count >0)
	{
		$no =1;
		$total_amt=0;
		While($row=mysqli_fetch_array($run_query))
		{
			$id = $row['id'];
			$pro_id=$row['p_id'];
			$pro_name = $row['product_title'];
			$pro_img = $row['product_image'];
			$qty = $row['qty'];
			$pamount =$row['price'];
			$total = $row['total_amount'];
			 
			 $price_array = array($total);
			 //print_r($price_array);
		 	$total_sum = array_sum($price_array);
			//echo $total_sum;
		 $total_amt = $total_amt + $total_sum;
			
			
			if(isset($_POST['get_card_product']))
			{
					echo "
			   	<div class='row'>
									<div class='col-md-3'>
									<label>$no</label>	
									</div>
									
									<div class='col-md-3'>
										<img src='img/$pro_img' id='p_img'>
									</div>
									
									<div class='col-md-3'>
										<label>$pro_name</label>
									</div>
									
									<div class='col-md-3'>
										<lable>$pamount</lable>
									</div>
								</div>
			 ";
			$no++;
			}
			else
			{
				echo "
				   <div class='row'>
							<div class='col-md-2'>
								<div class='btn-group'>
									<a href='' update_id='$pro_id'  class='btn btn-primary btn-sm update'><span class=''>update</span></a>
									<a href='' delete_id ='$pro_id' class='btn btn-danger btn-sm delete'><span class=''>delete</span></a>
								</div>
							</div>
							<div class='col-md-2'>
								<img src='img/$pro_img' width='35%'; height='50%'>
							</div>
							<div class='col-md-2'>
							$pro_name
							</div>
							<div class='col-md-2'>
							<input type='text' class='form-control qty' pid='$pro_id' id='qty-$pro_id' value='$qty' >
							</div>
							<div class='col-md-2'>
								
										<input type='number' class='form-control price  text-primary' pid='$pro_id' id='price-$pro_id'value='$pamount' disabled>
							</div>
							<div class='col-md-2'>
								<input type='number' class='form-control total text-danger all' pid='$pro_id' id='total-$pro_id' value='$total' disabled>
							</div>
							
						</div>
						
				 ";
			}
		
		}
		if(isset($_POST['card_checkout']))
		{
			
			 echo "
			 
			       <div class='row'>
				  	<div class='col-md-8'></div>
				  	<div class='col-md-4'>
				  		<b>total RS $total_amt </b>
				  	</div>
				  </div>
			   ";
		}
	}
}

 if(isset($_POST['removeFormCard']))
 {
	 $pid = $_POST['removeid'];
	 $uid = $_SESSION['uid'];
	 
	 $sql="delete from card where user_id='$uid' AND p_id ='$pid'";
	  $run = mysqli_query($conn,$sql);
	 
	  if($run)
		{
			echo " <div class='alert alert-success'>
			       <a href='#' class='close' data-dismiss='alert'>&times;<b></a>
						 product Remove 	
			     </div>";
		}
 }

 if(isset($_POST['updateProduct']))
 {
	 $uid = $_SESSION['uid'];
	 $pid =$_POST['updateid'];
	 $qty = $_POST['qty'];
	 $price =$_POST['price'];
	 $total = $_POST['total'];
	 
	 $sql = " update card set qty='$qty',price='$price',total_amount='$total' where user_id='$uid' AND p_id='$pid'";
	 $run = mysqli_query($conn,$sql);
	 if($run)
	 {
		 echo "
		   <div class='alert alert-primary'>
			       <a href='#' class='close' data-dismiss='alert'>&times;<b></a>
						 product update
			     </div>
		  ";
	 }
 }
?>