<?php 
/*
Template Name: Fluid Template
*/

?> 

<?php get_header(); the_post();  ?>

	<div class="title-wrap">		
		<h1><?php the_title(); ?></h1>
	</div>
</div>

<main id="content-wrapper">



<?php
// LOOP function. She accepts parameter for Layout (FlexField Slug). Loops through all the items and imports the relevant layout slice.
function layoutLoop($layoutSlug) {
	if( have_rows($layoutSlug) ):
		foreach (get_field($layoutSlug) as $block) {
		    $block_name = $block["acf_fc_layout"];


		    if ($block_name == 'wysiwyg_editor_block') {
		    	include 'sections/wysiwyg_editor_block.php';

		    } elseif ($block_name == '3circles_block') {
		    	include 'sections/3circles_block.php';

		    } elseif ($block_name == 'read_more_block') {
		    	include 'sections/read_more_block.php';

		    } elseif ($block_name == 'bio_block') {
		    	include 'sections/bio_block.php';

		    } elseif ($block_name == 'contact_block') {
		    	include 'sections/contact_block.php';

		    } elseif ($block_name == '3circles_block_text') {
		    	include 'sections/3circles_block_text.php';

		    } elseif ($block_name == 'external_block') {
		    	include 'sections/external_block.php';

		    } elseif ($block_name == 'cases_block') {
		    	include 'sections/cases_block.php';

		    } elseif ($block_name == 'items_list_block') {
		    	include 'sections/items_list_block.php';

		    } elseif ($block_name == 'full_contact_block') {
		    	include 'sections/full_contact_block.php';

		    }
		}
	endif;
}
?>


<?php 

if (get_field('add_second_tab') == false && get_field('add_third_tab') == false) : ?>

	<article id="content">
		<?php layoutLoop("left_tab"); ?>
	</article>

<?php else : ?>

	<nav id="tabs-menu">
		<ul>
			<li class="current"><a href="#tab1"><?php the_field('left_tab_name'); ?></a></li>
			<?php if (get_field('add_second_tab') == true) : ?>
			<li><a href="#tab2"><?php the_field('right_tab_name'); ?></a></li>
			<?php endif; ?>
			<?php if (get_field('add_third_tab') == true) : ?>
			<li><a href="#tab3"><?php the_field('third_tab_name'); ?></a></li>
			<?php endif; ?>
		</ul>
	</nav>

	<article id="content" class="tabs-content">

		<section id="tab1" class="tab-content">
			<?php layoutLoop("left_tab"); ?>
		</section>

		<?php if (get_field('add_second_tab') == true) : ?>
		<section id="tab2" class="tab-content">
			<?php layoutLoop("right_tab"); ?>
		</section>
		<?php endif; ?>

		<?php if (get_field('add_third_tab') == true) : ?>
		<section id="tab3" class="tab-content">
			<?php layoutLoop("third_tab"); ?>
		</section>
		<?php endif; ?>


	</article>

<?php endif; ?>






</main>

<?php get_footer(); ?>