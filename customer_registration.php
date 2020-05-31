<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>website</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
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
	<script>
		$(document).ready(function(){
		$('#signup').click(function(event){
			event.preventDefault();
			 //alert('ok');
			$.ajax({
				url:"register.php",
				method:"post",
				data:$('form').serialize(),
				success:function(data)
				{
					$('#alertmsg').html(data);
				}
			});
		});	
		})
	 	
	</script>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<a href="index.php" class="navbar-brand">home</a>
		<ul class="navbar-nav">
			
		</ul>
	</nav>
	<p><br/></p>
	<p><br/></p>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="card ">
					<div class="card-heading bg-info text-white">
						<h4>customer Registration form</h4>
					</div>
					<div class="card-body">
					<div class="row">
						<div class="col-md-12" id="alertmsg">
							<!---aleret-->
						</div>
					</div>
					<form >
					<div class="row">
						<div class="col-md-6">
						<label for="f_name">First Name</label>
						<input type="text" class="form-control" id="f_name" name="f_name">	
						</div>
						<div class="col-md-6">
							<label for="f_name">LastName</label>
						<input type="text" class="form-control" id="l_name" name="l_name">
						</div>
					</div>
						
						<div class="row">
								<div class="col-md-12">
							<label for="f_name">Email</label>
						<input type="text" class="form-control" id="Email" name="email">
						</div>
							
						</div>
						
							<div class="row">
								<div class="col-md-12">
							<label for="password">password</label>
						<input type="password" class="form-control" id="password" name="pass">
						</div>
							
						</div>
								<div class="row">
								<div class="col-md-12">
							<label for="repassword">Re_enter password</label>
						<input type="password" class="form-control" id="repassword" name="rpass">
						</div>
							
						</div>
							<div class="row">
								<div class="col-md-12">
							<label for="mobile">mobile</label>
						<input type="text" class="form-control" id="mobile" name="mobile">
						</div>
							
						</div>
								<div class="row">
								<div class="col-md-12">
							<label for="address">Address1</label>
						<input type="text" class="form-control" id="address1" name="add1">
						</div>
							
						</div>
						
						
						<div class="row">
								<div class="col-md-12">
							<label for="address2">Address2</label>
						<input type="text" class="form-control" id="address2" name="add2">
						</div>
							
						</div>
						
					
							<p><br/></p>
							<div class="row">
								<div class="col-md-12">
						
					  	<button  id="signup" class="btn btn-success">signup</button>
							</div>

						</div>
						
						
					</div>
					</form> 
					<div class="card-footer">
						
					</div>
					
				</div>
				
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	
	</body>
</html>
