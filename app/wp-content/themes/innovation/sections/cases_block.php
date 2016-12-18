<?php foreach ($block["cases_repeater"] as $link) { ?>
<div class="split-group">
	<div class="split-left">
		<div class="blue-circle"><div class="icon <?php echo $link["icon"]; ?>"></div></div>
		<p><?php echo $link["icon_title"]; ?></p>
	</div>

	<div class="split-right">
		<h4><?php echo $link["title"]; ?></h4>
		<p class="success"><?php _e( 'cases_block.php | Success achieved:', 'innovation' ); ?></p>
		<p><?php echo $link["details"]; ?></p>
	</div>
</div>
<img src="http://innovationbrain.com/wp-content/themes/innovation/img/au-line.png" class="block content-spacer-line" alt="spacer">

<?php } ?>
