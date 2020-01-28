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
					<div class="col s12 pt50 pb20m">
						<h3 class="center f35 turquesa-alameda-text">Ouça abaixo as mensagens em áudio dos cultos:</h3>
					</div>
					<div class="col s12 m10 push-m1 pb50">
						<p>Você pode ouvir as mensagens diretamente aqui pelo site através do <strong>Player</strong>, ou pode assinar através do <strong>Apple Podcasts</strong>, <strong>Spotify</strong> ou <strong>Deezer</strong> para receber as novas pregações direto no seu celular:</p>
						<div class="mg50">
							<h3 class="center">Ouça pelo Player:</h3>
							<div class="video-container">
								<iframe src="https://anchor.fm/igreja-batista-alameda/embed/episodes/Xeque-mate--Pr--Jefferson-Degi--26012020-eaf9mc/a-a1c8jug" width="100%" frameborder="no"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>