<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Amigraf
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="body">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'amigraf' ); ?></a>

	<header id="masthead" class="site-header container-fluid padding-large">
					<div class="row menuu">
						<div class="col-sm-1">
												<i class="fas fa-bars fa-3x icon-menu" onclick="ouvreMenu()" onclick="myFunction()"></i>
												<div id="mySidenav" class="sidenav">
						              <i class="fas fa-times fa-3x close-menu" onclick="fermeMenu()"></i>
															<?php
															wp_nav_menu( array(
																'theme_location' => 'menu-1',
																'menu_id'        => 'primary-menu',
															) );
															?>
															<div class="pictomail pictomailmenu">
														    <a href="#popincontact" class="open-popin"><div class="unpicto">
														     	<li class="lastchild" onclick="fermeMenu()">Nous contacter</li>
														    </div></a>
														  </div>
												</div>




												<div class="smart-popin" id="popincontact">
																				<div class="sp-table">
																						<div class="sp-cell">
																								<div class="sp-body">
																									<h3 class="titrecontact">CONTACTEZ-NOUS</h3>
																									<hr>
																									<p class="introcontact">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus bibendum dignissim diam vel euismod. Vestibulum congue enim.</p>
																									<a href="#" class="sp-back"><i class="fas fa-times fa-2x"></i></a>
																								<?php echo do_shortcode( '[contact-form-7 id="329" title="Formulaire de contact global"]' ); ?>
																								</div>
																						</div>
																				</div>
												</div>


							</nav><!-- #site-navigation -->
						</div>
								<div class="col-sm-10">
												<div class="site-branding">
													<?php
													the_custom_logo();
													if ( is_front_page() && is_home() ) :
														?>
														<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
														<?php
													else :
														?>
														<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>

														<!-- Désactivation
														<?php
													endif;
													$amigraf_description = get_bloginfo( 'description', 'display' );
													if ( $amigraf_description || is_customize_preview() ) :
														?>
														<p class="site-description"><?php echo $amigraf_description; /* WPCS: xss ok. */ ?></p>
										-->
													<?php endif; ?>
												</div><!-- .site-branding -->
										</div>
										</div>

										<div class="col-sm-1">
									<a href="amigraf/recherche/"><i style:"color: red" class="fas fa-search fa-3x icon-menurech" ></i></a>
										</div>

					</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
