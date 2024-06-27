<?php
$sql = 'SELECT * FROM products ORDER BY RAND() LIMIT 0,6';
			$products=whileData($sql);
			require 'routes/templates/result.php';