<?php /* Template Name: Roteiro */
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
						<h3 class="center f35 pb50 turquesa-alameda-text">Faça o download do Roteiro de Célula:</h3>
						<!-- DESKTOP -->
						<table class="hide-on-small-only" id="table" data-toggle="table" data-filter-control="true">
					        <thead>
						        <tr>
						            <th data-field="data" data-filter-control="input">Data</th>
						            <th data-field="tema" data-filter-control="input">Tema da Mensagem</th>
						            <th data-field="baixar">Roteiro de Célula</th>
									<th data-field="santa">Roteiro de Santa Felicidade</th>
						            <th data-field="kids">Roteiro Kids</th>
						        </tr>
					        </thead>
					        <tbody>
					        	<?php $roteirocelulas_args = array('post_type' => 'roteiro_celula', 'post_status' => 'publish', 'orderby' => 'ID', 'posts_per_page' => -1, 'perm' => 'readable');
						        $roteirocelulas = new WP_Query( $roteirocelulas_args );
					            	if ( $roteirocelulas->have_posts() ) : ?>
					            		<?php while ( $roteirocelulas->have_posts() ) : $roteirocelulas->the_post(); ?>
											<tr>
												<?php $dataroteiro = get_field('data_da_mensagem', false, false); $dataroteiro = new DateTime($dataroteiro); ?>
												<td><?php echo $dataroteiro->format('j/m/Y'); ?></td>
												<td><?php the_field('tema_da_mensagem'); ?></td>
												<td><a target="blank" href="<?php the_field('arquivo_do_roteiro'); ?>">Clique aqui para baixar</a></td>
												<?php if(get_field('roteiro_santa')) : ?>
													<td><a target="blank" href="<?php the_field('roteiro_santa'); ?>">Tema: <?php the_field('tema_santa'); ?></a></td>
													<?php else : ?>
													<td>--</td>
												<?php endif; ?>
												<?php if(get_field('roteiro_kids')) : ?>
													<td><a target="blank" href="<?php the_field('roteiro_kids'); ?>">Clique aqui para baixar</a></td>
													<?php else : ?>
													<td>--</td>
												<?php endif; ?>
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
						            <th class="center">Data</th>
						            <th class="center">Tema do Roteiro</th>
									<th class="center">Santa Felicidade</th>
						            <th class="center">Kids</th>
						        </tr>
					        </thead>
					        <tbody>
					        	<?php $roteirocelulasmobile = array('post_type' => 'roteiro_celula', 'post_status' => 'publish', 'orderby' => 'ID', 'posts_per_page' => -1);
						        $roteirocelulasmobile = new WP_Query( $roteirocelulasmobile );
					            	if ( $roteirocelulasmobile->have_posts() ) : ?>
					            		<?php while ( $roteirocelulasmobile->have_posts() ) : $roteirocelulasmobile->the_post(); ?>
											<tr>
												<?php $dataroteiro = get_field('data_da_mensagem', false, false); $dataroteiro = new DateTime($dataroteiro); ?>
												<td><?php echo $dataroteiro->format('j/m/Y'); ?></td>
												<td><a target="blank" href="<?php the_field('arquivo_do_roteiro'); ?>"><?php the_field('tema_da_mensagem'); ?> (clique para baixar)</a></td>
												<?php if(get_field('roteiro_santa')) : ?>
													<td><a target="blank" href="<?php the_field('roteiro_santa'); ?>">Baixar</a></td>
													<?php else : ?>
													<td>--</td>
												<?php endif; ?>
												<?php if(get_field('roteiro_kids')) : ?>
													<td><a target="blank" href="<?php the_field('roteiro_kids'); ?>">Baixar</a></td>
													<?php else : ?>
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