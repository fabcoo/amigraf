<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Amigraf
 */

?>

<div class="container-fluid padding-large ariane">
	<?php if(function_exists('bcn_display'))
	{
			bcn_display();
	}?>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="container-fluid">
				<div class="row padding-profil">
							<div class="col-md-6">
										<h2 class="titre-partie-une"><?php the_field('titre_partie_une') ?></h2>
										<h1 class="titre-partie-deux"><?php the_field('titre_partie_deux') ?></h1>
										<div class="responsive">
										<div class="row">
															<div class="col-md-5">
																			<div class="smart-popin" id="popin1">
																											<div class="sp-table">
																													<div class="sp-cell">
																															<div class="sp-body">
																																<a href="#" class="sp-back"><i class="fas fa-times fa-2x"></i></a>
																															<img class="svgpopin" src="<?php the_field('svg_popin_une'); ?>" alt="">
																															<h2><?php the_field('titre_popin_une_bis') ?></h2>
																															<div class="hr"></div>
																															<p><?php the_field('text_popin_une') ?></p>
																															<img class="imgpopin" src="<?php the_field('img_popin_une'); ?>" alt="">

																															</div>

																													</div>
																											</div>
																			</div>
																			<div class="pictopart1">
																											<a href="#popin1" class="open-popin"><div class="unpicto">
																											<img class="svg" src="<?php the_field('svg_popin_une'); ?>" alt="">
																											<p class="textpicto2"><?php the_field('titre_popin_une') ?>
																											</div></a>
																			</div>
															</div>
															<div class="col-md-1 pictoi">
																	<i class="fas fa-chevron-right"></i>
															</div>
															<div class="col-md-5">
																<div class="smart-popin" id="popin2">
																								<div class="sp-table">
																										<div class="sp-cell">
																												<div class="sp-body">
																													<a href="#" class="sp-back"><i class="fas fa-times fa-2x"></i></a>
																												<img class="svgpopin" src="<?php the_field('svg_popin_deux'); ?>" alt="">
																												<h2><?php the_field('titre_popin_deux_bis') ?></h2>
																												<div class="hr"></div>
																												<p><?php the_field('text_popin_deux') ?></p>
																												<img class="imgpopin" src="<?php the_field('img_popin_deux'); ?>" alt="">

																												</div>
																										<a href="#" class="sp-back"></a>
																										</div>
																								</div>
																</div>
																<div class="pictopart1">
																								<a href="#popin2" class="open-popin"><div class="unpicto">
																								<img class="svg" src="<?php the_field('svg_popin_deux'); ?>" alt="">
																								<p class="textpicto2"><?php the_field('titre_popin_deux') ?></p>

																								</div></a>
																</div>
															</div>
															<div class="col-md-1 pictoi">
																	<i class="fas fa-chevron-right"></i>
															</div>
										</div>
										<div class="row col2">
											<div class="col-md-5">
															<div class="smart-popin" id="popin3">
																							<div class="sp-table">
																									<div class="sp-cell">
																											<div class="sp-body">
																												<a href="#" class="sp-back"><i class="fas fa-times fa-2x"></i></a>
																											<img class="svgpopin" src="<?php the_field('svg_popin_trois'); ?>" alt="">
																											<h2><?php the_field('titre_popin_trois_bis') ?></h2>
																											<div class="hr"></div>
																											<p><?php the_field('text_popin_trois') ?></p>
																											<img class="imgpopin" src="<?php the_field('img_popin_trois'); ?>" alt="">

																											</div>
																									<a href="#" class="sp-back"></a>
																									</div>
																							</div>
															</div>
															<div class="pictopart1">
																							<a href="#popin3" class="open-popin"><div class="unpicto">
																							<img class="svg" src="<?php the_field('svg_popin_trois'); ?>" alt="">
																							<p class="textpicto2"><?php the_field('titre_popin_trois') ?>
																							</div></a>
															</div>
											</div>
											<div class="col-md-1 pictoi">
													<i class="fas fa-chevron-right"></i>
											</div>
											<div class="col-md-5">
												<div class="smart-popin" id="popin4">
																				<div class="sp-table">
																						<div class="sp-cell">
																								<div class="sp-body">
																									<a href="#" class="sp-back"><i class="fas fa-times fa-2x"></i></a>
																								<img class="svgpopin" src="<?php the_field('svg_popin_quatre'); ?>" alt="">
																								<h2><?php the_field('titre_popin_quatre_bis') ?></h2>
																								<div class="hr"></div>
																								<p><?php the_field('text_popin_quatre') ?></p>
																								<img class="imgpopin" src="<?php the_field('img_popin_quatre'); ?>" alt="">

																								</div>
																						<a href="#" class="sp-back"></a>
																						</div>
																				</div>
												</div>
												<div class="pictopart1">
																				<a href="#popin4" class="open-popin"><div class="unpicto">
																				<img class="svg" src="<?php the_field('svg_popin_quatre'); ?>" alt="">
																				<p class="textpicto2"><?php the_field('titre_popin_quatre') ?><p>
																				</div></a>
												</div>
											</div>
											<div class="col-md-1 pictoi">
													<i class="fas fa-chevron-right"></i>
											</div>
										</div>
										</div>
							</div>
							<div class="col-md-6">
								<video autoplay muted loop class="Videoentreprise">
										<source src="<?php the_field('video_particulier') ?>" type="video/mp4"> <!-- 340x300px -->
								</video>
							</div>
				</div>
	</div>

	<div class="trame-verte"></div>
	<div class="fond-vert"></div>

	<div class="container-fluid">
			<div class="row menurech">
					<div class="col-md-12">
