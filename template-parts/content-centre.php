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

	<div class="container-fluid padding-large">
		<div class="row">
					<div class="col-md-5">
							<h1 class="titre-centre"><?php the_field('titre_centre') ?></h1>
							<hr class="separationcentre">
							<p class="intro-centre"><?php the_field('intro_centre') ?></p>
							<p class="transition-centre"><?php the_field('transition_centre') ?></p>
					</div>
					<div class="col-md-7">
							<img class="centre-intro-img" src="<?php echo get_template_directory_uri(); ?>/img/centreintro2.png" alt="">
					</div>
		</div>
		<div class="row">
					<div class="col-md-6 imgcentre">
						<img class="centrepart2gaucheimg1" src="<?php echo get_template_directory_uri(); ?>/img/photo1.jpg" alt="">
						<img class="centrepart2gaucheimg2" src="<?php echo get_template_directory_uri(); ?>/img/photo2.jpg" alt="">
					</div>
					<div class="col-md-6 part2">
							<h4 class="titre-part2-centre"><?php the_field('titre_part2_centre') ?></h4>
							<p class="text-part2-centre"><?php the_field('text_part2_centre') ?></p>
					</div>
		</div>
		<div class="row">
				<div class="col-md-5">
						<h4 class="titre-part3-centre"><?php the_field('titre_part3_centre') ?></h4>
						<p class="text-part3-centre"><?php the_field('text_part3_centre') ?></p>
				</div>
				<div class="col-md-7 conseils">
						<div class="row conseilpart1">
								<div class="col-md-4">
											<img src="<?php the_field('img_entreprise') ?>" alt="">
											<div class="opacite">
												<p><?php the_field('titre_entreprise') ?></p>
											</div>
								</div>
								<div class="col-md-4">
											<img src="<?php the_field('img_collectivite') ?>" alt="">
											<div class="opacite">
												<p><?php the_field('titre_collectivite') ?></p>
											</div>
								</div>
								<div class="col-md-4">
											<img src="<?php the_field('img_futur_apprentis') ?>" alt="">
											<div class="opacite">
												<p><?php the_field('titre_futur_apprentis') ?></p>
											</div>
								</div>
						</div>
						<div class="row conseilpart2">
								<div class="col-md-4">
											<img src="<?php the_field('img_salarie') ?>" alt="">
											<div class="opacite">
												<p><?php the_field('titre_salarie') ?></p>
											</div>
								</div>
								<div class="col-md-4">
											<img src="<?php the_field('img_demandeur') ?>" alt="">
											<div class="opacite">
												<p><?php the_field('titre_demandeur') ?></p>
											</div>
								</div>
								<div class="col-md-4">
											<img src="<?php the_field('img_responsable') ?>" alt="">
											<div class="opacite">
												<p><?php the_field('titre_responsable') ?></p>
											</div>
								</div>
						</div>
				</div>
		</div>
	</div>

	<div class="parallax">
			<h1>ÉQUIPEMENT ET MATÉRIELS ADAPTÉS SONT <br> INDISPENSABLES À LA RÉUSSITE</h1>
	</div>

	<div class="container-fluid padding-large">
		<div class="row">
				<div class="col-md-5">
						<h4 class="titre-part4-centre"><?php the_field('titre_part4_centre') ?></h4>
						<p class="text-part4-centre"><?php the_field('text_part4_centre') ?></p>
				</div>
				<div class="col-md-7 tabs">
					<div class="tab">
								<button class="tablinks" onclick="openCity(event, 'salle web')" id="defaultOpen"><?php the_field('titre_web') ?></button>
								<button class="tablinks" onclick="openCity(event, 'salles pao')"><?php the_field('titre_pao') ?></button>
								<button class="tablinks" onclick="openCity(event, 'impression')"><?php the_field('titre_impression') ?></button>
								<button class="tablinks" onclick="openCity(event, 'impression numérique')"><?php the_field('titre_impression_numerique') ?></button>
								<button class="tablinks" onclick="openCity(event, 'façonnage')"><?php the_field('titre_faconnage') ?></button>
					</div>

								<div id="salle web" class="tabcontent">
								<div class="image-web"><img src="<?php the_field('image_web') ?>" alt=""></div>
								<h3><?php the_field('titre_web') ?></h3>
								<p><?php the_field('text_web') ?></p>
								</div>

								<div id="salles pao" class="tabcontent">
								<div class="image-web"><img src="<?php the_field('image_pao') ?>" alt=""></div>
								<h3><?php the_field('titre_pao') ?></h3>
								<p><?php the_field('text_pao') ?></p>
								</div>

								<div id="impression" class="tabcontent">
								<div class="image-web"><img src="<?php the_field('image_impression') ?>" alt=""></div>
								<h3><?php the_field('titre_impression') ?></h3>
								<p><?php the_field('text_impression') ?></p>
								</div>

								<div id="impression numérique" class="tabcontent">
								<div class="image-web"><img src="<?php the_field('image_impression_numerique') ?>" alt=""></div>
								<h3><?php the_field('titre_impression_numerique') ?></h3>
								<p><?php the_field('text_impression_numerique') ?></p>
								</div>

								<div id="façonnage" class="tabcontent">
								<div class="image-web"><img src="<?php the_field('image_faconnage') ?>" alt=""></div>
								<h3><?php the_field('titre_faconnage') ?></h3>
								<p><?php the_field('text_faconnage') ?></p>
								</div>
				</div>
		</div>
	</div>
	<div style="background-color: rgb(240, 240, 240);" class="container-fuid sans-padding">
			<div class="row taille-perso">
				<div class="col-md-12">
						<h4 class="temoignage">ILS PARLENT DE NOUS</h4>
				</div>
				<div class="row temoignages">
							<div class="col-md-1">
									<img class="img-temoin" src="<?php echo get_template_directory_uri(); ?>/img/CVvideo.png" alt="">
							</div>
							<div class="col-md-4 testflex">
									<i class="fas fa-angle-double-left fa-3x itemoinhaut"></i><p><?php the_field('premier_temoignage') ?><i class="fas fa-angle-double-right fa-3x itemoinbas"></i></p>
							</div>
							<div class="col-md-2"></div>
							<div class="col-md-1">
									<img class="img-temoin" src="<?php echo get_template_directory_uri(); ?>/img/wapiti.png" alt="">
							</div>
							<div class="col-md-4 testflex">
									<i class="fas fa-angle-double-left fa-3x itemoinhaut"></i><p><?php the_field('deux_temoignage') ?><i class="fas fa-angle-double-right fa-3x itemoinbas"></i></p>
							</div>
				</div>
			</div>
	</div>
	<div class="container-fuid taille-perso2">
 		<div class="row">
 				<div class="col-md-12 flex">
							<?php if(get_field('lien_fin')): ?>
								<?php while(has_sub_field('lien_fin')): ?>
									<a href="<?php the_sub_field('lien_vers'); ?>">
										<div class="fin">
											<img src="<?php the_sub_field('image_lien'); ?>" alt="" />
										<h2 class="titre-lien"><?php the_sub_field('titre_lien'); ?></h2>
										<p class="boutton-decouvrir"><?php the_sub_field('boutton_decouvrir'); ?></p>
									</div></a>
								<?php endwhile ?>
							<?php endif; ?>
 				</div>
 		</div>
	</div>


	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'amigraf' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
