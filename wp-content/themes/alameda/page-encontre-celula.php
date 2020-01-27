<?php /* Template Name: Encontre uma Célula */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal encontre-celulas cover-mobile">
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
						<!-- <h3 class="center f35 pb50 turquesa-alameda-text">Veja no mapa abaixo as células:</h3> -->
						<h3 class="center f35 pb50 turquesa-alameda-text">Confira abaixo as células da Igreja Batista Alameda:</h3>
						<table class="hide-on-small-only" id="table" data-toggle="table" data-filter-control="true">
					        <thead>
						        <tr>
						            <th>Nome da Célula</th>
						            <th data-field="categoria" data-filter-control="select">Perfil</th>
						            <th data-field="bairro" data-filter-control="input">Bairro</th>
						            <th data-field="dia" data-filter-control="select">Dia da Semana</th>
						            <th data-field="horario" data-filter-control="select">Horário</th>
						            <th data-field="nome" data-filter-control="input">Nome do Líder</th>
									<th data-field="telefone">Telefone</th>
						        </tr>
					        </thead>
					        <tbody>
					        	<?php $encontrecelula_args = array('post_type' => 'celulas_alameda', 'post_status' => 'publish', 'order' => 'asc', 'posts_per_page' => -1, 'perm' => 'readable');
						        $encontrecelula = new WP_Query( $encontrecelula_args );
					            	if ( $encontrecelula->have_posts() ) : ?>
					            		<?php while ( $encontrecelula->have_posts() ) : $encontrecelula->the_post(); ?>
											<tr>
												<td><?php the_field('nome_da_celula'); ?></td>
												<td><?php the_field('perfil'); ?></td>
												<td><?php the_field('bairro'); ?></td>
												<td><?php the_field('dia_da_semana'); ?></td>
												<td><?php the_field('horario'); ?></td>
												<td><?php $principal = strtolower(get_field('lider')); ?><?php echo ucwords($principal); ?></td>
												<td><?php the_field('contato'); ?></td>			
											</tr>
						           		<?php endwhile; ?>
						           		<?php else : ?>
						           	<?php endif; ?>
						        <?php wp_reset_query();?>
					        </tbody>
					    </table>

						<table class="hide-on-med-and-up" id="table-mobile" data-toggle="table" data-filter-control="true">
					        <thead>
						        <tr>
						            <th data-field="categoriamobile" class="center" data-filter-control="select">Perfil</th>
						            <th data-field="localmobile" class="center" data-filter-control="input">Local</th>
						            <th data-field="horariomobile" class="center" data-filter-control="select">Horário</th>
						            <th data-field="nomemobile" class="center">Líder</th>
						        </tr>
					        </thead>
					        <tbody>
					        	<?php $encontrecelula_mobile = array('post_type' => 'celulas_alameda', 'post_status' => 'publish', 'order' => 'asc', 'orderby' => 'ID', 'posts_per_page' => -1, 'perm' => 'readable');
						        $encontrecelulamobile = new WP_Query( $encontrecelula_mobile );
					            	if ( $encontrecelulamobile->have_posts() ) : ?>
					            		<?php while ( $encontrecelulamobile->have_posts() ) : $encontrecelulamobile->the_post(); ?>
											<tr>
												<td><?php the_field('perfil'); ?></td>
												<td><?php the_field('bairro'); ?></td>
												<td><?php the_field('dia_da_semana'); ?> às <?php the_field('horario'); ?></td>
												<td><?php $principal = strtolower(get_field('lider')); ?><?php echo ucwords($principal); ?> - <?php the_field('contato'); ?></td>		
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