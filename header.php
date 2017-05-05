<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edith-starter-theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
	    <nav role="navigation" id="navbar-main">
	      <div class="navbar navbar-static-top">
	        <div class="container">
	        <div class="row flex">
	        	<div class="col-xs-10 col-sm-6"><?php edith_theme_the_custom_logo(); ?></div>
	        	<div class="col-xs-2 col-sm-6">
	          		<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
			            <a href="#" class="toggle-menu"><span></span></a>
			            <?php
							$args = array(
							'theme_location' => 'menu-1',
							'depth' => 2,
							'container' => false,
							'menu_class' => 'nav navbar-nav navbar-left hidden-xs',
							'walker' => new Bootstrap_Walker_Nav_Menu()
							);

							if (has_nav_menu('menu-1')) {
							wp_nav_menu($args);
							}
			            ?>
			     </div>
	        </div>
	        </div>
	      </div>           
	    </nav>
	    <div class="mobile-nav">
	    	<?php
				$args = array(
				'theme_location' => 'menu-1',
				'depth' => 2,
				'container' => false,
				'menu_class' => '',
				'walker' => new Bootstrap_Walker_Nav_Menu()
				);

				if (has_nav_menu('menu-1')) {
				wp_nav_menu($args);
				}
		?>
	    </div>
	  </header><!-- #masthead -->

	 <div class="container">
	<div id="content" class="site-content">
