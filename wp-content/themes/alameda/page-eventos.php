<?php /* Template Name: Eventos */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal eventos cover-mobile">
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
						<h3 class="center f35 turquesa-alameda-text pb20m">Confira os próximos eventos da Alameda:</h3>
					</div>
						<div class="col s12 pb100">
							<?php $eventos = array('post_type' => 'eventos_alameda', 'post_status' => 'publish', 'order' => 'asc', 'posts_per_page' => 9);
				        	$eventos = new WP_Query( $eventos );
				            	if ( $eventos->have_posts() ) : ?>
				            		<?php while ( $eventos->have_posts() ) : $eventos->the_post(); ?>
										<div class="col s12 m4 ps20">
											<a href="<?php the_permalink(); ?>">
												<img class="responsive-img hoverable" src="<?php the_field('imagem_miniatura'); ?>">
												<h3 class="center turquesa-alameda-text mg0 pt10 pb10 pb20 mg0m pt5m pb20m f18m">
													<?php the_title(); ?><br>
													<?php $dataevento = get_field('data_do_evento', false, false); $dataevento = new DateTime($dataevento); ?><?php echo $dataevento->format('j/m/Y'); ?> - <?php the_field('horario_evento'); ?>
												</h3>
											</a>
										</div>
			           			<?php endwhile; ?>
			           			<?php else : ?>
			           		<?php endif; ?>
			        	<?php wp_reset_query();?>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>