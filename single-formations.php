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
									<p class="numero_didentification"><?php the_field('numero_didentification');?></p>
							</div>
							<div class="col-md-12">
									<h2 class="titre_module"><?php the_field('titre_module');?></h2>
							</div>
							<div class="col-md-12">
									<hr class="separation">
							</div>
							<div class="col-md-12">
									<p class="text_intro_module"><?php the_field('text_intro_module');?></p>
							</div>
			</div>

			<div class="row intromodule">
	 			<div class="col-md-6 telechargement">

	          <?php if( get_field('telechargement') ): ?>

		<a style="color:black;" href="<?php the_field('telechargement'); ?>" ><i style="margin-right: 10px;" class="fas fa-download fa-2x"></i>Télécharger la fiche</a>

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
				<div class="col-md-6">
						<p class="duree_module"><i class="far fa-calendar-alt"></i><?php the_field('duree_module');?></p>
				</div>
				<div class="col-md-6">
						<p class="public_module"><i class="far fa-star"></i><?php the_field('public_module');?></p>
				</div>
			</div>
		</div>

		<div class="trame-verte2">

		</div>


			<div class="container-fuid padding-large">


			<div class="row">
					<div class="col-md-6 obj">
						<h3>LES OBJECTIFS DU MODULE</h3>
							<p class="objectif_module"><?php the_field('objectif_module');?></p>
					</div>
					<div class="col-md-6 prog">
						<h3>PROGRAMME</h3>
							<p class="programme_module"><?php the_field('programme_module');?></p>
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
