<?php
/**
 * Template padrão para exibir as páginas de resultado de busca.
 */

get_header(); ?>

<?php
	$s=get_search_query();
	$args = array('s' =>$s);
	$resultadobusca = new WP_Query( $args );
?>

<!-- INÍCIO DO WHILE -->
<?php while ( have_posts() ) : the_post(); ?>
	<section id="cabecalho-paginas">
		<div class="imagem-principal mensagens">
			<div class="row">
				<div class="col s12 heading">
					<div class="col s12 no-padding mg150">
						<h1 class="white-text center"><?php the_title(); ?></h1>
					</div>
				</div>
		    </div>
		</div>
	</section>
	<div class="container">
		<div class="row pb100">
			<div class="col s12 pt50">
				<h3 class="center f35 turquesa-alameda-text">Confira abaixo todas as mensagens em áudio:</h3>
			</div>
			<div class="col s12 pb50 center">
				<?php echo do_shortcode('[searchandfilter submit_label="Buscar" post_types="mensagens" fields="pregadores" headings="Filtrar por Pregadores" hide_empty="1" class="form"]'); ?>
			</div>
			<div class="col s12 m10 push-m1">
				<?php if ( $resultadobusca->have_posts() ) : ?>
			        <?php while ( $resultadobusca->have_posts() ) : $resultadobusca->the_post(); ?>
						<div class="col s12 m3">
							<div class="card hoverable z-depth-2s">
								<div class="card-image med-img">
									<a href="<?php the_permalink(); ?>">
										<img class="responsive-img" src="<?php bloginfo('template_url'); ?>/img/icons/mensagens.jpg" />
									</a>
								</div>
								<div class="card-action p0">
									<?php $datamensagem = get_field('data_da_mensagem', false, false); $datamensagem = new DateTime($datamensagem); ?>
									<a href="<?php the_permalink(); ?>" class="no-transform">
										<h3 class="mg0 turquesa-alameda-text center">
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
<?php endwhile; ?>

<?php get_footer(); ?>