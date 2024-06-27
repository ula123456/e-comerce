<?php  
	$productId= $row_pro['product_id'];
$s=ExecuteNUM($sql ="SELECT count(*) FROM `likes` WHERE  product_id =$productId");
			if ($s>0) { $like="❤"; }else{$like=" ";} 