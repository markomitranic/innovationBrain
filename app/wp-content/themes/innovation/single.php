<?php get_header(); the_post();  ?>

	<div class="title-wrap">		
		<h1><?php echo get_the_title(); ?></h1>
	</div>
</div>

<main id="content-wrapper">


<?php the_content() ?>



</main>

<?php get_footer(); ?>