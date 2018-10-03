<?php include "header.php"; ?>
<div id="content"  name="products">
	<div id="slide_area">
		<div class="slide_big">
			<?php
				$products_dir = 'img/products/';
				$products_img = scandir($products_dir);
				foreach ($products_img as $value) {
					if($value === '.' || $value === '..')
						continue;
					echo '<div><img src="' . $products_dir . $value .'"/></div>';
				}
			?>
		</div>
	</div>
	<div>
		<img class="center" src="img/product_all.jpg" />
	</div>
</div>
<?php include "footer.php"; ?>
<script type="text/javascript">
	$(function() {
		$('.slide_big').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			fade: true,
			autoplay: true,
			autoplaySpeed: 2000
		});
	});
</script>
