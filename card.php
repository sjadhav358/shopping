<?php

session_start();
if(!isset($_SESSION['uid']))
{
	header("location:\index.php");
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
			
			var p_id = $(this).attr('pid');
			//alert(p_id);
			$.ajax({
				url:"action.php",
				type:"post",
				data:{addtoproduct:1,proid:p_id},
				success:function(data)
				{
					 $('#product_msg').html(data);
				}
			});
		});
		
		
			$('body').delegate(".qty","keyup",function(){
		  		var pid= $(this).attr("pid");
				//alert(pid);
				var qty = $('#qty-'+pid).val();
				var price =$('#price-'+pid).val();
				var total = qty * price;
			   $('#total-'+pid).val(total);
				//var allamount = total+total;
				//var amt =$('.all').val();
				 
				
	});
		
		
	 card_checkout();
	 function card_checkout(){
		 $.ajax({
			 url:'action.php',
			 type:'post',
			 data:{card_checkout:1},
			 success:function(data,staus)
			 {
				 $('#card-checkout').html(data);
			 }
		 });
	 }
		$('body').delegate('.update','click',function(Event){
			Event.preventDefault();
			var pid = $(this).attr('update_id');
				var qty = $('#qty-'+pid).val();
				var price =$('#price-'+pid).val();
			  var total =$('#total-'+pid).val();
						$.ajax({
				url:"action.php",
				method:'post',
				data:{updateProduct:1,updateid:pid,qty:qty,price:price,total:total},
				success:function(data,staus)
				{
					 $('#card_msg').html(data);
					card_checkout();
					
				}
				
			});
			//alert(pid);
	
		});

				$('body').delegate('.delete','click',function(Event){
			Event.preventDefault();
					
			var pid = $(this).attr('delete_id');
						$.ajax({
				url:"action.php",
				method:'post',
				data:{removeFormCard:1,removeid:pid},
				success:function(data,staus)
				{
					 $('#card_msg').html(data);
					card_checkout();
					
				}
				
			});
					/*
			alert(data);
			*/
		});
	});
	

	</script>
	<style>
		img
		{
			width: 100%;
	   
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
		<a href="index.php" class="navbar-brand">home</a>
		<ul class="navbar-nav">
			
		</ul>
	</nav>
	<p><br/></p>
	<div class="container">
	<div class="row">
		<div class="col-md-2" id=""></div>
		<div class="col-md-8" id="card_msg">
			
			<!--card-messssag-->
		</div>
	</div>
		<div class="row">
			<div class="col-md-2">
			
			</div>
				<div class="col-md-8">
				<div class="card ">
					<div class="card-heading bg-info text-white p-2">
						card checkout
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-2">
								<b>Action</b>
							</div>
							<div class="col-md-2">
								<b>Product image</b>
							</div>
							<div class="col-md-2">
								<b>Product name</b>
							</div>
							<div class="col-md-2">
								<b>product quntity</b>
							</div>
							<div class="col-md-2">
								<b>product price</b>
							</div>
							<div class="col-md-2">
								<b>price in RS</b> 
							</div>
						</div>
						<div id="card-checkout"></div>
					<!--
							<div class='row'>
							<div class='col-md-2'>
								<div class='btn-group'>
									<a href='' class='btn btn-primary btn-sm'><span class=''>edit</span></a>
									<a href=''class='btn btn-danger btn-sm'><span class=''>delete</span></a>
								</div>
							</div>
							<div class='col-md-2'>
								<img src='img/chair2.jpg'>
							</div>
							<div class='col-md-2'>
								name
							</div>
							<div class='col-md-2'>
							<input type='text' class='form-control' value='1' >
							</div>
							<div class='col-md-2'>
								
										<input type='text' class='form-control' value='5000' disabled>
							</div>
							<div class='col-md-2'>
								<input type='text' class='form-control' value='5000' disabled>
							</div>
						</div>
						!-->
						<!--
				  <div class="row">
				  	<div class="col-md-8"></div>
				  	<div class="col-md-4">
				  		<b>total RS 500000</b>
				  	</div>
				  </div>
				  !-->
				
					</div>
					<div class="card-footer">
						
					</div>
				</div>
			</div>
				<div class="col-md-2">
				
			</div>
				<div class="col-md-2">
				
			</div>
				<div class="col-md-2">
				
			</div>
		</div>
	</div>
	</body>
</html>