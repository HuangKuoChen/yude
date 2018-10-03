<?php include "header.php"; ?>
<div id="content">
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
		<div class="slide_nav">
		</div>
	</div>
</div>
<?php include "footer.php"; ?>
<script type="text/javascript">
	$(function() {
		$('.slide_nav').append($('.slide_big').contents().clone());
		$('.slide_big').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.slide_nav'
		});
		$('.slide_nav').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			asNavFor: '.slide_big',
			dots: false,
			arrows: true,
			centerMode: true,
			autoplay: true,
			autoplaySpeed: 2000,
			focusOnSelect: true
		});
	});
</script>