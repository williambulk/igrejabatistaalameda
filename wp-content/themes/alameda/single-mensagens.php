<?php get_header( ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section id="cabecalho-paginas">
			<div class="imagem-principal mensagens cover-mobile">
				<div class="row">
					<div class="col s12 heading">
						<div class="col s12 no-padding mg150 mg120m">
							<?php $datamensagem = get_field('data_da_mensagem', false, false); $datamensagem = new DateTime($datamensagem); ?>
							<h1 class="white-text center hide-on-med-and-down"><?php the_title(); ?><br>
								<span class="f23">Mensagem pregada no dia <?php echo $datamensagem->format('j/m/Y'); ?>, por <?php $pregador = get_field('pregador'); echo $pregador->name; ?></span>
							</h1>
							<h3 class="white-text center hide-on-large-only f30m p5m mg0m"><?php the_title(); ?> - <?php echo $datamensagem->format('j/m/Y'); ?></h3>
						</div>
					</div>
			    </div>
			</div>
		</section>
		<div class="container">
			<div class="row pb50">
				<div class="col s12 center pt50">
					<h3 class="turquesa-alameda-text f30">Ouça abaixo a mensagem:</h3>
				</div>
				<div class="col s12 m8 push-m2 pt50 pb50">
					<iframe width="100%" height="120" src="https://www.mixcloud.com/widget/iframe/?hide_cover=1&light=1&feed=%2F<?php echo str_replace("https://www.mixcloud.com/", "", get_field('link_do_mixcloud')); ?>" frameborder="0" >
					</iframe>
			    </div>
			</div>
		</div>

	<?php endwhile; // end of the loop. ?>

<?php get_footer( );
