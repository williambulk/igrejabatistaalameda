<?php /* Template Name: Informativo */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal informativo cover-mobile">
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
						<h3 class="center f35 turquesa-alameda-text">Confira abaixo o Informativo da Alameda:</h3>
					</div>
					<div class="col s12 hide-on-med-and-up">
						<p class="center">Problemas para visualizar? <a target="blank" href="https://igrejabatistaalameda.com.br/wp-content/themes/alameda/informativo-novembro.pdf">Clique aqui para abrir em outra janela.</a></p>
						<?php echo do_shortcode('[flipbook height="400" pdf="https://igrejabatistaalameda.com.br/wp-content/themes/alameda/informativo-novembro.pdf"]'); ?>
					</div>
					<div class="col m12 hide-on-small-only">
						<p class="center">Problemas para visualizar? <a target="blank" href="https://igrejabatistaalameda.com.br/wp-content/themes/alameda/informativo-final-de-ano.pdf">Clique aqui para abrir em outra janela.</a></p>
						<?php echo do_shortcode('[flipbook height="800" pdf="https://igrejabatistaalameda.com.br/wp-content/themes/alameda/informativo-final-de-ano.pdf"]'); ?>
					</div>
					<div class="col s12 center pb100">
						<p class="f16 turquesa-alameda-text">
							Compartilhe nas Redes Sociais:
						</p>
						</p><?php echo do_shortcode('[addtoany]'); ?>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>