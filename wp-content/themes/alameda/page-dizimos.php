<?php /* Template Name: Dízimos */
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
						<h3 class="center f35 turquesa-alameda-text">Veja abaixo as informações para dízimo e ofertas:</h3>
					</div>
					<div class="col s12">
						<p class="center">Você pode contribuir com dízimos ou ofertas durante os momentos de consagração (nos cultos) ou também por depósito bancário ou pagamento online.</p>
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
						<div class="col s12 m4 push-m2 center hide">
							<h3>Botão para pagamento online (via PagSeguro):</h3>
							<div class="col s12">
								<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
								<form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post">
								<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
								<input type="hidden" name="currency" value="BRL" />
								<input type="hidden" name="receiverEmail" value="alameda@alameda.org.br" />
								<input type="hidden" name="iot" value="button" />
								<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/doacoes/209x48-doar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
								</form>
								<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
							</div>
						</div>
					</div>
					<div class="col s12 pt50">
						<p class="center">Após realizar o seu depósito, preencha o formulário abaixo com os seus dados e coloque em anexo o comprovante do seu depósito:</p>
					</div>
					<div class="col s12 m10 push-m1">
						<?php echo do_shortcode('[contact-form-7 id="8" title="Dízimos"]'); ?>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>