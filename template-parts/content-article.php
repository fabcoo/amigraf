<?php
/**
 * Template Name: page article
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Amigraf
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header header">

		<div class="arianearticle">
			<ul>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><li>Accueil<i class="fas fa-chevron-right"></i></li></a>
				<a href="/amigraf/nos-evenements-et-actualites/"><li>Évènements et actualités<i class="fas fa-chevron-right"></i></li></a>
				<li style="text-decoration: underline;">Actualités</li>
			</ul>
		</div>

	<p style="margin-top: 20px;" class="numero_didentification headarticle">Actualités</p>

		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>

		<?php endif; ?>
	</div><!-- .entry-header -->

<hr class="separation">

<div class="container-fluid padding-large">
	<div class="row">
		<div class="col-md-12 excerptarticle">
			<p>
				<?php the_excerpt() ?>
			</p>
		</div>
	</div>
</div>

<div class="container-fluid padding-large imgarticle">
	<div class="row">
		<div class="col-md-12">
				<?php amigraf_post_thumbnail(); ?>
		</div>
	</div>
</div>


	<div class="container-fluid padding-left entry-content actuentry-content">
		<div class="row">
					<div class="col-md-12 content-article">
						<?php
						the_content( sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'amigraf' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );
						?>
					</div>
		</div>
	</div><!-- .entry-content -->

<div class="trame-grise"></div>

<h3 style="text-align:center;">Nos dernières actualités</h3>

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
						 <div class="tag-actu"><?php the_tags( '<i class="fas fa-tag tag"></i>', ', ' ); ?></div>
						 </a>
		    </div>
		<?php endforeach; ?>
   </div>
 </div>

</article><!-- #post- -->
