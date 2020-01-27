<?php /* Template Name: Mensagens em Áudio */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal mensagens cover-mobile">
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
				<div class="row pb100">
					<div class="col s12 pt50 pb20m">
						<h3 class="center f35 turquesa-alameda-text">Confira abaixo todas as mensagens em áudio:</h3>
					</div>
					<!-- <div class="col m12 pb50 center hide-on-small-only -->
					<div class="hide">
						<?php echo do_shortcode('[searchandfilter submit_label="Buscar" post_types="mensagens" fields="pregadores" headings="Filtrar por Pregadores" hide_empty="1" class="form"]'); ?>
					</div>
					<div class="col s12 m10 push-m1">
					<?php $mensagens = array('post_type' => 'mensagens', 'post_status' => 'publish', 'posts_per_page' => 8, 'order' => 'desc');
			        	$mensagens = new WP_Query( $mensagens );
			            	if ( $mensagens->have_posts() ) : ?>
			            		<?php while ( $mensagens->have_posts() ) : $mensagens->the_post(); ?>
			            			<div class="col m3 s5 p10 p5m push-s1">
										<div class="card hoverable z-depth-2s" style="height: 400px">
											<div class="card-image med-img">
												<a href="<?php the_permalink(); ?>">
													<img class="responsive-img" src="<?php bloginfo('template_url'); ?>/img/icons/mensagens.jpg" />
												</a>
											</div>
											<div class="card-action p0 p0m">
												<?php $datamensagem = get_field('data_da_mensagem', false, false); $datamensagem = new DateTime($datamensagem); ?>
												<a href="<?php the_permalink(); ?>" class="no-transform">
													<h3 class="mg0 f16 f16m mg0m turquesa-alameda-text center">
						            					<?php the_field('qual_o_culto'); ?><br>
						            					<?php the_title(); ?><br>
						            					<hr>
						            					<?php $pregador = get_field('pregador'); echo $pregador->name; ?><br>
						            					<?php echo $datamensagem->format('j/m/Y'); ?>
						            				</h3>
												</a>
											</div>
										</div>
									</div>
				           		<?php endwhile; ?>
				           		<?php else : ?>
				           	<?php endif; ?>
				        <?php wp_reset_query(); ?>
				    </div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>