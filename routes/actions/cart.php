<?php 				

	$total = 0;
	$dbh = whileData($sql = "SELECT * FROM cart WHERE ip_adress = '$ip'");
		
	foreach ($dbh as $fetch_cart ) {
	$product_id = $fetch_cart['product_id'];
	$fetch_prod =Execute($sql="SELECT * FROM products WHERE product_id='$product_id'");
				
		foreach ( $fetch_prod as $fetch_product) {
		$product_price = array($fetch_product['product_price']);
	 	$product_title = $fetch_product['product_title'];
		$product_image = $fetch_product['product_image'];
		$sing_price = $fetch_product['product_price'];
		$values = array_sum($product_price);
		$row_qty = ExecuteNUM($sql="SELECT count(*) from cart where product_id='$product_id'");

		$qty = $row_qty;
		$values_qty = $values*$qty;
		$total += $values_qty; 

		include("routes/templates/prod_in_cart.php");  

		}
	}




if (isset($_POST['remove'])) {
					foreach ($_POST['remove'] as $remove_id) {
						$sql = "DELETE FROM cart WHERE product_id ='$remove_id' AND ip_adress='$ip' ";
						$run_delete=exe($sql );echo "<script>window.open('cart.php','_self')</script>";
						 } ;
					}