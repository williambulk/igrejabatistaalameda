<?php /* Template Name: Agendamento Confirmado */
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
							O AGENDAMENTO FOI EFETUADO COM SUCESSO!
							<br><br>
							Lembre-se de apresentar no dia do culto <strong>a tela do seu celular ou imprima o e-mail que você recebeu.</strong>
							<br><br>
							Não esqueça que você deve vir com a sua máscara e permanecer com ela durante o culto.
							<br><br>
							Tenha um bom culto!
						</p>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>