<?php /* Template Name: Mensagens em Áudio */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal mensagens cover-mobile">
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
				<div class="row pb100">
					<div class="col s12 pt50 pt10m">
						<h3 class="center f35 turquesa-alameda-text">Como ouvir as nossas mensagens dos cultos?</h3>
					</div>
					<div class="col s12 m10 push-m1 pb50">
						<p class="mg0m text-center-m">Você pode ouvir as mensagens diretamente aqui pelo site através do <strong>Player</strong>, ou pode assinar através do <strong>Apple Podcasts</strong>, <strong>Spotify</strong> ou <strong>Deezer</strong> para receber as novas pregações direto no seu celular.</p>


						<div class="mg50 pt30m">
							<div class="col s12 pb100">
								<div class="col s12 m4 ps20">
									<a href="https://podcasts.apple.com/br/podcast/igreja-batista-alameda/id1496177019?l=pt" target="blank">
										<img class="responsive-img hoverable image-center pb30m" src="<?php bloginfo('template_url'); ?>/img/podcast/apple-podcast-logo.png" />
									</a>
								</div>
								<div class="col s12 m4 ps20">
									<a href="https://www.deezer.com/show/818962" target="blank">
										<img class="responsive-img hoverable image-center pb30m" src="<?php bloginfo('template_url'); ?>/img/podcast/deezer-podcast-logo.png" />
									</a>
								</div>
								<div class="col s12 m4 ps20">
									<a href="https://open.spotify.com/show/1htOLHBwKs3YaUgQhO7PqJ" target="blank">
										<img class="responsive-img hoverable image-center pb30m" src="<?php bloginfo('template_url'); ?>/img/podcast/spotify-podcast-logo.png" />
									</a>
								</div>
							</div>
						</div>

						<div class="mg50">
							<h3 class="center">Escolha um Episódio:</h3>

							<div class="col s12">
								<div class="col s12">	
									<table class="hide-on-small-only" id="table" data-toggle="table" data-filter-control="true">
								        <thead>
									        <tr>
									        	<th>Data da Pregação:</th>
									            <th data-field="culto" data-filter-control="input">Tema:</th>
									            <th data-field="episodio" data-filter-control="select">Episódio:</th>
									            <th data-field="pregador" data-filter-control="select">Pregador:</th>
									            <th data-field="link">Link:</th>
									        </tr>
								        </thead>
								        <tbody>
								        	<?php $podcast = array('post_type' => 'mensagens', 'post_status' => 'publish', 'order' => 'desc', 'posts_per_page' => 20);
									        $mensagenspregacao = new WP_Query( $podcast );
								            	if ( $mensagenspregacao->have_posts() ) : ?>
								            		<?php while ( $mensagenspregacao->have_posts() ) : $mensagenspregacao->the_post(); ?>
														<tr>
															<?php $datamensagem = get_field('data_da_mensagem', false, false); $datamensagem = new DateTime($datamensagem); ?>
															<td><?php echo $datamensagem->format('d/m/y'); ?></td>
															<td><?php the_title(); ?></td>
															<td><?php echo get_field('qual_o_culto'); ?></td>
															<td><?php $pregador = get_field('pregador'); echo $pregador->name; ?></td>			
															<td><a href="<?php echo the_permalink(); ?>">Clique aqui para ouvir</a></td>
														</tr>
									           		<?php endwhile; ?>
									           		<?php else : ?>
									           	<?php endif; ?>
									        <?php wp_reset_query();?>
								        </tbody>
								    </table>
								</div>
								<div class="col s12">	
									<table class="hide-on-med-and-up" id="table" data-toggle="table" data-filter-control="true">
								        <thead>
									        <tr>
									            <th data-field="culto" data-filter-control="input">Últimas mensagens:</th>
									        </tr>
								        </thead>
								        <tbody>
								        	<?php $podcast = array('post_type' => 'mensagens', 'post_status' => 'publish', 'order' => 'desc', 'posts_per_page' => 12);
									        $mensagenspregacao = new WP_Query( $podcast );
								            	if ( $mensagenspregacao->have_posts() ) : ?>
								            		<?php while ( $mensagenspregacao->have_posts() ) : $mensagenspregacao->the_post(); ?>
														<tr>
															<?php $datamensagem = get_field('data_da_mensagem', false, false); $datamensagem = new DateTime($datamensagem); ?>
															<td>
																<a href="<?php echo the_permalink(); ?>">
																	<?php echo $datamensagem->format('d/m/y'); ?> - "<?php the_title(); ?>", por <?php $pregador = get_field('pregador'); echo $pregador->name; ?>
																</a>
															</td>
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
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>