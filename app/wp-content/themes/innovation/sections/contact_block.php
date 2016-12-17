<address class="block contact-group" itemscope itemtype="http://schema.org/Person">
	<header>
		<h3><span class="icon <?php echo $block["contact_icon"]; ?>"></span><?php echo $block["contact_title"]; ?></h3>
	</header>

	<?php foreach ($block["contact_values"] as $contact) { ?>

	<p><?php echo $contact["contact_value_left"]; ?> 
		<span itemprop="telephone">
			<a href="<?php echo $contact["link_type"]; ?><?php echo $contact["link"]; ?>">
			<?php echo $contact["contact_value_right"]; ?>
			</a>
		</span>
	</p>
		
	<?php } ?>

</address>