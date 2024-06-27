<?php 
			$routeParts = explode('/', $route);
			$productId = (int)$routeParts[3];

			$_SESSION['redirectTarget']=$baseUrl."index.php/cart/add/".$productId;
			//redirectIfNotLogged('/login');
			$sql="SELECT * FROM products WHERE product_id=$productId ";
			$run=Execute($sql);	

	$quality = $run['product_price'];
	$product_title = $run[0]['product_title'];
	$product_price = $run[0]['product_price'];

	
	$sql = "INSERT INTO cart
			(product_id,
			product_title,
			product_price,
			ip_adress) 
	 						VALUES('$productId',
	 								'$product_title',
								 	'$product_price',
	 				'$ip')";

	$s=Exe($sql);	
	
			//header("Location: " .$baseUrl."index.php"); 