<div class="bio-group">
	<div class="bio-left">
		<div class="person-circle">
			<img src="<?php echo $block["image"]; ?>" alt="">
		</div>
	</div>

	<div class="bio-right">
		<a href="<?php echo $block["button_link"]; ?>" download="<?php echo $block["button_label"]; ?>">
			<button class="button"><span class="icon icon-download blue"></span><?php echo $block["button_label"]; ?></button>
		</a>
		<?php echo $block["content"]; ?>
	</div>
</div>

<?php
// If the spacer option is selected, add a horizontal line on the bottom.
if ($block["spacer"]) {
		echo '<img src="http://innovationbrain.com/wp-content/themes/innovation/img/au-line.png" class="block content-spacer-line" alt="spacer">';
} ?>