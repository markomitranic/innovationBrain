		<h4><?php echo $block["title"]; ?></h4>

		<img src="http://innovationbrain.com/wp-content/themes/innovation/img/au-line.png" class="block content-spacer-line" alt="spacer">

		<section class="block circle-group">
			<div class="au-circle">
				<div class="circle">
					<div class="icon <?php echo $block["circle1"]; ?>"></div>
				</div>
				<p class="headline"><?php echo $block["circle1_label"]; ?></p>
				<p><?php echo $block["paragraph1"]; ?></p>
			</div>
			<img src="http://innovationbrain.com/wp-content/themes/innovation/img/au-line.png" class="block content-spacer-line hidden-line" alt="spacer">
			<div class="au-circle">
				<div class="circle">
					<div class="icon <?php echo $block["circle2"]; ?>"></div>
				</div>
				<p class="headline"><?php echo $block["circle2_label"]; ?></p>
				<p><?php echo $block["paragraph2"]; ?></p>
			</div>
			<img src="http://innovationbrain.com/wp-content/themes/innovation/img/au-line.png" class="block content-spacer-line hidden-line" alt="spacer">
			<div class="au-circle">
				<div class="circle">
					<div class="icon <?php echo $block["circle3"]; ?>"></div>
				</div>
				<p class="headline"><?php echo $block["circle3_label"]; ?></p>
				<p><?php echo $block["paragraph3"]; ?></p>
			</div>
		</section>


<?php
// If the spacer option is selected, add a horizontal line on the bottom.
if ($block["spacer"]) {
		echo '<img src="http://innovationbrain.com/wp-content/themes/innovation/img/au-line.png" class="block content-spacer-line" alt="spacer">';
} ?>