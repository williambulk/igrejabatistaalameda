<?php /* Template Name: Apostilas */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal roteiro-celulas cover-mobile">
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
						<h3 class="center f35 pb50 turquesa-alameda-text">Faça o download das Apostilas do CTA:</h3>
						<!-- DESKTOP -->
						<table class="hide-on-small-only" id="table" data-toggle="table" data-filter-control="true">
					        <thead>
						        <tr>
						            <th data-field="data" data-filter-control="input">Nº Aula</th>
						            <th data-field="tema" data-filter-control="input">Tema da Aula</th>
						            <th data-field="baixar">Arquivo</th>
						        </tr>
					        </thead>
					        <tbody>
					        	<?php $apostilas = array('post_type' => 'apostilas_cta', 'order' => 'asc', 'post_status' => 'publish', 'orderby' => 'name', 'posts_per_page' => -1);
						        $apostilas = new WP_Query( $apostilas );
					            	if ( $apostilas->have_posts() ) : ?>
					            		<?php while ( $apostilas->have_posts() ) : $apostilas->the_post(); ?>
											<tr>
												<td><?php the_title(); ?></td>
												<td><?php the_field('tema'); ?></td>
												<td><a target="blank" href="<?php the_field('apostila'); ?>">Clique aqui para baixar</a></td>
											</tr>
						           		<?php endwhile; ?>
						           		<?php else : ?>
						           	<?php endif; ?>
						        <?php wp_reset_query();?>
					        </tbody>
					    </table>
					    <!-- MOBILE -->
						<table class="hide-on-med-and-up">
					        <thead>
						        <tr>
						            <th class="center">N° Aula</th>
						            <th class="center">Tema da Aula</th>
						        </tr>
					        </thead>
					        <tbody>
					        	<?php $apostilasmobile = array('post_type' => 'apostilas_cta', 'order' => 'asc', 'post_status' => 'publish', 'orderby' => 'name', 'posts_per_page' => -1);
						        $apostilasmobile = new WP_Query( $apostilasmobile );
					            	if ( $apostilasmobile->have_posts() ) : ?>
					            		<?php while ( $apostilasmobile->have_posts() ) : $apostilasmobile->the_post(); ?>
											<tr>
												<td><?php the_title(); ?></td>
												<td><a target="blank" href="<?php the_field('apostila'); ?>"><?php the_field('tema'); ?></a></td>
											</tr>
						           		<?php endwhile; ?>
						           		<?php else : ?>
						           	<?php endif; ?>
						        <?php wp_reset_query();?>
					        </tbody>
					    </table>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>