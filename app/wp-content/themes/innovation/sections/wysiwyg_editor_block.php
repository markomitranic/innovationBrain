<?php
	// The WYSIWYG block only echoes content. No further elements are needed since WP does the rest of formatting.
	echo $block["wysiwyg_editor"];
	// If the spacer option is selected, add a horizontal line on the bottom.
	if ($block["spacer"]) {
			echo '<img src="http://innovationbrain.com/wp-content/themes/innovation/img/au-line.png" class="block content-spacer-line" alt="spacer">';
	}
?>