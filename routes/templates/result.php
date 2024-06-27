<?php 
require_once 'header.php'; 
include("routes/templates/sidebar.php");?>
		
		
		 

			<div id="content_area">
				<div id="product_box">

			<?php foreach ($products as $row_pro): 
			require 'routes/actions/cheklike.php';
			 ?>
		      <div id='single_product'>
			    <h3><?=$row_pro["product_brand"] ?></h3>
				<img src='<?= STORAGE_DIR.$row_pro['product_image'] ?>' width='180' height='180' />
					
				<p><b> Price: $ <?=$row_pro['product_price'] ?></b></p>
				
				<a href="/ecom/index.php/details/<?=$row_pro['product_id'] ?>">Details</a>
				<a href="/ecom/index.php/likes/<?=$row_pro['product_id'] ?>">likes <?=$like ?></a>
				
				
				<a href="/ecom/index.php/cart/add/<?= $row_pro['product_id'] ?>">
				  <button style='float:right'>Add to Cart</button>
				</a>
			  </div>
		<?php endforeach;?>

					

					
				</div>
			</div>
				
		</div><!-- content end -->
<?php require_once 'footer.php';  ?>