<section class="block download-group">

	<?php foreach ($block["external_repeater"] as $link) { ?>
	<article>
		<p><span><?php echo $link["title"]; ?></span><br>
		<?php echo $link["details"]; ?></p>
		<button><a href="<?php echo $link["link"]; ?>"><?php _e( 'external_block.php | Download:', 'innovation' ); ?></a></button>
	</article>
	<?php } ?>



<?php
// If the spacer option is selected, add a horizontal line on the bottom.
if ($block["spacer"]) {
		echo '<img src="http://innovationbrain.com/wp-content/themes/innovation/img/au-line.png" class="block content-spacer-line" alt="spacer">';
} ?>
</section>