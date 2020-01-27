<?php /* Template Name: Ministérios */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal ministerios cover-mobile">
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
						<h3 class="center f35 turquesa-alameda-text">Conheça os ministérios da nossa Igreja:</h3>
					</div>
					<div class="col hide-on-small-only m4">
						<h3 class="turquesa-alameda-text">Navegue pelos ministérios</h3>
						<ul class="section table-of-contents" id="sticky">
							<?php $ministerios = array('post_type' => 'ministerios_alameda', 'post_status' => 'publish', 'posts_per_page' => -1, 'order' => 'asc', 'orderby' => 'name');
			        			$ministerios = new WP_Query( $ministerios );
				            	if ( $ministerios->have_posts() ) : ?>
				            		<?php while ( $ministerios->have_posts() ) : $ministerios->the_post(); ?>
										<li>
											<a href="#<?php the_ID(); ?>"><?php the_title(); ?></a>
										</li>
									<?php endwhile; ?>
								<?php else : ?>
								<?php endif; ?>
							<?php wp_reset_query(); ?>
						</ul>
					</div>
					<div class="col s12 m8 pb50">
						<?php $ministerios = array('post_type' => 'ministerios_alameda', 'post_status' => 'publish', 'posts_per_page' => -1, 'order' => 'asc', 'orderby' => 'name');
			        	$ministerios = new WP_Query( $ministerios );
			            	if ( $ministerios->have_posts() ) : ?>
			            		<?php while ( $ministerios->have_posts() ) : $ministerios->the_post(); ?>
										<div class="scrollspy pb20 med-img" id="<?php the_ID(); ?>">
											<img src="<?php the_field('logo_do_ministerio'); ?>" class="responsive-img" />
											<h3 class="mg0 turquesa-alameda-text"><?php the_title(); ?></h3>
											<p><strong>Líder:</strong> <?php the_field('lider'); ?></p>
											<p class="mg0"><strong>Descrição:</strong></p>
											<?php the_field('descricao'); ?>
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