
<footer id="footer">
	<div id="inner-footer">
		<a href="#page-top" class="arrow arrow-up arrow-footer"></a>
		<section>
			<img src="<?php echo get_template_directory_uri(); ?>/img/footer_ButtonUp.png">
			<img src="<?php echo get_template_directory_uri(); ?>/img/footer_TMA2015awardLogo.png">
		</section>
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
	</div> 
</footer>

<div id="curtain"></div>
<article id="newsletter">
	<div id="newsletter-close" class="icon icon-close"></div>
	<h1>Subscribe</h1>
	<p>Please enter the details below to subscribe to our Innovation Brain newsletter</p>
	<form action="/" method="POST">

		<label style="display: none;">
			<input type="checkbox" name="mc4wp-subscribe" value="1" checked/>
		</label>

		<input type="email" name="EMAIL" placeholder="Email" required>

		<input type="text" name="FNAME" placeholder="First Name" required>

		<input type="text" name="LNAME" placeholder="Last Name" required>

		<input type="submit" value="Subscribe">

	</form>
</article>
<?php wp_nav_menu([
		'theme_location'	=>	'lang_menu',
		'container_class'	=>	'lang-menu'
	]); ?>
<?php wp_footer(); ?>
</body>
</html>