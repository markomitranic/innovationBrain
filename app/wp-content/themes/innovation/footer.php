
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
	<h1><?php _e( 'footer.php | Subscribe', 'innovation' ); ?></h1>
	<p><?php _e( 'footer.php | Please enter the details below to subscribe to our Innovation Brain newsletter', 'innovation' ); ?></p>
	<form action="/" method="POST">

		<label style="display: none;">
			<input type="checkbox" name="mc4wp-subscribe" value="1" checked/>
		</label>

		<input type="email" name="EMAIL" placeholder="<?php _e( 'footer.php | Email', 'innovation' ); ?>" required>

		<input type="text" name="FNAME" placeholder="<?php _e( 'footer.php | First Name', 'innovation' ); ?>" required>

		<input type="text" name="LNAME" placeholder="<?php _e( 'footer.php | Last Name', 'innovation' ); ?>" required>

		<input type="submit" value="<?php _e( 'footer.php | Subscribe', 'innovation' ); ?>">

	</form>
</article>
<?php wp_nav_menu([
		'theme_location'	=>	'lang_menu',
		'container_class'	=>	'lang-menu'
	]); ?>
<?php wp_footer(); ?>
</body>
</html>