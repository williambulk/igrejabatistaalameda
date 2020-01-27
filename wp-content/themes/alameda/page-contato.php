<?php /* Template Name: Contato */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal contato cover-mobile">
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
					<div class="col s12 pt50 hide-on-small-only">
						<h3 class="center f35 pb50 turquesa-alameda-text">Fale conosco através dos canais abaixo:</h3>
					</div>
					<div class="col s12">
						<div class="col s12 m6 center">
							<h3 class="center f23 pb50 turquesa-alameda-text">Informações:</h3>
							<?php $contato = array('post_type' => 'pagina_contato', 'post_status' => 'publish', 'order' => 'asc');
						    $contato = new WP_Query( $contato );
						    	if ( $contato->have_posts() ) : ?>
						        	<?php while ( $contato->have_posts() ) : $contato->the_post(); ?>
						        		<h3 class="turquesa-alameda-text"><strong><?php the_title(); ?></strong></h3>
						        		<p class="turquesa-alameda-text">Telefone:<br>
						        			<?php the_field('telefones'); ?>
						        		</p>
						        		<p class="turquesa-alameda-text">E-mail:<br>
						        			<?php the_field('emails'); ?>
						        		</p>
						        	<?php endwhile; ?>
						        	<?php else: ?>
						        <?php endif; ?>
						    <?php wp_reset_query(); ?>
						</div>
						<div class="col s12 m6">
							<div class="col s12">
								<h3 class="center f23 turquesa-alameda-text">Formulário de Contato:</h3>
							</div>
							<div class="col s12 pb50">
								<?php echo do_shortcode('[contact-form-7 id="273" title="Contato"]'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>