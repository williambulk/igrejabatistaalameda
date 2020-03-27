<?php get_header( ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section id="cabecalho-paginas">
			<div class="imagem-principal eventos cover-mobile">
				<div class="row">
					<div class="col s12 heading">
						<div class="col s12 no-padding mg150 mg120m">
							<h1 class="white-text center f30m mg20m"><?php the_title(); ?></h1>
						</div>
					</div>
			    </div>
			</div>
		</section>
		<div class="container">
			<div class="row">
				<div class="col s12 m10 push-m1 pt80 pb50">
					<div class="col hide-on-med-and-down l6">
						<img src="<?php the_field('imagem_de_capa'); ?>" class="responsive-img">
					</div>
					<div class="col s12 l5 push-l1 center-mobile turquesa-alameda-text">
						<h1 class="turquesa-alameda-text f30 f30m hide-on-small-only"><?php the_title(); ?></h1>
						<?php if(get_field('multiplos_dias') == 'sim'): ?>
							<h3 class="turquesa-alameda-text">Motivo:
								<?php the_field('periodo_evento'); ?>
							</h3>
						<?php else: ?>
							<h3 class="turquesa-alameda-text">Data: 
								<?php $dataevento = get_field('data_do_evento', false, false); $dataevento = new DateTime($dataevento); ?><?php echo $dataevento->format('j/m/Y'); ?>
							</h3>
							<h3 class="turquesa-alameda-text">Horário: <?php the_field('horario_evento'); ?></h3>
						<?php endif; ?>
						<!-- <a class="btn turquesa-alameda" target="blank" href="<?php the_field('link_do_google_calendar'); ?>">
						Adicionar no Calendário
						</a> -->
					</div>
			    </div>
			    <div class="col s12 m10 push-m1 justify">
			        <h3 class="turquesa-alameda-text">Descrição:</h3>
					<?php the_field('descricao_do_evento'); ?>
			    </div>
				<div class="col s12 center pb100">
						<p class="f16 turquesa-alameda-text">
							Compartilhe nas Redes Sociais:
						</p>
						</p><?php echo do_shortcode('[addtoany]'); ?>
				</div>
			</div>
		</div>

	<?php endwhile; // end of the loop. ?>

<?php get_footer( );