<a href="amigraf/recherche"> <p id="rechclic">Cliquez ici afin d'accéder au <br> menu de recherche</p> </a>
					</div>
			</div>
	</div>
	<div class="container-fluid">
		<div class="row particulierlienforma">
			<div class="row">

						<?php if(get_field('lien_formation')): ?>
							<?php while(has_sub_field('lien_formation')): ?>
								<div class="col-md-6">
									<a href="amigraf/recherche/">
										<div class="particulierlienforma-formation">
											<img src="<?php the_sub_field('image_lien_formation'); ?>" alt="" />
										<h2 class="titre-lien"><?php the_sub_field('titre_lien_formation'); ?></h2>
										<p class="boutton-decouvrir"><?php the_sub_field('bouton_decouvrir'); ?></p>
									</div></a>
								</div>
							<?php endwhile ?>
						<?php endif; ?>
					</div>
		</div>
	</div>

<div style="margin-top: -40px;" class="trame-grise"></div>

<div class="container">
		<div class="row">
		<div class="col-md-4">
			<?php
			$args = array( 'numberposts' => 1, 'order'=> 'DESC', 'orderby' => 'date', 'category_name' => 'Evenement' );
			$postslist = get_posts( $args );
			foreach ($postslist as $post) :  setup_postdata($post); ?>
							<div class="date-event"><?php the_time ('j M.'); ?> </div>
							<div class="img-event"><?php amigraf_post_thumbnail(); ?></div>
							 <div class="tag-event"><?php the_tags( '<i class="fas fa-tag tag"></i>', ', ' ); ?></div>
							<h4 class="titre-event"><?php the_title(); ?></h4>
							<?php the_field('lieu') ?>
							<div class="text-event"><?php the_excerpt(); ?></div>
							<div class="liresuite"><a href="<?php echo get_permalink(); ?>">Lire la suite</a></div>
			<?php endforeach; ?>
		</div>
		<div class="col-md-8 espacement">
				<div class="row">
					<h2>ACTUALITÉ</h2>
					<?php
					$args = array( 'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'date', 'category_name' => 'actualite' );
					$postslist = get_posts( $args );
					foreach ($postslist as $post) :  setup_postdata($post); ?>

					<div class="row content-actu">
							<div class="col-md-4">
									<div class="img-actu-page"><?php amigraf_post_thumbnail(); ?></div>
							</div>
							<div class="col-md-8">
								<h4 class="titre-actu-page"><?php the_title(); ?></h4>
								<div class="text-actu"><?php the_excerpt(); ?></div>
								<div class="liresuite"><a href="<?php echo get_permalink(); ?>">Lire la suite</a></div>
							</div>
					</div>
					<?php endforeach; ?>
					<div style="margin-bottom:80px;" class="actubutton">
							 <a href="/amigraf/nos-evenements-et-actualites/"><p>TOUTE L'ACTUALITÉ ENTREPRISE</p></a>
						</div>
				</div>
			</div>
		</div>
</div>
