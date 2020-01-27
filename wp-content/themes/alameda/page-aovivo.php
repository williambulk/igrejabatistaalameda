<?php /* Template Name: Cultos Ao Vivo */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal aovivo cover-mobile">
					<div class="row">
						<div class="col s12 heading">
							<div class="col s12 no-padding mg150 mg120m">
								<h1 class="white-text center f30m"><?php the_title(); ?></h1>
							</div>
						</div>
				    </div>
				</div>
			</section>
			<div class="container">
				<div class="row">
					<div class="col s12 pt50">
						<h3 class="center f35 turquesa-alameda-text">Confira abaixo as gravações dos nossos cultos:</h3>
					</div>
					<div class="col s12">
						<?php echo do_shortcode('[youtube_channel]'); ?>
					</div>
					<div class="col s12 center pb50 pt30m pb30m">
						<h3 class="turquesa-alameda-text">Veja todos os vídeos no Canal Oficial da Alameda:</h3>
						<a target="blank" href="https://bit.ly/AlamedaYoutube">
							<img class="image-center" src="<?php bloginfo('template_url'); ?>/img/icons/inscreva-se.png" width="200" />
						</a>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>