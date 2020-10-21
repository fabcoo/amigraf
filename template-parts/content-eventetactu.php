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

<div class="container-fluid">
	<div class="row">
				<div class="col-md-12">
						<p class="numero_didentification"><?php the_field('categorie');?></p>
				</div>
				<div class="col-md-12">
						<h2 class="titre_module"><?php the_field('titre_eventetactu');?></h2>
				</div>
				<div class="col-md-12">
						<hr class="separation">
				</div>
	</div>
</div>

<div style="margin-top: 50px;" class="container-fluid padding-large">
		<div class="slideshow-container">
			<?php
			$args = array( 'numberposts' => 2, 'order'=> 'DESC', 'orderby' => 'date', 'category_name' => 'evenement' );
			$postslist = get_posts( $args );
			foreach ($postslist as $post) :  setup_postdata($post); ?>

				<div class="mySlides fade">
					<div class="row">
							<div class="col-md-6">
								<a href="<?php echo esc_url(get_permalink()); ?>">
								<div class="date-event"><?php the_field('date')?></div>
								<?php amigraf_post_thumbnail(); ?>
							</a>
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
	<div style="margin-top: 40px;" class="container-fluid padding-large">
	<div class="row">
		<?php
		$args = array( 'numberposts' => 8, 'order'=> 'DESC', 'orderby' => 'date', 'category_name' => 'actualite' );
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
