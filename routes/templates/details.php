<?php

require_once 'header.php' ?>
	
		
<div class="content_wrapper"><!-- content start -->
			<div id="sidebar"><!-- sidebar start -->
				<div id="sidebar_title">Categories</div>
				<ul id="cats">
					<?php 
				
					
					foreach ($cat as $row_cat):  ?>
					
					<li><a href='/index.php/cat/<?= $row_cat['id']; ?>'>ui<?= $row_cat['title']; ?></a></li>
					 <?php endforeach;?>

				</ul>
				<div id="sidebar_title">Brands</div>
				<ul id="cats">
					<?php foreach ($brand as $row_brand):  ?>
					<li><a href='/index.php/brand/<?= $row_brand['id']; ?>'>oi<?= $row_brand['title']; ?></a></li>
					<?php endforeach;?>
				</ul>

			</div><!-- sidebar start -->
			

			<div id="content_area">
				<div id="product_box">

					<div id='single_product'>
			    		<h3><?=$row_pro['product_title']; ?></h3>
						<img src='<?= STORAGE_DIR.$row_pro[0]['product_image'] ?>' width='280' height='280' />
				
						<p><b> Price: $ <?=$row_pro[0]['product_price'] ?></b></p>
				
						<a href="/index.php/details/<?= $row_pro[0]['product_id'] ?>">Details</a>

				
						<a href="/index.php/cart/add/<?= $row_pro[0]['product_id'] ?>">
				 		 <button style='float:right'>Add to Cart</button></a>
			    	</div>

				</div>
			</div>
				
</div><!-- content end -->


<?php include("footer.php");  ?>