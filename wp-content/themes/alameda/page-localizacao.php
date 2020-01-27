<?php /* Template Name: Localização */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- INÍCIO DO WHILE -->
	<?php while ( have_posts() ) : the_post(); ?>
		<section id="cabecalho-paginas">
			<div class="imagem-principal localizacao cover-mobile">
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
					<h3 class="center f35 turquesa-alameda-text">Veja no mapa abaixo a localização da Alameda:</h3>
				</div>
				<?php $localizacao = array('post_type' => 'localizacao_alameda', 'post_status' => 'publish', 'order' => 'asc');
				$localizacao = new WP_Query( $localizacao );
			        if ( $localizacao->have_posts() ) : ?>
			        	<?php while ( $localizacao->have_posts() ) : $localizacao->the_post(); ?>
			        		<div class="col s12 m6 pb50">
			        			<h3 class="turquesa-alameda-text mg0 p0"><?php the_title(); ?></h3>
			        			<p><?php the_field('endereco'); ?></p>
			        			<div class="mg20 pr20">
			        				<?php the_field('link_do_google_maps'); ?>
			        			</div>
			        		</div>
			          	<?php endwhile; ?>
			        	<?php else : ?>
			        <?php endif; ?>
			    <?php wp_reset_query(); ?>
			</div>
		</div>
	<?php endwhile;?>
	<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>