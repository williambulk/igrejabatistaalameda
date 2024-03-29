<?php /* Template Name: CMTF */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal dizimos cover-mobile">
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
				<div class="row pb50">
					<div class="col s12 pt50 pb50">
					    <img src="<?php bloginfo('template_url'); ?>/img/eventos/cmtf-marco.jpg" class="responsive-img image-center" />
					</div>
					<div class="col s12">
						<h3 class="center f35 turquesa-alameda-text">Informações</h3>
						<p class="center">
							26 e 27 de Março - 20h às 22h<br>
							28 de Março - 9h às 12h<br>
							13h30 às 17h30 - 19h às 22h<br>
							Valor: R$ 50
						</p>
					</div>
					<div class="col s12 pt30">
						<p class="center f20 turquesa-alameda-text">Veja abaixo os dados da conta para depósito para inscrição do CMTF.<br>Após você realizar o depósito, preencha os seus dados nos campos abaixo e envie o comprovante de pagamento:</p>
						<div class="col s12 m8 push-m2 center">
							<h3>Dados bancários:</h3>
							<div class="col s12">
								<img src="<?php bloginfo('template_url'); ?>/img/icons/bb.png" />
								<p>Agência: 3007-4<br>
								Conta Corrente: 105633-6<br>
								CNPJ: 75.125.443/0001-08
								</p>
							</div>
						</div>
					</div>
					<div class="col s12 m10 push-m1">
						<?php echo do_shortcode('[contact-form-7 id="2474" title="CMTF"]'); ?>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>