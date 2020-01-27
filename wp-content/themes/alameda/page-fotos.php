<?php /* Template Name: Fotos */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal fotos cover-mobile">
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
						<h3 class="center f35 turquesa-alameda-text">Confira os álbuns da Alameda:</h3>
					</div>
						<div class="col s12 pb100">
						<?php $albuns = array('post_type' => 'albuns_alameda', 'post_status' => 'publish', 'order' => 'desc');
			        	$albuns = new WP_Query( $albuns );
			            	if ( $albuns->have_posts() ) : ?>
			            		<?php while ( $albuns->have_posts() ) : $albuns->the_post(); ?>
										<div class="col s12 m4 ps20">
											<a href="https://www.flickr.com/photos/igrejabatistaalameda/sets/<?php the_field('id_flickr'); ?>" target="blank">
												<img class="responsive-img hoverable" src="<?php the_field('capa_do_album'); ?>">
												<h3 class="center turquesa-alameda-text mg0 pt10 pb10 pb20">
													<?php the_title(); ?>
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