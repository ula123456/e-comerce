<?php 
$keyword = $_GET['user_query'];
				$products = search_Pro($keyword);	
				require_once 'routes/templates/result.php';