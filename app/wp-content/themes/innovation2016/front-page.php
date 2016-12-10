<?php 
/*
Template Name: Home Template
*/

?> 









<?php get_header(); ?>

	<div class="title-wrap">		
		<h1>Welcome to Innovation Brain</h1>
		<p>Value Creation through Turnaround, Innovation and Growth</p>
	</div>

	<div id="hero-mobile">
		<nav class="mobile-hero-carousel">
			<a href="#"><div class="icon icon-left"></div></a>
			<a href="#"><div class="icon icon-right"></div></a>
			<div class="hero-carousel-wrapper">
				<div class="hero-carousel-inner">
					<section>
						<div class="icon icon-progress"></div>
						<?php
						$menu_name = 'left_triangle';
						 
						if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
						    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
						 
						    $menu_items = wp_get_nav_menu_items($menu->term_id);

						    echo '<a href="http://innovationbrain.com/?page_id=60"><h3>'.$menu->name.'</h3></a>';
						 
						    $menu_list = '<ul>';
						 
						    foreach ( (array) $menu_items as $key => $menu_item ) {
						        $title = $menu_item->title;
						        $url = $menu_item->url;
						        $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
						    }
						    $menu_list .= '</ul>';
						} else {
						    $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
						}
						echo $menu_list;
						?>
					</section>
					<section style="display:none;">
						<div class="icon icon-pie"></div>
						<?php
						$menu_name = 'right_triangle';
						 
						if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
						    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
						 
						    $menu_items = wp_get_nav_menu_items($menu->term_id);

						    echo '<a href="http://innovationbrain.com/?page_id=60"><h3>'.$menu->name.'</h3></a>';
						 
						    $menu_list = '<ul>';
						 
						    foreach ( (array) $menu_items as $key => $menu_item ) {
						        $title = $menu_item->title;
						        $url = $menu_item->url;
						        $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
						    }
						    $menu_list .= '</ul>';
						} else {
						    $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
						}
						echo $menu_list;
						?>
					</section>
					<section style="display:none;">
						<div class="icon icon-bullseye"></div>
						<?php
						$menu_name = 'bottom_triangle';
						 
						if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
						    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
						 
						    $menu_items = wp_get_nav_menu_items($menu->term_id);

						    echo '<a href="http://innovationbrain.com/?page_id=60"><h3>'.$menu->name.'</h3></a>';
						 
						    $menu_list = '<ul>';
						 
						    foreach ( (array) $menu_items as $key => $menu_item ) {
						        $title = $menu_item->title;
						        $url = $menu_item->url;
						        $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
						    }
						    $menu_list .= '</ul>';
						} else {
						    $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
						}
						echo $menu_list;
						?>
					</section>
				</div>
			</div>
			<a href="#" class="read-more">Read more</a>
		</nav>
	</div>

	<a href="#hero" class="arrow arrow-down"></a>
	<div id="hero">
		<nav class="hero-triangle">
			<section class="left-triangle-menu">
				<?php
				$menu_name = 'left_triangle';
				 
				if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
				    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
				 
				    $menu_items = wp_get_nav_menu_items($menu->term_id);

				    echo '<a href="http://innovationbrain.com/?page_id=60"><h3>'.$menu->name.'</h3></a>';
				 
				    $menu_list = '<ul>';
				 
				    foreach ( (array) $menu_items as $key => $menu_item ) {
				        $title = $menu_item->title;
				        $url = $menu_item->url;
				        $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
				    }
				    $menu_list .= '</ul>';
				} else {
				    $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
				}
				echo $menu_list;
				?>
			</section>
			<section class="right-triangle-menu">
				<?php
				$menu_name = 'right_triangle';
				 
				if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
				    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
				 
				    $menu_items = wp_get_nav_menu_items($menu->term_id);

				    echo '<a href="http://innovationbrain.com/?page_id=60"><h3>'.$menu->name.'</h3></a>';
				 
				    $menu_list = '<ul>';
				 
				    foreach ( (array) $menu_items as $key => $menu_item ) {
				        $title = $menu_item->title;
				        $url = $menu_item->url;
				        $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
				    }
				    $menu_list .= '</ul>';
				} else {
				    $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
				}
				echo $menu_list;
				?>
			</section>
			<section class="bottom-triangle-menu">
				<?php
				$menu_name = 'bottom_triangle';
				 
				if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
				    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
				 
				    $menu_items = wp_get_nav_menu_items($menu->term_id);

				    echo '<a href="http://innovationbrain.com/?page_id=60"><h3>'.$menu->name.'</h3></a>';
				 
				    $menu_list = '<ul>';
				 
				    foreach ( (array) $menu_items as $key => $menu_item ) {
				        $title = $menu_item->title;
				        $url = $menu_item->url;
				        $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
				    }
				    $menu_list .= '</ul>';
				} else {
				    $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
				}
				echo $menu_list;
				?>
			</section>
		</nav>
		<div class="canvas"></div>
	</div>


	<a href="#" class="read-more">Read more</a>
</div>




<!-- <main id="contentWrapper">
	<section id="latest">
		<a href="#latest" class="arrow arrow-down"></a>
		<h3>Latest Top News</h3>
		<p>News provided by Reuters</p>
		<div class="clearfix"></div>
		<article>
			<a href="#">
				<p>Merkel - need joint refugee policy for EU Schengen system to work</p>
				<button>Read more</button>
			</a>
		</article>
		<article>
			<a href="#">
				<p>Paris police shoot dead knife-wielding man on Charlie Hebdo anniversary</p>
				<button>Read more</button>
			</a>
		</article>
		<article>
			<a href="#">
				<p>South Korea seeks U.S. strategic weapons after North's nuclear test</p>
				<button>Read more</button>
			</a>
			</a>
		</article>
		<article>
			<a href="#">
				<p>South Korea seeks U.S. strategic weapons after North's nuclear test</p>
				<button>Read more</button>
			</a>
		</article>
		<article>
			<a href="#">
				<p>Paris police shoot dead knife-wielding man on Charlie Hebdo anniversary</p>
				<button>Read more</button>
			</a>
		</article>
	</section>
</main> -->

<?php get_footer(); ?>