<?php 
$routeParts = explode('/', $route);

						$routeParts = explode('/', $route);

				if (count($routeParts) !==3) {
				echo "ungulige URL";
				exit();		}

		 		$brandId = $routeParts[2];
				if (0 === strlen($brandId)) {
				echo "ungulige product";
				require 'routes/templates/actions/brand.php';
				exit();
				}
				

				$sql = "SELECT * FROM products WHERE product_brand =". $brandId ;
				$products = whileData($sql);	
				require_once 'routes/templates/result.php';