<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Amigraf
 */

?>

	</div><!-- #content -->
	</div><!-- #page -->

	<footer id="colophon" class="site-footer container-fluid">
		<div class="container">
				<div class="row bloc-reassurance">
									<div class="col-md-7">
										<p class="reassurance"> <i class="fas fa-graduation-cap"></i>FORMATIONS RECONNUES PAR L'ÉTAT</p>
										<p class="reassurance"> <i class="fas fa-handshake"></i>FORMATIONS 100% PERSONNALISABLES</p>
									</div>
									<div class="col-md-5">
										<p class="reassurance"> <i class="fas fa-thumbs-up"></i>FORMATEURS EXPERTS DANS LEURS DOMAINES</p>
										<p class="reassurance"> <i class="fas fa-award"></i>PLUS DE 30 ANNÉES D'EXPÉRIENCE PRINT</p>
									</div>
				</div>

				<div class="row bloc-contact">
						<div class="col-md-2">
									<p class="titrefooter">Contact</p>
					 			<a href="tel : +33320570982"><p class="tel">03 20 57 09 82</p></a>
									<a href="#popincontact" class="open-popin"><p class="popinfooter">Nous écrire</p></a>
						</div>
						<div class="col-md-4">
								 <p class="titrefooter">Accès</p>
								<a href="https://www.google.com/maps/place/92+Rue+Ab%C3%A9lard,+59000+Lille/@50.6130448,3.06573,17z/data=!3m1!4b1!4m5!3m4!1s0x47c2d5b94a96bc1f:0x870fd135155d4528!8m2!3d50.6130448!4d3.0679187"><p class="rue">92 rue Abélard, 59000 Lille</p></a>
								 <p class="metro">Porte d'arras (à 15 minutes de la gare Lille Flandres)</p>
						</div>
						<div class="col-md-3">
							   <p class="titrefooter">À propos</p>
								<a href="/amigraf/mentions-legales/"><p class="mention">Mentions légales</p></a>
								 <p class="mention">Réalisation Graphique : Yoozly</p>
								 <p class="mention">Développement : Inès Roy, Antoine Pohue, Fabien Coo</p>
						</div>
						<div class="col-md-3 align-droite">
								<a href="https://www.facebook.com/amigraf.lille/" target="_blank"><i class="fab fa-facebook-f"></i></a>
			 					<a href="https://www.instagram.com/amigraf/" target="_blank"><i class="fab fa-instagram"></i></a>
			 					<a href="https://fr.linkedin.com/company/amigraf" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div>
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

	</footer><!-- #colophon -->

	<div class="pictomail">
    <a href="#popincontact" class="open-popin"><div class="unpicto">
      <div class="flexfootercontact">
        <div class="footercontact">
          <i id="ifootercontact" class="far fa-envelope"></i>
          <p>Contact</p>
        </div>
      </div>
    </div></a>
  </div>


<?php wp_footer(); ?>
</div>
</body>
</html>
