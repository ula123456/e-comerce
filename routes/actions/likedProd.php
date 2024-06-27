<?php 
include("routes/templates/header.php");
include("routes/templates/sidebar.php"); 
$products = whileData($sql ="SELECT `product_id` FROM `likes`");

foreach ($products as $id_pro ) {
				$id_prod=$id_pro['product_id'];
				$sql = "SELECT * FROM products WHERE product_id= '$id_prod'";
				$row_pro = execute($sql); ?>
				<div id='single_product'>
			    <h3><?=$row_pro[0]["product_brand"] ?></h3>
				<img src='<?= STORAGE_DIR.$row_pro[0] ['product_image'] ?>' width='180' height='180' />
					
				<p><b> Price: $ <?=$row_pro['product_price'] ?></b></p>
				
				<a href="http://localhost/ecom/index.php/details/<?=$row_pro[0]['product_id'] ?>">Details</a>
				<a href="http://localhost/ecom/index.php/likes/<?=$row_pro[0]['product_id'] ?>">likes <?=$like ?></a>
				
				
				<a href="http://localhost/ecom/index.php/cart/add/<?= $row_pro[0]['product_id'] ?>">
				  <button style='float:right'>Add to Cart</button>
				</a>
			  </div>
<?php	
}
		
include("routes/templates/footer.php");  ?>
			