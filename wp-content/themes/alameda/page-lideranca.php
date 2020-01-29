<?php /* Template Name: Liderança */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal lideranca cover-mobile">
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
				<div class="row pb50">
					<div class="col s12">
						<h3 class="center mg50 mb0 f35 turquesa-alameda-text">Pastoral</h3>
						<?php $lideranca = array(
							'post_type' => 'lideranca_alameda',
							'post_status' => 'publish',
							'order' => 'asc',
							'posts_per_page' => -1,
							'tax_query' => array(
						        array(
						            'taxonomy' => 'categoria_lideranca',
						            'field' => 'slug',
						            'terms' => 'pastoral'
						        )
						    )
						);
			        	$lideranca = new WP_Query( $lideranca );
			            	if ( $lideranca->have_posts() ) : ?>
			            		<?php while ( $lideranca->have_posts() ) : $lideranca->the_post(); ?>
									<div class="col s12 m4 mg50 mg20m">
										<img src="<?php the_field('foto'); ?>" class="responsive-img image-center" style="max-height: 300px;" />
										<h3 class="center mg10 mb0 mb0m">
											<?php the_title(); ?>
										</h3>
										<p class="center mg0 mg0m">
											<?php the_field('função'); ?>
										</p>
									</div>
								<?php endwhile; ?>
				           		<?php else : ?>
				           	<?php endif; ?>
			        	<?php wp_reset_query();?>
					</div>
					<div class="col s12 mg50">
						<h3 class="center mg50 mb0 f35 turquesa-alameda-text">Ministerial</h3>
						<?php $lideranca = array(
							'post_type' => 'lideranca_alameda',
							'post_status' => 'publish',
							'order' => 'asc',
							'posts_per_page' => -1,
							'tax_query' => array(
						        array(
						            'taxonomy' => 'categoria_lideranca',
						            'field' => 'slug',
						            'terms' => 'ministerios'
						        )
						    )
						);
			        	$lideranca = new WP_Query( $lideranca );
			            	if ( $lideranca->have_posts() ) : ?>
			            		<?php while ( $lideranca->have_posts() ) : $lideranca->the_post(); ?>
									<div class="col s12 m4 mg50">
										<img src="<?php the_field('foto'); ?>" class="responsive-img image-center" style="max-height: 300px;" />
										<h3 class="center mg10 mb0">
											<?php the_title(); ?>
										</h3>
										<p class="center mg0">
											<?php the_field('função'); ?>
										</p>
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