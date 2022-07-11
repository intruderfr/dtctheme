<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *	
 * @package dtctheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dtctheme' ); ?></a>


	<header id="masthead" class="site-header">


		<div class="top-header">
			<div class="container pt-2 pb-4 d-flex justify-content-center">
				<div class="row align-items-center">
					<div class="col site-header_logo">
						<?php the_custom_logo(); ?>
					</div>		
				</div>
			</div>	
		</div>
	

		<nav id="site-navigation" class="main-navigation">
			<div class="container d-flex justify-content-center">
				<div class="row">
					<div class="col-12 d-flex justify-content-center">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<i class="bi bi-list"></i>
						<?php esc_html_e( 'Primary Menu', 'dtctheme' ); ?>
					</button>	
					</div>
				</div>
			</div>	
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-1 search-bar d-flex justify-content-center align-items-center">	
						<button onclick="myFunction()" class="dropbtn"><i class="bi bi-search"></i></button>
						<div id="myDropdown" class="dropdown-content">
							<div id="myInput"><?php aws_get_search_form( true ); ?></div>
						</div>
					</div>
					
					<div class="col-10 menu-inner d-flex justify-content-center align-items-center">
						<?php
							wp_nav_menu(
							array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
								)
							);
						?>
					</div>
					<div class="col-1 cart-bar d-flex justify-content-center align-items-center ">
					<?php echo do_shortcode("[woo_cart_but]"); ?>
					
					</div>
				</div>
			</div>	

			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
