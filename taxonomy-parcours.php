<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Amigraf
 */

 get_header();

 $valeursdeparcours = get_queried_object();

 ?>

 <div class="container-fluid padding-large ariane">
 	<?php if(function_exists('bcn_display'))
 	{
 			bcn_display();
 	}?>
 </div>


 <div id="primary" class="content-area">
 	<main id="main" class="site-main">

 		<div class="container-fluid">
 			<div class="row">

 						<div class="col-md-12">
 								<h2 class="titre_module"><?php the_field('titre_parcours', $valeursdeparcours);?></h2>
 						</div>
 						<div class="col-md-12">
 								<hr class="separation">
 						</div>
 						<div class="col-md-12">
 								<p class="text_intro_module"><?php the_field('text_intro_parcours', $valeursdeparcours);?></p>
 						</div>
 		</div>

 		<div class="row intromodule">
 			<div class="col-md-6 telechargement">

          <?php if( get_field('telechargement') ): ?>

	<a style="color:black;" href="<?php the_field('telechargement', $valeursdeparcours); ?>" ><i style="margin-right: 10px;" class="fas fa-download fa-2x"></i>Télécharger la fiche</a>

<?php endif; ?>
 			</div>
 			<div class="col-md-6 envoie">
        <a href="#popinmail" class="open-popin"><div class="unpicto">
                <div class="envoiemail">

                    <p><i style="margin-right: 10px;" class="far fa-envelope fa-2x"></i>Envoyer par e-mail</p>
                </div>
              </div></a>
 			</div>
 		</div>
 		<div class="row dureepublic">
 			<div class="col-md-4">
 					<p class="duree_module"><i class="far fa-calendar-alt"></i><?php the_field('duree_parcours', $valeursdeparcours);?></p>
 			</div>
 			<div class="col-md-4">
 					<p class="public_module"><i class="far fa-star"></i><?php the_field('public_parcours', $valeursdeparcours);?></p>
 			</div>
			<div class="col-md-4">
 					<p class="reconnaissance"><i class="far fa-star"></i><?php the_field('reconnaissance', $valeursdeparcours);?></p>
 			</div>
 		</div>
 	</div>

 	<div class="trame-verte2"></div>

	<div class="container-fluid padding-large parcourspart1">
			<div class="row">
					<div class="col-md-5">
							<img src="<?php the_field('img_part1', $valeursdeparcours);?>" alt="">
					</div>
					<div class="col-md-7">
							<h3><?php the_field('titre_part1', $valeursdeparcours);?></h3>
							<p><?php the_field('text_part1', $valeursdeparcours);?></p>
              <h3><?php the_field('titre_part4', $valeursdeparcours);?></h3>
							<p><?php the_field('text_part4', $valeursdeparcours);?></p>
					</div>
			</div>
	</div>

	<div class="container-fluid padding-large parcourspart2">
			<div class="row">
					<div class="col-md-6">
							<h3><?php the_field('titre_part2', $valeursdeparcours);?></h3>
							<p><?php the_field('text_part2', $valeursdeparcours);?></p>
					</div>

					<div class="col-md-6 fichesmodules">


            <?php

    // Définition de la requête
    wp_reset_query();
    $args = array('post_type' => 'formations',
        'tax_query' => array(
            array(
                'taxonomy' => 'parcours',
                'field' => 'slug',
                // 'terms' =>
                'terms' => $valeursdeparcours->slug,
            ),
        ),
     );

// Déclenchement de la boucle
$loop = new WP_Query($args);
if($loop->have_posts()) {

   while($loop->have_posts()) : $loop->the_post();
       echo '<a href="'.get_permalink().'">'.get_the_title().'</a>';
   endwhile;
}
             ?>
					</div>

			</div>
	</div>

	<div class="container-fluid padding-large parcourspart3">
			<div class="row">
					<div class="col-md-6">
							<h3><?php the_field('titre_part3', $valeursdeparcours);?></h3>
							<p><?php the_field('text_part3', $valeursdeparcours);?></p>
					</div>
					<div class="col-md-6 temoin">
						<div class="row">
							<div class="col-md-12">
									<h4 class="temoignage">ILS PARLENT DE NOUS</h4>
							</div>
							<div class="row">
										<div class="col-md-2">
												<img class="img-temoin" src="<?php echo get_template_directory_uri(); ?>/img/chloe.png" alt="">
										</div>
										<div class="col-md-10 testflex">
												<i class="fas fa-angle-double-left fa-3x itemoinhaut"></i><p><?php the_field('premier_temoignage', $valeursdeparcours) ?><i class="fas fa-angle-double-right fa-3x itemoinbas"></i></p>
										</div>
							<div class="row">

										<div class="col-md-2">
												<img class="img-temoin" src="<?php echo get_template_directory_uri(); ?>/img/chloe.png" alt="">
										</div>
										<div class="col-md-10 testflex">
												<i class="fas fa-angle-double-left fa-3x itemoinhaut"></i><p><?php the_field('premier_temoignage', $valeursdeparcours) ?><i class="fas fa-angle-double-right fa-3x itemoinbas"></i></p>
										</div>
							</div>
							</div>
						</div>
					</div>
			</div>
	</div>

<div class="trame-grise"></div>

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
					<div style="margin-bottom:40px; " class="actubutton">
							 <a href="/amigraf/nos-evenements-et-actualites/"><p>TOUTE L'ACTUALITÉ APPRENTISSAGE</p></a>
						</div>
				</div>
			</div>
		</div>
</div>


<div class="smart-popin" id="popinmail">
<div class="sp-table">
  <div class="sp-cell cell2">
    <div class="sp-body">
      <a href="#" class="sp-close"><i class="fas fa-times fa-2x ferm"></i></a>
      <i class="far fa-envelope fa-2x env"></i>
      <h2>ENVOYER LA FICHE FORMATION</h2>
      <div class="hr"></div>
<?php echo do_shortcode( '[contact-form-7 id="486" title="Formulaire de contact envoie fiche"]' ); ?>
    </div>

  </div>
</div>
</div>








 	</main><!-- #main -->
 </div><!-- #primary -->



 <?php
 get_sidebar();
 get_footer();
