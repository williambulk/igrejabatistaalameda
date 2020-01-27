<?php /* Template Name: Encontre uma Célula */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal encontre-celulas cover-mobile">
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
					<div class="col s12 pt50 pb50">
						<!-- <h3 class="center f35 pb50 turquesa-alameda-text">Veja no mapa abaixo as células:</h3> -->
						<h3 class="center f35 pb50 turquesa-alameda-text">Confira abaixo as células da Igreja Batista Alameda:</h3>
						<?php echo do_shortcode('[lista_celulas]'); ?>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>