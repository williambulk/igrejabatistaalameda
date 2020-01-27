<?php /* Template Name: Pedido de Oração */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal pedido-oracao cover-mobile">
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
						<h3 class="center f35 pb50 turquesa-alameda-text">Você pode fazer o seu pedido de oração pelo formulário abaixo:</h3>
					</div>
					<div class="col s12 m8 push-m2 pb50">
						<?php echo do_shortcode('[contact-form-7 id="269" title="Pedidos de Oração"]'); ?>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>