<?php /* Template Name: Avisos */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal avisos cover-mobile">
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
					<div class="col s12 pt50">
						<h3 class="center f35 turquesa-alameda-text">Confira abaixo os vídeos do Alameda Informa:</h3>
					</div>
					<div class="col s12">
						<?php echo do_shortcode('[youtube_channel playlist=PLBJmExziGVmfFDeC4CjMFM47cqR9q8Xe- resource=2 cache=300 fetch=9 num=9 ratio=3 responsive=0 width=400 display=thumbnail thumb_quality=sddefault autoplay=1 nobrand=1 showtitle=above titletag=h3 desclen=0 noanno=1 noinfo=1 link_to=none goto_txt="Visit our YouTube channel"]'); ?>
					</div>
					<div class="col s12 center pb50">
						<h3 class="turquesa-alameda-text">Inscreva-se no Canal Oficial da Alameda e não perca nenhum vídeo:</h3>
						<a target="blank" href="https://www.youtube.com/channel/UCqQbphmeCEyKkEf66xnCTPw?sub_confirmation=1">
							<img class="image-center" src="<?php bloginfo('template_url'); ?>/img/icons/inscreva-se.png" width="200" />
						</a>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>