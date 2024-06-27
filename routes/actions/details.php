<?php 
				$routeParts = explode('/', $route);

				if (count($routeParts) !==3) {
				echo "ungulige URL";
				exit();		}

		 		$productId = $routeParts[2];

				if (0 === strlen($productId)) {
				echo "ungulige product";
				exit();
				}
				$sql= "SELECT * FROM products WHERE product_id=$productId";
				$row_pro=Execute($sql);
				require_once 'routes/templates/details.php';
				
				

				