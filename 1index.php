<?php
session_start();
 if(isset($_SESSION['uid']))
 {
	 header('location:profile.php');
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>website</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
	<script>
	
	$(document).ready(function(){
		$('body').delegate("#product","click",function(Event){
			Event.preventDefault();
			Event.preventDefault();
			var p_id = $(this).attr('pid');
			//alert(p_id);
			$.ajax({
				url:"action.php",
				type:"post",
				data:{addtoproduct:1,proid:p_id},
				success:function(data)
				{
					 $('#product_msg').html(data);
				   alert('product added');
				}
			});
		});
		
		$('#log').click(function(event){
			event.preventDefault();
			var email = $('#email').val();
			var pass = $('#password').val();
			
			
			$.ajax({
				url:"login.php",
				method:"post",
				data:{userlogin:1,
							email:email,
							password:pass
						 },
				success:function(data)
				{
					 if(data=="true")
						 {
							 window.location.href="profile.php";
							 console.log('correct');
						 }
					else
					{
						console.log('enter correct user name id');
					}
					//alert(data);
				}
			});
		
	});
	
	
	});
		
		

	</script>
	<style>
		img
		{
		   width: 100%;
			height: 200px;
		  position:relative;
			margin: 0px;
			padding: 0px;
			
	   
		}
		card
		{
			width: 45%;
			height: 45%;
			position: fixed;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<a href="#" class="navbar-brand">home</a>
		<ul class="navbar-nav">
			
			<li class="nav-item" style="width:300px;left:10px;top:10px;">
				<input type="text" class="form-control" id="search">
			</li>
			<li style="top:10px;left:20px;">
				<button  class="btn btn-primary ml-4" id="search">search</button></li>
		</ul>
		
				<ul class="navbar-nav ml-auto">
		
				<li class="nav-item dropdown">
				
				<ul class="dropdown-menu" style="margin-left:-200px;">
					<div class="dropdown-item " style="margin-left:-15px; width:400px;">
						<div class="card bg-success">
							<div class="card card-heading">
								<div class="row">
									<div class="col-md-3">
									<label>sr no</label>	
									</div>
									
									<div class="col-md-3">
										<label>image</label>
									</div>
									
									<div class="col-md-3">
										<label>name</label>
									</div>
									
									<div class="col-md-3">
										<lable>price</lable>
									</div>
								</div>
							</div>
							<div class="card card-body">
								<h4></h4>
							</div>
							<div class="card card-footer">
								<h4></h4>
							</div>
						</div>
				
					</div>
				</ul>
			</li>
			
			<li class="nav-item dropdown">
				<a href="#" class="nav-link " data-toggle="dropdown">sing-in</a>
				<ul class="dropdown-menu" style="margin-left:-140px;">
				<form action="" method="post">
					<div class="dropdown-item " style="margin-left:-15px; width:250px;">
						
						<div class="form-group">
						<label>Email</label>	<input type="text" id="email" class="form-control" name="email">
						</div>
						
						<div class="form-group">
						<label>password</label>	<input type="text" id="password" class="form-control" name="pass">
						</div>
						
						<input type="submit" class="btn btn-success btn-sm"	 id="log"  name="login" value="login">
						<input type="reset" class="btn btn-danger btn-sm" value="cancel">
						
						</form>
						<!--end of form-->
					</div>
				</ul>
			</li>
			
			<li class="nav-item">
				<a href="customer_registration.php" class="nav-link">sign up</a>
			</li>
			
		</ul>
	</nav>
	
	<p><br></p>
	<p><br></p>
	<p><br></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1">
				
			</div>
			<div class="col-md-2">
			<div id="get_category">
				
			</div>
			 <!--<div class="nav nav-pills flex-column">
			<a href="#" class="nav-link active" role="button" data-toggle="pill">Categoreis</a>
			<a href="" class="nav-link" role="button" data-toggle="pill">home</a>
			<a href="#" class="nav-link" role="button" data-toggle="pill">home</a>
		</div>
		!-->
		<div id="get_brand">
				
			</div>
		<br>

		 <!--<div class="nav nav-pills flex-column">
			<a href="" class="nav-link active" role="button" data-toggle="pill">Brand</a>
			<a href="" class="nav-link" role="button" data-toggle="pill">home</a>
			<a href="" class="nav-link" role="button" data-toggle="pill">home</a>
		</div>!-->
		
			</div>
			<div class="col-md-8">
				<div class="card ">
					<div class="card-heading">
						<div class="card-body">
						<div id="get_product" class="row p-2 mb-2">
							<!--here we get product -->
						
						</div>
						<!--card -->
						<!--
							<div class="col-md-4">
					    <div class="card card-info">
					    	<div class="card-heading bg-info text-white p-2">
					    		samsung Galaxy
					    	</div>
					    	<div class="card-body">
					    		<img src="img/man-1.jpg" width="100%" height="100%;">
					    	</div>
					    	<div class="card-heading bg-info text-white p-2">
					    		$500.00
					    		<button style="float:right;" class="btn btn-danger btn-sm">Add to card</button>
					    	</div>
					    </div>			
							</div>
						
						<!--card--end-->
						</div>
						<div class="card-footer">&cong; 2016</div>
					</div>
				</div>
				
			</div>
			<div class="col-md-1">
				
			</div>
		</div>
	</div>
</body>
</html>