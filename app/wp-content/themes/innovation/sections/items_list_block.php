<section class="block history-group">

	<?php foreach ($block["items_list_repeater"] as $item) { ?>
	<article>
		<p><?php echo $item["title"]; ?></p>
		<footer class="location">
			<p><?php echo $item["description"]; ?></p>
		</footer>
	</article>
	<?php } ?>


<?php
// If the spacer option is selected, add a horizontal line on the bottom.
if ($block["spacer"]) {
		echo '<img src="http://innovationbrain.com/wp-content/themes/innovation/img/au-line.png" class="block content-spacer-line" alt="spacer">';
} ?>
</section>