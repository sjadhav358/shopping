<?php

session_start();
if(!isset($_SESSION['uid']))
{
	header("location:1index.php");
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
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<script>
	
	$(document).ready(function(){
		$('body').delegate("#product","click",function(Event){
			Event.preventDefault();
			
			var p_id = $(this).attr('pid');
			//alert(p_id);
			$.ajax({
				url:"action.php",
				type:"post",
				data:{addtoproduct:1,
							proid:p_id
						 },
				success:function(data)
				{
					 $('#product_msg').html(data);
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
		
		img#p_img {
    height: 47px;
    padding: 4px;
    margin: 5px;
    width: 71px;
}
		
		
		
		card
		{
			width: 45%;
			height: 45%;
			position: fixed;
		}
		.dropdown-item >a
		{
			list-style: none;
			border: 1px dotted black;
			border-top: 0px;
			border-left: 0px;
			border-right: 0px;
			width: 100%;
			color: royalblue;
			
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<a href="#" class="navbar-brand">home</a>
		<ul class="navbar-nav">
		
			<li class="nav-item" style="width:300px;left:10px;top:10px;">
				<input type="text" class="form-control ml-4" id="search"style='height:35px;'placeholder="search product here">
			</li>
			<li style="top:10px;left:20px;">
				<button  class="btn btn-primary ml-5 btn-sm" id="search">search</button></li>
		</ul>
		
				<ul class="navbar-nav ml-auto">
		
				<li class="nav-item dropdown">
				<a id="card_container" href="#" class="nav-link " data-toggle="dropdown">card<span>
					
				</span>
				
				<span class="badge badge-info"></span></a>
				<ul class="dropdown-menu" style="margin-left:-200px;">
					<div class="dropdown-item " style="margin-left:-15px; width:400px;">
						<div class="card bg-success">
							<div class="card card-heading">
								<div class="row">
									<div class="col-md-3">
									<label>sr no</label>	
									</div>
									
									<div class="col-md-3">
										<label>p_image</label>
									</div>
									
									<div class="col-md-3">
										<label>p_name</label>
									</div>
									
									<div class="col-md-3">
										<lable>p_price</lable>
									</div>
								</div>
							</div>
							<div class="card card-body">
								<div id="card_product">
							   
								<!--row
									<div class="row">
									<div class="col-md-3">
									<label>sr no</label>	
									</div>
									
									<div class="col-md-3">
										<label>p_image</label>
									</div>
									
									<div class="col-md-3">
										<label>p_name</label>
									</div>
									
									<div class="col-md-3">
										<lable>p_price</lable>
									</div>
								</div>
								!-->
							</div>
							</div>
							<div class="card card-footer">
								<h4></h4>
							</div>
						</div>
				
					</div>
				</ul>
			</li>
			
			<li class="nav-item dropdown">
				<a href="#" class="nav-link text-white " data-toggle="dropdown">welcome, <?php echo $_SESSION['name'];?></a>
				<ul class="dropdown-menu" style="margin-left:-80px;">
			
		    <div class="dropdown-item ">
		    	<a href="card.php"  style=""class="nav-link text-primary ">mycard</a>
		    	  	
		    	  	
		    	 	<a href="logout.php" class="nav-link text-primary  ">lagout</a>
		    	 	
		    </div>
			
					
				</ul>
			</li>
			
	
			
		</ul>
	</nav>
	
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
			<div class="row">
				<div class="col-md-12" id="product_msg"></div>
			</div>
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
						<div class="card-footer"></div>
				<div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno">
						
						
					</ul>
				</center>
			</div>
				</div>
				
				
				</div>
				
			</div>
			<div class="col-md-1"></div>
			</div>

		</div>
	</div>
</body>
</html>