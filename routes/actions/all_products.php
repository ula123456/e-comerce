<?php 
				$sql = "SELECT * FROM products ";
				$products = whileData($sql);
				require 'routes/templates/result.php';