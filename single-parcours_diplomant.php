<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Amigraf
 */

 get_header();
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
 								<h2 class="titre_module"><?php the_field('titre_parcours');?></h2>
 						</div>
 						<div class="col-md-12">
 								<hr class="separation">
 						</div>
 						<div class="col-md-12">
 								<p class="text_intro_module"><?php the_field('text_intro_parcours');?></p>
 						</div>
 		</div>

    <div class="row intromodule">
 			<div class="col-md-6 telechargement">

          <?php if( get_field('telechargement') ): ?>

	<a href="<?php the_field('telechargement'); ?>" ><i style="margin-right: 10px;" class="fas fa-download fa-2x"></i>Télécharger la fiche</a>

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
 					<p class="duree_module"><i class="far fa-calendar-alt"></i><?php the_field('duree_parcours');?></p>
 			</div>
 			<div class="col-md-4">
 					<p class="public_module"><i class="far fa-star"></i><?php the_field('public_parcours');?></p>
 			</div>
			<div class="col-md-4">
 					<p class="reconnaissance"><i class="far fa-star"></i><?php the_field('reconnaissance');?></p>
 			</div>
 		</div>
 	</div>

 	<div class="trame-verte2"></div>

	<div class="container-fluid padding-large parcourspart1">
			<div class="row">
					<div class="col-md-5">
							<img src="<?php the_field('img_part1');?>" alt="">
					</div>
					<div class="col-md-7">
							<h3>LE CONTENU DE LA FORMATION</h3>
							<p><?php the_field('contenu_formation');?></p>
              				<h3>LES DÉBOUCHÉS DANS CE MÉTIER</h3>
							<p><?php the_field('debouches');?></p>
					</div>
			</div>
	</div>

	<div class="container-fluid padding-large parcourspart2">
			<div class="row">
					<div class="col-md-6">
						<h3>PUBLIC</h3>
						<p class="objectif_module"><?php the_field('public');?></p>

						<h3>PRÉ-REQUIS</h3>
						<p class="objectif_module"><?php the_field('pre-requis');?></p>

						<h3>MÉTHODE PÉDAGOGIQUE</h3>
						<p class="objectif_module"><?php the_field('methode_pedagogique');?></p>
					</div>
					<div class="col-md-6 fichesmodules">
						<h3 class="text-center">CONTENU DE LA FORMATION</h3>
            <?php

$modules_parcours = get_field('modules_parcours');

if( $modules_parcours ): ?>

	<?php foreach( $modules_parcours as $mp ): // variable must NOT be called $post (IMPORTANT) ?>
	    	<a href="<?php echo get_permalink( $mp->ID ); ?>"><?php echo get_the_title( $mp->ID ); ?></a>
	<?php endforeach; ?>

<?php endif; ?>
					</div>
			</div>
	</div>


<div class="trame-grise"></div>

<div class="container-fluid padding-large">
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
				<h2>ACTUALITÉS</h2>
				<div class="row">
					<?php
					$args = array( 'numberposts' => 3, 'order'=> 'DESC', 'orderby' => 'date', 'category_name' => 'actualite' );
					$postslist = get_posts( $args );
					foreach ($postslist as $post) :  setup_postdata($post); ?>

					<div class="content-actu col-md-4">
						<div class="row">
							<div class="col-md-4">
									<div class="img-actu-page"><?php amigraf_post_thumbnail(); ?></div>
							</div>
							<div class="col-md-8">
								<h4 class="titre-actu-page"><?php the_title(); ?></h4>
								<div class="text-actu"><?php the_excerpt(); ?></div>
								<div class="liresuite"><a href="<?php echo get_permalink(); ?>">Lire la suite</a></div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
					<div style="margin-bottom:40px; " class="actubutton">
							 <a href="amigraf/eventetactu"><p>TOUTE L'ACTUALITÉ APPRENTISSAGE</p></a>
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
