<?php /* Template Name: Agendamento */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<style type="text/css">
    input[type=email], input[type=email]:not(.browser-default), div.wpcf7 input[type="email"] {
	margin: 0 auto;
    display: block;
    height: 38px;
    padding: 8px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal contato cover-mobile">
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
						<p class="center">
							Conforme decreto estadual bem como resolução da Secretaria de Saúde do Estado do Paraná, iremos retomar os cultos presenciais seguindo as devidas orientações.
							<br><br>
							Uma dessas orientações é o limite da capacidade do local, que poderá ser ocupado em até 30%. Com isso, poderemos reunir no máximo 256 pessoas, espalhadas por todo o templo. Para realizar esse controle, pedimos que você preencha os dados abaixo confirmando sua participação em um dos cultos.
							<br><br>
							<strong>ATENÇÃO:</strong> preencha apenas se você tiver certeza que irá participar para não tirar o lugar de alguém que gostaria de vir.
							<br><br>
							Você irá preencher o CPF (limitado o cadastro de um CPF por culto) e E-mail para receber a sua confirmação de participação. Você pode imprimir o e-mail ou apresentar na tela do seu celular no dia do culto.
							<br><br>
							O Ministério Infantil permanecerá fechado.
							<br><br>
							Resolução da Secretaria Estadual de Saúde.
							<br><br>
							Decreto 4388 de 30/03/2020 que inclui as atividades religiosas.
							<br><br>
							Caso tenha algum problema com os Vouchers, envie um e-mail para: comunicacao@alameda.org.br
						</p>
					</div>
					<div class="col s12 m10 push-m1">
						<?php echo do_shortcode('[contact-form-7 id="3505" title="Agendamento"]'); ?>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>