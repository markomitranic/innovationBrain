<footer class="block read-more-group">
	<h3><?php _e( 'read_more_block.php | Read More', 'innovation' ); ?></h3>
	<img class="brochure-img" src="<?php echo $block["image"]; ?>">
	<h4><?php echo $block["title"]; ?></h4>
	<a href="<?php echo $block["button_link"]; ?>" download="<?php echo $block["title"]; ?>">
		<button class="button">
			<span class="icon icon-download blue"></span>
			<?php echo $block["button_label"]; ?>
		</button>
	</a>
</footer>
<div class="clearfix"></div>