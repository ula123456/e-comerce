<?php 
			$routeParts = explode('/', $route);
			$productId = (int)$routeParts[2];

			$_SESSION['redirectTarget']=$baseUrl."index.php/likes/".$productId;
			//redirectIfNotLogged('/login');
			$user_id = $ip;

$s=ExecuteNUM($sql ="SELECT count(*) FROM `likes` WHERE  product_id =$productId");

if ($s>0)
	{$sql ="DELETE FROM `likes` WHERE product_id =$productId";
}else{
	$sql = "INSERT INTO likes (product_id, user_id) 
	 			VALUES('$productId', '$user_id')";
}
	
	Exe($sql);

		
	
			//header("Location: " .$baseUrl."index.php"); 