$('document').ready(function(){
	cat();
	brand();
	product();
	function cat(){
		$.ajax({
			url:"action.php",
			type:"post",
			data:{category:1},
			success: function(data,staus)
			{
				$('#get_category').html(data);
			}
			
		});
	}
	function brand(){
		$.ajax({
			url:"action.php",
			type:"post",
			data:{brand:1},
			success: function(data,staus)
			{
				$('#get_brand').html(data);
			}
			
		});
	}
	
		function product(){
		$.ajax({
			url:"action.php",
			type:"post",
			data:{getproduct:1},
			success: function(data,staus)
			{
				$('#get_product').html(data);
			}
			
		});
	}
	
	$("body").delegate(".category","click",function(Event){
		Event.preventDefault();
		var cid = $(this).attr('cid');
		$.ajax({
				url:"action.php",
			type:"post",
			data:{get_select_catergory:1,cat_id:cid},
			success: function(data,staus)
			{
				$('#get_product').html(data);
			}
		});
	})
	
		$("body").delegate(".selectBrand","click",function(Event){
		Event.preventDefault();
		var bid = $(this).attr('bid');
		$.ajax({
				url:"action.php",
			type:"post",
			data:{selectBrand:1,brand_id:bid},
			success: function(data,staus)
			{
				$('#get_product').html(data);
			}
		});
	})
	
	$('#search').click(function(){
		var keyword = $('#search').val();
		if(keyword!="")
		{
			$.ajax({
				url:"action.php",
				type:"POST",
				data:{search:1,keyword:keyword},
				success:function(data,staus)
				{
					
					$('#get_product').html(data);
			
				}
			});
		}
	});
	
	

		$('#card_container').click(function(event){
			event.preventDefault();
		$.ajax({
					url:"action.php",
				type:"POST",
				data:{get_card_product:1},
				success:function(data,staus)
				{
					
					$('#card_product').html(data);
			
				}
			
		});
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
	
	
	
	
	

	});


	




	

	

