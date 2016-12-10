<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<title><?php the_title(); ?></title>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.plugins.min.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fix.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body id="page-top">

<div id="headerWrapper" <?php if ( is_front_page() ) { echo 'class="index-page slider"';} else { echo 'class="slider"';} ?> >
	<div id="header">
		<a href="/"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logox2.png" alt=""></a>
		<div class="wrapper">
			<button class="hamburger">
				<ul>
					<li></li>
					<li></li>
				</ul>
			</button>
		</div>
		<nav id="menu">

			<?php
				$menu_name = 'main_nav';
				 
				if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
				    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
				 
				    $menu_items = wp_get_nav_menu_items($menu->term_id);

				 
				    $menu_list = '<ul>';
				 
				    foreach ( (array) $menu_items as $key => $menu_item ) {
				        $title = $menu_item->title;
				        $url = $menu_item->url;
				        $menu_list .= '<li><a id="'.$menu_item->classes[0].'" href="' . $url . '">';
				        
				        if (!empty( $menu_item->xfn )) {

				        	$menu_list .= '<span class="icon '.$menu_item->xfn.'"></span>';
				    	}

				        $menu_list .= ''. $title . '</a></li>';
				    }
				    $menu_list .= '</ul>';
				} else {
				    $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
				}
				echo $menu_list;
				?>

		</nav>
	</div>
	<img id="headerSplitter" src="<?php echo get_template_directory_uri(); ?>/img/headerSplitterx2.png" alt="">