<?php include "header.php"; ?>
<div id="content" name="report">
	<div id="report_area">
		<div id="report_big">
			<?php
				$report_dir = 'img/report/';
				$report_img = scandir($report_dir);
				foreach ($report_img as $key => $value) {
					if($value === '.' || $value === '..')
						continue;
					echo '<img id="report' . $key . '" class="report_big_img" src="'. $report_dir . $value .'"/>';
				}
			?>
		</div>
		<div id="outer_report_nav">
			<div id="scroll_up"></div>
			<div id="inner_report_nav">
				<div id="report_nav">
					<?php
						foreach ($report_img as $key => $value) {
							if($value === '.' || $value === '..')
								continue;
							echo '<a href="#report' . $key . '" class="report_nav_img"><img src="'. $report_dir . $value .'"/></a>';
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
</script>
<?php include "footer.php"; ?>