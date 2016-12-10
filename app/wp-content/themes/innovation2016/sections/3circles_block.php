<section class="block circle-group">
	<div class="au-circle">
		<div class="circle">
			<div class="icon <?php echo $block["circle1"]; ?>"></div>
		</div>
		<p><?php echo $block["circle1_label"]; ?></p>
	</div>

	<img src="http://innovationbrain.com/wp-content/themes/innovation2016/img/au-line.png" class="block content-spacer-line hidden-line" alt="spacer">

	<div class="au-circle">
		<div class="circle">
			<div class="icon <?php echo $block["circle2"]; ?>"></div>
		</div>
		<p><?php echo $block["circle2_label"]; ?></p>
	</div>

	<img src="http://innovationbrain.com/wp-content/themes/innovation2016/img/au-line.png" class="block content-spacer-line hidden-line" alt="spacer">

	<div class="au-circle">
		<div class="circle">
			<div class="icon <?php echo $block["circle3"]; ?>"></div>
		</div>
		<p><?php echo $block["circle3_label"]; ?></p>
	</div>
</section>


<?php
// If the spacer option is selected, add a horizontal line on the bottom.
if ($block["spacer"]) {
		echo '<img src="http://innovationbrain.com/wp-content/themes/innovation2016/img/au-line.png" class="block content-spacer-line" alt="spacer">';
} ?>