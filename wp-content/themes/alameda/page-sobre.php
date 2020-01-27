<?php /* Template Name: Sobre */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal sobre cover-mobile">
					<div class="row">
						<div class="col s12 heading">
							<div class="col s12 no-padding mg150 mg120m">
								<h1 class="white-text center pt100 f30m"><?php the_title(); ?></h1>
							</div>
						</div>
				    </div>
				</div>
			</section>

			<div id="bgndVideo" class="player" data-property="{videoURL:'http://youtu.be/gszSyrGp10c',containment:'#cabecalho-paginas',autoPlay:true, mute:true, startAt:12, opacity:1, showControls: false,useOnMobile: false, mobileFallbackImage:'../wp-content/themes/alameda/img/topo/sobre.jpg'}"></div>

			<div class="container sobre-imagens-mobile iframe-mobile">
				<div class="row justify">
					<div class="col s12 pt50">
						<h3 class="center f35 pb50 turquesa-alameda-text">Conheça a história da Igreja Batista Alameda</h3>
					</div>
					<?php $sobre = array('post_type' => 'sobre_alameda', 'post_status' => 'publish', 'posts_per_page' => 1);
		        	$sobre = new WP_Query( $sobre );
		            	if ( $sobre->have_posts() ) : ?>
		            		<?php while ( $sobre->have_posts() ) : $sobre->the_post(); ?>
								<div class="col s12">
									<div class="col s12 justify">
										<img class="responsive-img image-center left p20" src="<?php the_field('imagem_principal'); ?>">
										<?php the_field('textos_iniciais'); ?>
									</div>
								</div>
								<div class="col s12 pt50">
									<h3 class="center f35 pb50 turquesa-alameda-text">Períodos pastorais da Alameda:</h3>
								</div>
								<div class="col l4 hide-on-med-and-down">
									<h3 class="turquesa-alameda-text">Navegue pelas datas</h3>
									<ul class="section table-of-contents" id="sticky">
										<li>
											<a href="#titulo_1" class="active">Década de 50</a>
										</li>
										<li>
											<a href="#titulo_2" class="">1º Pastorado</a>
										</li>
										<li>
											<a href="#titulo_3" class="">2º Pastorado</a>
										</li>
										<li>
											<a href="#titulo_4" class="">3º Pastorado</a>
										</li>
										<li>
											<a href="#titulo_5" class="">1º Período Interpastoral</a>
										</li>
										<li>
											<a href="#titulo_6" class="">3º Período Pastoral</a>
										</li>
										<li>
											<a href="#titulo_7" class="">2º Período Interpastoral</a>
										</li>
										<li>
											<a href="#titulo_8" class="">4º Período Pastoral</a>
										</li>
										<li>
											<a href="#titulo_9" class="">1º Período Interpastoral</a>
										</li>
										<li>
											<a href="#titulo_10" class="">3º Período Interpastoral</a>
										</li>
										<li>
											<a href="#titulo_11" class="">5º Período Pastoral</a>
										</li>
										<li>
											<a href="#titulo_12" class="">6º Período Pastoral</a>
										</li>
										<li>
											<a href="#titulo_13" class="">7º Período Pastoral</a>
										</li>
										<li>
											<a href="#titulo_14" class="">4º Período Interpastoral</a>
										</li>
										<li>
											<a href="#titulo_15" class="">8º Período Pastoral</a>
										</li>
										<li>
											<a href="#titulo_16" class="">9º Período Pastoral</a>
										</li>
										<li>
											<a href="#titulo_17" class="">10º Período Pastoral</a>
										</li>
										<li>
											<a href="#titulo_18" class="">5º Período Interpastoral</a>
										</li>
										<li>
											<a href="#titulo_19" class="">11º Período Pastoral</a>
										</li>
										<li>
											<a href="#titulo_20" class="">6º Período Interpastoral</a>
										</li>
										<li>
											<a href="#titulo_21" class="">12º Período Pastoral</a>
										</li>
										<li>
											<a href="#titulo_22" class="">7º Período Interpastoral</a>
										</li>
										<li>
											<a href="#titulo_23" class="">13º Período Pastoral</a>
										</li>
										<li>
											<a href="#titulo_24" class="">14º Período Pastoral</a>
										</li>
										<li>
											<a href="#titulo_25" class="">15º Período Pastoral</a>
										</li>
										<li>
											<a href="#titulo_26" class="">16º Período Pastoral</a>
										</li>
										<li>
											<a href="#titulo_27" class="">8º Período Interpastoral</a>
										</li>
										<li>
											<a href="#titulo_28" class="">17º Período Pastoral</a>
										</li>
										<li>
											<a href="#titulo_29" class="">18º Período Pastoral</a>
										</li>
										<li>
											<a href="#titulo_30" class="">Construção do Templo Atual</a>
										</li>
									</ul>
								</div>
								<div class="col s12 l8 pb50">
									<div class="scrollspy pb20" id="titulo_1">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_1'); ?></h3>
										<p><?php the_field('conteudo_1'); ?></p>
									</div>
									<div class="scrollspy pb20" id="titulo_2">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_2'); ?></h3>
										<p><?php the_field('conteudo_2'); ?></p>
									</div>
									<div class="scrollspy pb50" id="titulo_3">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_3'); ?></h3>
										<p><?php the_field('conteudo_3'); ?></p>
									</div>
									<div class="scrollspy pb20" id="titulo_4">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_4'); ?></h3>
										<p><?php the_field('conteudo_4'); ?></p>
									</div>
									<div class="scrollspy pb20" id="titulo_5">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_5'); ?></h3>
										<p><?php the_field('conteudo_5'); ?></p>
									</div>
									<div class="scrollspy pt50 pb20" id="titulo_6">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_6'); ?></h3>
										<p><?php the_field('conteudo_6'); ?></p>
									</div>
									<div class="scrollspy pb20" id="titulo_7">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_7'); ?></h3>
										<p><?php the_field('conteudo_7'); ?></p>
									</div>
									<div class="scrollspy pt50 pb20" id="titulo_8">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_8'); ?></h3>
										<p><?php the_field('conteudo_8'); ?></p>
									</div>
									<div class="scrollspy pb50" id="titulo_9">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_9'); ?></h3>
										<p><?php the_field('conteudo_9'); ?></p>
									</div>
									<div class="scrollspy pt80 pb20" id="titulo_10">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_10'); ?></h3>
										<p><?php the_field('conteudo_10'); ?></p>
									</div>
									<div class="scrollspy pb20" id="titulo_11">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_11'); ?></h3>
										<p><?php the_field('conteudo_11'); ?></p>
									</div>
									<div class="scrollspy pt50 pb20" id="titulo_12">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_12'); ?></h3>
										<p><?php the_field('conteudo_12'); ?></p>
									</div>
									<div class="scrollspy pb20" id="titulo_13">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_13'); ?></h3>
										<p><?php the_field('conteudo_13'); ?></p>
									</div>
									<div class="scrollspy pt30 pb20" id="titulo_14">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_14'); ?></h3>
										<p><?php the_field('conteudo_14'); ?></p>
									</div>
									<div class="scrollspy pb20" id="titulo_15">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_15'); ?></h3>
										<p><?php the_field('conteudo_15'); ?></p>
									</div>
									<div class="scrollspy pb20" id="titulo_16">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_16'); ?></h3>
										<p><?php the_field('conteudo_16'); ?></p>
									</div>
									<div class="scrollspy pb20" id="titulo_17">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_17'); ?></h3>
										<p><?php the_field('conteudo_17'); ?></p>
									</div>
									<div class="scrollspy pt50 pb20" id="titulo_18">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_18'); ?></h3>
										<p><?php the_field('conteudo_18'); ?></p>
									</div>
									<div class="scrollspy pb20" id="titulo_19">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_19'); ?></h3>
										<p><?php the_field('conteudo_19'); ?></p>
									</div>
									<div class="scrollspy pb20" id="titulo_20">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_20'); ?></h3>
										<p><?php the_field('conteudo_20'); ?></p>
									</div>
									<div class="scrollspy pb20" id="titulo_21">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_21'); ?></h3>
										<p><?php the_field('conteudo_21'); ?></p>
									</div>
									<div class="scrollspy pb20" id="titulo_22">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_22'); ?></h3>
										<p><?php the_field('conteudo_22'); ?></p>
									</div>
									<div class="scrollspy pb50" id="titulo_23">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_23'); ?></h3>
										<p><?php the_field('conteudo_23'); ?></p>
									</div>
									<div class="scrollspy pt80 pb20" id="titulo_24">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_24'); ?></h3>
										<p><?php the_field('conteudo_24'); ?></p>
									</div>
									<div class="scrollspy pb20" id="titulo_25">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_25'); ?></h3>
										<p><?php the_field('conteudo_25'); ?></p>
									</div>
									<div class="scrollspy pb20" id="titulo_26">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_26'); ?></h3>
										<p><?php the_field('conteudo_26'); ?></p>
									</div>
									<div class="scrollspy pb20" id="titulo_27">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_27'); ?></h3>
										<p><?php the_field('conteudo_27'); ?></p>
									</div>
									<div class="scrollspy pb20" id="titulo_28">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_28'); ?></h3>
										<p><?php the_field('conteudo_28'); ?></p>
									</div>
									<div class="scrollspy pb50 pb20" id="titulo_29">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_29'); ?></h3>
										<p><?php the_field('conteudo_29'); ?></p>
									</div>
									<div class="scrollspy pt130 pb50" id="titulo_30">
										<h3 class="turquesa-alameda-text"><?php the_field('titulo_30'); ?></h3>
										<p><?php the_field('conteudo_30'); ?></p>
									</div>
								</div>
			           		<?php endwhile; ?>
			           		<?php else : ?>
			           	<?php endif; ?>
			        <?php wp_reset_query();?>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>