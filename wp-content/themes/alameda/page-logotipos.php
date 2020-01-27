<?php /* Template Name: Logotipos */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal logotipos cover-mobile">
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
						<h3 class="center f35 pb50 turquesa-alameda-text">Abaixo você consegue fazer o download dos logotipos oficiais da Alameda:</h3>
						<table id="table" data-toggle="table" data-filter-control="false">
					        <thead>
						        <tr>
						            <th data-field="data">Nome</th>
						            <th data-field="tema">Imagem em Alta Resolução</th>
						            <th data-field="baixar">Arquivo Vetorizado (CorelDraw)</th>
						        </tr>
					        </thead>
					        <tbody>
					        	<?php $logotipos = array('post_type' => 'logos_alameda', 'post_status' => 'publish', 'order' => 'asc', 'orderby' => 'name');
						        $logotipos = new WP_Query( $logotipos );
					            	if ( $logotipos->have_posts() ) : ?>
					            		<?php while ( $logotipos->have_posts() ) : $logotipos->the_post(); ?>
											<tr>
												<td><?php the_title(); ?></td>
												<td>
													<a href="<?php the_field('imagem_alta'); ?>" download="<?php strtolower(the_title()); ?>">
														Clique aqui para baixar
													</a>
												</td>
												<?php if(get_field('arquivo_vetor')): ?>
													<td>
														<a target="blank" href="<?php the_field('arquivo_vetor'); ?>">
															Clique aqui para baixar
														</a>		
													</td>
													<?php else: ?>
														<td>--</td>
												<?php endif; ?>
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