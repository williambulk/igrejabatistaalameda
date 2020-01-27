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
					<div class="col s12 pt50 pb50">
						<h3 class="center f35 turquesa-alameda-text">Conheça a liderança da Igreja Batista Alameda:</h3>
					</div>
					<div class="col s12">
						<?php $lideranca = array('post_type' => 'lideranca_alameda', 'post_status' => 'publish', 'order' => 'asc', 'posts_per_page' => -1);
			        	$lideranca = new WP_Query( $lideranca );
			            	if ( $lideranca->have_posts() ) : ?>
			            		<?php while ( $lideranca->have_posts() ) : $lideranca->the_post(); ?>
									<div class="col s12 m3 img-tiny">
										<img src="<?php the_field('foto'); ?>" class="circle responsive-img image-center" />
										<p class="center">
											<?php the_title(); ?><br>
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