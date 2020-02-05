<?php get_header( ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<section id="cabecalho-paginas">
			<div class="imagem-principal mensagens cover-mobile">
				<div class="row">
					<div class="col s12 heading">
						<div class="col s12 no-padding mg150 mg120m">
							<h1 class="white-text center hide-on-med-and-down"><?php the_title(); ?></h1>
							<h3 class="white-text center hide-on-large-only f30m p5m mg0m">
								<div class="container">
									<?php the_title(); ?>
								</div>
							</h3>
						</div>
					</div>
			    </div>
			</div>
		</section>
		<div class="container">
			<div class="row pb50">
				<div class="col s12 center pt50 pt10m">
					<h3 class="turquesa-alameda-text f30">Ouça abaixo a mensagem:</h3>
				</div>
			    <div class="col s12 m8 push-m2 pb50">
			    	<?php $datamensagem = get_field('data_da_mensagem', false, false); $datamensagem = new DateTime($datamensagem); ?>
			    	<p class="center mg0m">Ouça abaixo a mensagem pregada no dia <?php echo $datamensagem->format('j/m/Y'); ?> por <?php $pregador = get_field('pregador'); echo $pregador->name; ?>.</p>
					<div class="pt10 pt30m">
						<iframe src="<?php the_field('url-spotify'); ?>" width="100%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
					</div>
			    </div>
			</div>
		</div>

	<?php endwhile; // end of the loop. ?>

<?php get_footer( ); ?>