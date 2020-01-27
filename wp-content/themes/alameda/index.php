<?php
/**
 * Template da página inicial.
 */

get_header(); ?>

	<section id="abertura">
		<div class="slider">
			<ul class="slides">
				<?php $slides = array('post_type' => 'slides_home', 'posts_per_page' => 4, 'post_status' => 'publish', 'order' => 'asc');
	        	$slides_home = new WP_Query( $slides );
	            	if ( $slides_home->have_posts() ) {
	            		while ( $slides_home->have_posts() ) : $slides_home->the_post(); ?>
							<li>
								<img src="<?php the_field('imagem'); ?>" /> <!-- random image -->
								<div class="row">
									<div class="col s12 heading">
										<div class="col s12 l6 no-padding mg130">
											<div class="caption right-align heading">
												<h1 class="white-text"><?php the_field('frase_do_slide'); ?></h1>
												<?php if(get_field('link_botao_celula')): ?>
													<a target="blank" href="<?php the_field('link_botao_celula'); ?>" class="mg10 btn z-depth-1 hoverable">Baixar roteiro</a>
												<?php endif; ?>
												<a target="blank" href="<?php the_field('link_do_botao'); ?>" class="mg10 btn z-depth-1 hoverable"><?php the_field('texto_do_botao'); ?></a>
											</div>
										</div>
									</div>
							    </div>
							</li>
	           			<?php endwhile; }
	          		else {
	          			echo "Não há slides.";
	          		}
	          		wp_reset_query();
	          	?>
	        </ul>
		</div>
		<a href="#quemsomos">
			<img class="above-all seta-baixo" src="<?php bloginfo('template_url'); ?>/img/icons/arrow.png" width="32" />
		</a>
	</section>
	<?php $quemsomoshome = array('post_type' => 'quem_somos_home', 'posts_per_page' => 1, 'post_status' => 'publish');
    $quemsomoshome = new WP_Query( $quemsomoshome );
    	if ( $quemsomoshome->have_posts() ) {
    		while ( $quemsomoshome->have_posts() ) : $quemsomoshome->the_post(); ?>
				<section id="quemsomos" class="scrollspy" style="background: url('<?php the_field("imagem"); ?>');background-size: cover;background-repeat: no-repeat;background-attachment: fixed;">
					<div class="container pt160 pt50m">
						<h3 class="center white-text f35 f23m mg0"><?php the_field('titulo'); ?></h3>
						<div class="quem-somos">
							<div class="row">
								<div class="col s12 l12">
									<div class="col s12 l8 push-l2 ps50">
								    	<p class="white-text center font2"><?php the_field('texto'); ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php endwhile; }
		else {
			echo "Não há texto algum.";
		}
		wp_reset_query();
	?>
	<section id="links-rapidos">
		<div class="row mg0 mg0m">
			<div class="col s12 l12">
				<div class="col s12 m6 l3">
					<a href="<?php echo site_url(); ?>/roteiro-de-celula">
						<img class="responsive-img image-center hoverable" src="<?php bloginfo('template_url'); ?>/img/botoes-home/roteiros.jpg" />
					</a>
				</div>
				<div class="col s12 m6 l3">
					<a href="<?php echo site_url(); ?>/encontre-uma-celula">
						<img class="responsive-img image-center hoverable" src="<?php bloginfo('template_url'); ?>/img/botoes-home/celulas.jpg" />
					</a>
				</div>
				<div class="col s12 m6 l3">
					<a href="<?php echo site_url(); ?>/mensagens-em-audio">
						<img class="responsive-img image-center hoverable" src="<?php bloginfo('template_url'); ?>/img/botoes-home/mensagens.jpg" />
					</a>
				</div>
				<div class="col s12 m6 l3">
					<a href="<?php echo site_url(); ?>/ministerios">
						<img class="responsive-img image-center hoverable" src="<?php bloginfo('template_url'); ?>/img/botoes-home/ministerios.jpg" />
					</a>
				</div>
			</div>
		</div>
	</section>
	<section id="agenda">
		<div class="container pt80 pt30m">
			<div class="row">
				<div class="col s12 l12">
					<div class="col s12 l4">
						<h3 class="white-text f35 f23m mg0 center-mobile">Agenda Semanal</h3>
						<ul class="mg20 tabs tabs-fixed-width z-depth-1 abas-agenda" style="width: 400px;margin-left: 0;">
							<li class="tab"><a class="active" href="#domingo">Dom</a></li>
							<li class="tab"><a href="#terca">Ter</a></li>
							<li class="tab"><a href="#sexta">Sex</a></li>
							<li class="tab"><a href="#sabado">Sáb</a></li>
						</ul>
			            <!-- DOMINGO -->
						<div id="domingo" class="col s12">
							<?php $agendadomingo = array('post_type' => 'agenda_domingo', 'post_status' => 'publish', 'order' => 'asc');
					        $agendadomingo = new WP_Query( $agendadomingo );
				            	if ( $agendadomingo->have_posts() ) : ?>
				            		<?php while ( $agendadomingo->have_posts() ) : $agendadomingo->the_post(); ?>
										<h3 class="white-text f25 f20m">
											<?php the_field('horario'); ?> - <?php the_title(); ?><br>
											<span class="f14">
												<?php
												$local = get_field('local');
												if( $local ): ?>
												<p><?php echo implode('<br>', $local); ?></p>
												<?php endif; ?>
											</span>
										</h3>
					           		<?php endwhile; ?>
					           		<?php else : ?>
					           	<?php endif; ?>
					        <?php wp_reset_query();?>
						</div>
			            <!-- TERCA -->
						<div id="terca" class="col s12">
							<?php $agendaterca = array('post_type' => 'agenda_terca', 'post_status' => 'publish', 'order' => 'asc');
					        $agendaterca = new WP_Query( $agendaterca );
				            	if ( $agendaterca->have_posts() ) : ?>
				            		<?php while ( $agendaterca->have_posts() ) : $agendaterca->the_post(); ?>
										<h3 class="white-text f25">
											<?php the_field('horario'); ?> - <?php the_title(); ?><br>
											<span class="f14">
												<?php
												$local = get_field('local');
												if( $local ): ?>
												<p><?php echo implode('<br>', $local); ?></p>
												<?php endif; ?>
											</span>
										</h3>
					           		<?php endwhile; ?>
					           		<?php else : ?>
					           	<?php endif; ?>
					        <?php wp_reset_query();?>
						</div>
			            <!-- QUARTA -->
						<div id="quarta" class="col s12">
							<?php $agendaquarta = array('post_type' => 'agenda_quarta', 'post_status' => 'publish', 'order' => 'asc');
					        $agendaquarta = new WP_Query( $agendaquarta );
				            	if ( $agendaquarta->have_posts() ) : ?>
				            		<?php while ( $agendaquarta->have_posts() ) : $agendaquarta->the_post(); ?>
										<h3 class="white-text f25">
											<?php the_field('horario'); ?> - <?php the_title(); ?><br>
											<span class="f14">
												<?php
												$local = get_field('local');
												if( $local ): ?>
												<p><?php echo implode('<br>', $local); ?></p>
												<?php endif; ?>
											</span>
										</h3>
					           		<?php endwhile; ?>
					           		<?php else : ?>
					           	<?php endif; ?>
					        <?php wp_reset_query();?>
						</div>
			            <!-- SEXTA -->
						<div id="sexta" class="col s12">
							<?php $agendasexta = array('post_type' => 'agenda_sexta', 'post_status' => 'publish', 'order' => 'asc');
					        $agendasexta = new WP_Query( $agendasexta );
				            	if ( $agendasexta->have_posts() ) : ?>
				            		<?php while ( $agendasexta->have_posts() ) : $agendasexta->the_post(); ?>
										<h3 class="white-text f25">
											<?php the_field('horario'); ?> - <?php the_title(); ?><br>
											<span class="f14">
												<?php
												$local = get_field('local');
												if( $local ): ?>
												<p><?php echo implode('<br>', $local); ?></p>
												<?php endif; ?>
											</span>
										</h3>
					           		<?php endwhile; ?>
					           		<?php else : ?>
					           	<?php endif; ?>
					        <?php wp_reset_query();?>
						</div>
			            <!-- SABADO -->
						<div id="sabado" class="col s12">
							<?php $agendasabado = array('post_type' => 'agenda_sabado', 'post_status' => 'publish', 'order' => 'asc');
					        $agendasabado = new WP_Query( $agendasabado );
				            	if ( $agendasabado->have_posts() ) : ?>
				            		<?php while ( $agendasabado->have_posts() ) : $agendasabado->the_post(); ?>
										<h3 class="white-text f25">
											<?php the_field('horario'); ?> - <?php the_title(); ?><br>
											<span class="f14">
												<?php
												$local = get_field('local');
												if( $local ): ?>
												<p><?php echo implode('<br>', $local); ?></p>
												<?php endif; ?>
											</span>
										</h3>
					           		<?php endwhile; ?>
					           		<?php else : ?>
					           	<?php endif; ?>
					        <?php wp_reset_query();?>
						</div>
					</div>
					<div class="col s12 l7 right">
						<h3 class="white-text f35 mg0 f23m center-mobile">Próximos Eventos</h3>
						<div class="col s12 mg20">
							<?php $eventoshome = array('post_type' => 'eventos_alameda', 'post_status' => 'publish', 'order' => 'asc', 'orderby' => 'id', 'posts_per_page' => -1);
				        	$eventoshome = new WP_Query( $eventoshome );
				            	if ( $eventoshome->have_posts() ) : ?>
				            		<?php while ( $eventoshome->have_posts() ) : $eventoshome->the_post(); ?>
				            			<?php if(get_field('mostrar_na_home') == true) : ?>
											<div class="col s12 m4 l4 ps10">
												<div class="card hoverable z-depth-2s">
													<div class="card-image">
														<a href="<?php the_permalink(); ?>">
															<img src="<?php the_field('imagem_miniatura'); ?>" />
														</a>
													</div>
													<div class="card-action">
														<?php if(get_field('multiplos_dias') == 'sim'): ?>
															<a href="<?php the_permalink(); ?>"><?php the_field('periodo_evento'); ?> - <?php the_title(); ?></a>
														<?php else: ?>
															<?php $dataevento = get_field('data_do_evento', false, false); $dataevento = new DateTime($dataevento); ?>
															<a href="<?php the_permalink(); ?>"><?php echo $dataevento->format('j/m/Y'); ?> - <?php the_field('horario_evento'); ?> - <?php the_title(); ?></a>
														<?php endif; ?>
													</div>
												</div>
											</div>
										<?php endif; ?>
					           		<?php endwhile; ?>
					           		<?php else : ?>
					           			<p class="white-text">Não há eventos programados.</p>
					           	<?php endif; ?>
					        <?php wp_reset_query();?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>