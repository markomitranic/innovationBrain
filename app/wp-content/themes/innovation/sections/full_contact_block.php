<address class="contact-us" itemscope itemtype="http://schema.org/Organization">
	<div class="block split-group split-group-large split-group-large-contact">
		<div class="split-left">
				<div class="blue-circle">
					<div class="icon <?php echo $block["contact_icon"]; ?>"></div>
				</div>
			</div>

			<div class="split-right">

				<h4 itemprop="department"><?php echo $block["departmant"]; ?></h4>

					<?php foreach ($block["contact_values"] as $contact) { ?>
					<p><?php echo $contact["contact_value_left"]; ?>
						<span itemprop="email">
							<a href="<?php echo $contact["link_type"]; ?><?php echo $contact["link"]; ?>">
							<?php echo $contact["contact_value_right"]; ?>
							</a>
						</span>
					</p>
					<?php } ?>
			</div>
	</div>
</address>


<?php
// If the spacer option is selected, add a horizontal line on the bottom.
if ($block["spacer"]) {
		echo '<img src="http://innovationbrain.com/wp-content/themes/innovation/img/au-line.png" class="block content-spacer-line" alt="spacer">';
} ?>
