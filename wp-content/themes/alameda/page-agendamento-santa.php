<?php /* Template Name: Agendamento Santa */
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

@font-face {
	font-family: 'Articulat-Bold';
    src: url('../wp-content/themes/alameda/css/fonts/ArticulatCFv2-Bold.woff2') format('woff2'),
        url('../wp-content/themes/alameda/css/fonts/ArticulatCFv2-Bold.woff') format('woff');
    font-weight: bold;
    font-style: normal;
}

strong {
	font-family: 'Articulat-Bold' !important;
	font-weight: bold;
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
					<div class="col s12 m10 push-m1 pt50 pt30m pb50 pb10m">
						<p class="center">
							Conforme decreto estadual bem como resolução da Secretaria de Saúde do Estado do Paraná, a Igreja Batista Alameda <strong>irá retomar os cultos presenciais seguindo todas as normas e orientações sanitárias</strong>.
							<br><br>
							Uma dessas normas é o <strong>limite da capacidade do local, que poderá ser ocupado em até 30%</strong>. Com isso, teremos disponíveis <strong>33 assentos</strong> espalhados por todo o templo. Para que possamos atender a essa orientação e realizar esse controle, temos duas opções de agendamento:
							<br><br>
							<strong>
							1 - Através do preenchimento desse breve formulário em nosso site;<br>
							2 - Através da secretaria da Igreja pelo número (41) 3019-1308 de terça a sexta-feira das 9h às 16h.
							</strong>
							<br><br>
							<strong>
							Caso opte pelo site, pedimos que você preencha os dados abaixo confirmando sua participação em um dos cultos que você poderá selecionar.
							<br><br>
							ATENÇÃO: preencha apenas se você tiver certeza de que irá participar, para não tirar o lugar de alguém que gostaria de vir.
							</strong>
							<br>
							Você irá preencher o CPF (limitado o cadastro de um CPF por culto) e demais dados. 
							<br><br>
							Outra norma que devemos seguir é o <strong>uso da máscara de proteção em todo o período de culto. Você deve vir com a sua máscara e permanecer com ela</strong>.
							<br><br>
							Lembramos que pessoas com mais de 60 anos, grupos de risco e crianças abaixo de 12 anos não poderão frequentar os cultos nesse primeiro momento.<strong> O Ministério Infantil Alameda Kids permanecerá fechado</strong>.
							<br><br>
							<strong>Se você tem algum sintoma de gripe e/ou resfriado, pedimos gentilmente que você fique em casa.</strong>
							<br><br>
							Resolução da Secretaria Estadual de Saúde.
							Decreto 4388 de 30/03/2020 que inclui as atividades religiosas.
							<br>
							<strong>Caso tenha alguma dúvida, nos procure pelo e-mail comunicacao@alameda.org.br ou pelo telefone (41) 3019-1308.</strong>
							<br><br>
							Apresente na recepção da Igreja Batista Alameda no dia do culto <strong>a tela do seu celular ou imprima o e-mail que você receberá.</strong>
						</p>
					</div>
					<div class="col s12 m10 push-m1">
						<h3 class="turquesa-alameda-text center f20m f30 mg0">Em qual culto você gostaria de participar?</h3>
					</div>
					<div class="col s12 m10 push-m1 pb50">
						<!-- Widget em linha do Calendly - início -->
						<div class="calendly-inline-widget" data-url="https://calendly.com/alamedasantafelicidade" style="overflow:hidden;min-width:280px;height:1000px;"></div>
						<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
						<!-- Widget em linha do Calendly - fim -->
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>