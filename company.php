<?php include "header.php"; ?>
<div id="content" name="company">
	<div id="company_img">
		<div class="company_imgs">
			<?php
				$company_dir = 'img/company/';
				$company_img = scandir($company_dir);
				foreach ($company_img as $value) {
					if($value === '.' || $value === '..')
						continue;
					echo '<div><img src="' . $company_dir . $value .'"/></div>';
				}
			?>
		</div>
	</div>
	<table id="company_table" cellpadding="5">
		<tr>
			<td rowspan="5" width="260"><img src="img/company.png" width="250"/></td>
			<td valign="top" width="110"><strong>公司地址</strong></td>
			<td valign="top" width="330">高雄市路竹區中山路1293巷42號</td>
		</tr>
		<tr>
			<td><strong>公司電話</strong></td>
			<td>(07)696-6089</td>
		</tr>
		<tr>
			<td><strong>傳真號碼</strong></td>
			<td>(07)696-4953</td>
		</tr>
		<tr>
			<td><strong>聯絡電話</strong></td>
			<td>0970-951-882 張正宜</td>
		</tr>
		<tr>
			<td><strong>電子信箱</strong></td>
			<td>yude.coltd@gmail.com</td>
		</tr>
	</table>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5199.571301216648!2d120.25987430569641!3d22.85235642969928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91679a3ddaab56ee!2z6KOV5b6z6aOf5ZOB5LyB5qWt5pyJ6ZmQ5YWs5Y-4!5e0!3m2!1sja!2sjp!4v1512268160455" width="800" height="600" frameborder="0" style="display: block; border: 0; margin: 0 auto;" allowfullscreen></iframe>
</div>
<?php include "footer.php"; ?>
<script type="text/javascript">
	$(function() {
		$('.company_imgs').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			dots: true,
			infinite: true,
			speed: 500,
			fade: true,
			cssEase: 'linear'
		});
	});
</script>