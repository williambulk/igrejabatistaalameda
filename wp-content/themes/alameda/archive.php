<?php
/**
 * Template padrão para exibir as páginas de resultado de busca.
 */

get_header(); ?>

<?php $s=get_search_query(); ?>
<?php global $wp_query; ?>
<?php $allsearch = new WP_Query("s=$s&post_type=mensagens&showposts=-1"); ?>

		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal mensagens cover-mobile">
					<div class="row">
						<div class="col s12 heading">
							<div class="col s12 no-padding mg150 mg120m">
								<h1 class="white-text center f30m">Mensagens em áudio</h1>
							</div>
						</div>
				    </div>
				</div>
			</section>
			<div class="container">
				<div class="row pb100">
					<div class="col s12 pt50">
						<h3 class="center f35 turquesa-alameda-text">Resultados encontrados para <?php print(get_search_query()); ?></h3>
					</div>
					<div class="col s12 pb50 center">
						<?php echo do_shortcode('[searchandfilter submit_label="Buscar" post_types="mensagens" fields="pregadores" headings="Filtrar por Pregadores" hide_empty="1" class="form"]'); ?>
					</div>
					<div class="col s12 m10 push-m1">
						<?php if ($allsearch->have_posts()) : ?>
							<?php while ($allsearch->have_posts()) : $allsearch->the_post(); ?>
								<div class="col m3 s5 p10 p5m push-s1">
									<div class="card hoverable z-depth-2s">
										<div class="card-image med-img">
											<a href="<?php the_permalink(); ?>">
												<img class="responsive-img" src="<?php bloginfo('template_url'); ?>/img/icons/mensagens.jpg" />
											</a>
										</div>
										<div class="card-action p0">
											<?php $datamensagem = get_field('data_da_mensagem', false, false); $datamensagem = new DateTime($datamensagem); ?>
											<a href="<?php the_permalink(); ?>" class="no-transform">
												<h3 class="mg0 f20 f16m mg0m turquesa-alameda-text center">
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
							<div class="col s12 m3">
								<h1 class="turquesa-alameda-text">
									Infelizmente não encontramos o que você estava buscando.
								</h1>
							</div>
						<?php endif; ?>
				    </div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->

<?php wp_reset_query(); ?>
<?php get_footer(); ?>