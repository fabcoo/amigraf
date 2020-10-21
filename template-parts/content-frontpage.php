<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Amigraf
 */

?>




<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container-fuid padding-large">
		<div class="row">
			<div class="col-md-8">
				<h1 class="titre-accueil"><?php the_field('titre') ?></h1>
				<span class="text-intro"><?php the_field('text_intro') ?></span>

				<?php if(get_field('profils_accueil')): ?>
				<?php while(has_sub_field('profils_accueil')): ?>
				<a href="<?php the_sub_field('lien_profil'); ?>">
					<div class="entreprise">
						<h2><?php the_sub_field('titre_profil'); ?></h2>
						<p class="textchoix"><i class="fas fa-chevron-right"></i><?php the_sub_field('text_profil'); ?>
						</p>
					</div>
				</a>
				<?php endwhile ?>
				<?php endif; ?>

				<p class="domaine"><a href="amigraf/recherche">Découvrez nos formations</a></p>
			</div>

			<div class="col-md-4">
				<img class="fondVideo" src="<?php echo get_template_directory_uri(); ?>/img/calque2.png" alt="">
				<video autoplay muted loop class="Video">
					<source src="<?php the_field('video_accueil') ?>" type="video/mp4"> <!-- 340x300px -->
				</video>
			</div>
		</div>
	</div>

	<div class="trame-grise"></div>
	<h2>Nos dernières actualités</h2>
	<div class="container-fuid padding-large">
		<div class="slideshow-container">
			<?php
				$args = array( 'numberposts' => 2, 'order'=> 'DESC', 'orderby' => 'date', 'category_name' => 'evenement' );
				$postslist = get_posts( $args );
				foreach ($postslist as $post) :  setup_postdata($post); ?>

			<div class="mySlides fade">
				<div class="row">
					<div class="col-md-6">
						<div class="date-event"><?php the_time ('j M.'); ?> </div>
						<?php amigraf_post_thumbnail(); ?>
					</div>

					<div class="col-md-6">
						<div class="tag-actu"><?php the_tags( '<i class="fas fa-tag tag"></i>', ', ' ); ?></div>
						<h3 class="titre-event"><?php the_title(); ?></h3>
						<?php the_field('lieu')?>
						<div class="text-actu"><?php the_excerpt(); ?></div>
						<div class="liresuite"><a href="<?php echo get_permalink(); ?>">Lire la suite</a></div>
						<div class="fleche">
							<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
							<a class="next" onclick="plusSlides(1)">&#10095;</a>
						</div>


					</div>
				</div>

			</div>
			<?php endforeach; ?>

		</div>
		<a href="<?php echo esc_url(get_permalink()); ?>"></a>
	</div>

	<!-- boucle 4 actus -->
	<div class="container-fluid padding-large">
		<div class="row">
			<?php
		$args = array( 'numberposts' => 4, 'order'=> 'DESC', 'orderby' => 'date', 'category_name' => 'actualite' );
		$postslist = get_posts( $args );
		foreach ($postslist as $post) :  setup_postdata($post); ?>
			<div class="col-md-3 actus">
				<a href="<?php echo esc_url(get_permalink()); ?>">
					<h3 class="titre-actu"><?php the_title(); ?></h3>
					<div class="hover-actu"><?php amigraf_post_thumbnail(); ?></div>
				</a>
				<div class="tag-actu"><?php the_tags( '<i class="fas fa-tag tag"></i>', ', ' ); ?></div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>

	<div class="popup">
		<div class="classic">
			<i class="far fa-bell"></i>
			<p class="textpopup">Actus</p>
		</div>
		<div class="hovercontent">
			<?php
			 $args = array( 'numberposts' => 1, 'order'=> 'DESC', 'orderby' => 'date', 'category_name' => 'evenement' );
			 $postslist = get_posts( $args );
			 foreach ($postslist as $post) :  setup_postdata($post); ?>


			<p class=""><?php the_title(); ?> le <div class="date-eventpop"><?php the_time ('j M.'); ?> </div>
			</p>

			<?php endforeach; ?>
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