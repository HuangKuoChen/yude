<?php include "header.php"; ?>
<div id="content" name="certificate">
	<div class="title">工廠環境</div>
	<div id="slide_area">
		<div class="slide_big">
			<?php
				$factory_dir = 'img/factory/';
				$factory_img = scandir($factory_dir);
				foreach ($factory_img as $value) {
					if($value === '.' || $value === '..')
						continue;
					echo '<div><img src="' . $factory_dir . $value .'"/></div>';
				}
			?>
		</div>
		<div class="slide_nav">
		</div>
	</div>

	<div class="title">工廠認證</div>
	<div id="report_area">
		<div id="report_big">
			<?php
				$certificate_dir = 'img/certificate/';
				$certificate_img = scandir($certificate_dir);
				foreach ($certificate_img as $key => $value) {
					if($value === '.' || $value === '..')
						continue;
					echo '<img id="report' . $key . '" class="report_big_img" src="'. $certificate_dir . $value .'"/>';
				}
			?>
		</div>
		<div id="outer_report_nav">
			<div id="scroll_up"></div>
			<div id="inner_report_nav">
				<div id="report_nav">
					<?php
						foreach ($certificate_img as $key => $value) {
							if($value === '.' || $value === '..')
								continue;
							$exif_data = exif_read_data($certificate_dir . $value, 'IFD0');
							$exif_description = "";
							if (!empty($exif_data['ImageDescription'])) 
								$exif_description = $exif_data['ImageDescription'];
							echo '<a href="#report' . $key . '" class="report_nav_img"><img src="'. $certificate_dir . $value .'" title="'. $exif_description .'"/></a>';
						}
					?>
				</div>
			</div>
			<div id="scroll_down"></div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function() {
		InitialReportArea();
	});
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
<?php include "footer.php"; ?>