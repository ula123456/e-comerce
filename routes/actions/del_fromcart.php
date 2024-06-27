<?php

					
foreach ($_POST['remove'] as $remove_id) {

	$sql = "DELETE FROM cart WHERE product_id ='$remove_id' AND ip_adress='$ip' ";
	$run_delete=exe($sql);
								
	if ($run_delete) { echo "<script>window.open('cart.php','_self')</script>";
}
							 } ;
						