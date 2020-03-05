<?php /* Template Name: CEA */
/**
 * Template padrão para exibir as páginas.
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- INÍCIO DO WHILE -->
		<?php while ( have_posts() ) : the_post(); ?>
			<section id="cabecalho-paginas">
				<div class="imagem-principal cea cover-mobile">
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
				<div class="row pb50 pb50m">
					<div class="col s12 m8 push-m2 pt30m pt50 pb50">
						<p class="center pb50 pb30m">
							Conheça o Centro de Educação Alameda, que faz parte da visão da Igreja Batista Alameda. O CEA tem como intuito ensinar a Palavra de Deus e a integrar novos membros.<br><br>
							Clique abaixo em cada uma das categorias para você ver mais detalhes:
						</p>
					    <ul class="collapsible">
					    	<li>
					    		<div class="collapsible-header"><i class="material-icons">group_add</i>Integrar</div>
					    		<div class="collapsible-body">
					    			<p><strong>Programas para quem está chegando na Igreja Batista Alameda e para quem deseja se batizar:</strong></p>

									<h3 class="turquesa-alameda-text f16 f16m">Alameda por Dentro</h3>
									<ul>
										<li>- Quem somos nós</li>
										<li>- Como estamos estruturados</li>
										<li>- Onde você pode voluntariar-se</li>
									</ul>

									<h3 class="turquesa-alameda-text f16 f16m">Transição</h3>
									<ul>
										<li>- O discípulo e o princípio de autoridade espiritual</li>
										<li>- Obediências, rebeldias e suas recompensas</li> 
										<li>- O discípulo e as disciplinas espirituais</li>
										<li>- O discípulo e sua família</li>
										<li>- O discípulo: igreja e mordomia</li>
										<li>- Adulão: onde tudo começou</li>
										<li>- Como valentes tratam seus discípulos?</li>
										<li>- Chaves no coração de um valente </li>
									</ul>

									<h3 class="turquesa-alameda-text f16 f16m">Discipulado para o Batismo</h3>
									<ul>
										<li>- Conhecendo a Jesus verdadeiramente</li>
										<li>- O poder do sangue de Jesus</li>
										<li>- Espírito Santo e a salvação</li>
										<li>- O poder da palavra de Deus</li>
										<li>- O poder da oração</li>
										<li>- Minha identidade em Cristo</li>
										<li>- Vencendo o inimigo</li>
										<li>- Vida abundante</li>
										<li>- Igreja, Corpo de Jesus Cristo</li>
										<li>- Fidelidade Total</li>
										<li>- Transformando vidas</li>
										<li>- Batismo, testemunho de fé</li>
										<li>- Ceia do Senhor, celebrando nossa vitória</li>
										<li>- Célula – Conquistando nossa geração para Jesus</li>
									</ul>
					    		</div>
					    	</li>
					    	<li>
					    		<div class="collapsible-header"><i class="material-icons">book</i>Escola Bíblica</div>
					    		<div class="collapsible-body">
									<p><strong>Programas que aprofundam o conhecimento na Palavra de Deus, para membros e não membros da igreja:</strong></p>

									<h3 class="turquesa-alameda-text f16 f16m">Fundamentos da Fé Cristã 1 – A pessoa de Jesus</h3>
									<ul>
										<li>- Introdução, Trindade, Revelação Geral e Revelação Especial</li>
										<li>- O Logos de Deus: a Divindade de Cristo</li>
										<li>- O Supremo Sumo Sacerdote: a Humanidade de Cristo</li>
										<li>- O ensino de Jesus: As parábolas do Reino</li>
										<li>- O ensino de Jesus: Seu ensino moral (o Sermão do Monte)</li>
										<li>- O ensino de Jesus acerca de si mesmo (discursos no Evang. de João)</li>
										<li>- Os milagres de Jesus nos Evangelhos Sinóticos</li>
										<li>- Os milagres de Jesus no Evangelho de João</li>
										<li>- O Sacrifício Vicário de Cristo Jesus</li>
										<li>- A Ressureição e a Exaltação de Jesus</li>
										<li>- A segunda vinda de Cristo</li>
									</ul>

									<h3 class="turquesa-alameda-text f16 f16m">Fundamentos da Fé Crista 2 – Deus, o Homem e a Salvação</h3>
									<ul>
										<li>- A questão da existência de Deus. Razão vs. Fé</li>
										<li>- Atributos Naturais de Deus</li>
										<li>- Atributos Morais de Deus</li>
										<li>- A trindade</li>
										<li>- Revelação Geral e Revelação Especial de Deus</li>
										<li>- A criação do homem</li>
										<li>- A queda do homem</li>
										<li>- Deus. A liberdade e o mal</li>
										<li>- Cristo e a redenção do homem</li>
										<li>- Graça, Fé e Salvação</li>
										<li>- Ortodoxia vs. Heresias no tocante à salvação</li>
										<li>- Desenvolvendo a salvação: salvação e obras</li>
										<li>- Segurança, certeza e gozo da salvação e responsabilidade humana</li>
										<li>- A consumação da salvação: a esperança escatológica</li>
									</ul>

									<h3 class="turquesa-alameda-text f16 f16m">Exposição Bíblica 1 – Panorama da Bíblia</h3>
									<ul>
										<li>- A Bíblia, a Palavra de Deus</li>
										<li>- Dados históricos e geográficos sobre a Bíblia</li>
										<li>- Antigo Testamento – visão panorâmica</li>
										<li>- O Pentateuco</li>
										<li>- Livros Históricos</li>
										<li>- Livros Sapienciais</li>
										<li>- Profetas</li>
										<li>- Período Intertestamentário</li>
										<li>- Novo Testamento – visão panorâmica</li>
										<li>- Evangelhos</li>
										<li>- Atos dos Apóstolos</li>
										<li>- Cartas Paulinas</li>
										<li>- Cartas Gerais</li>
										<li>- Apocalipse</li>
									</ul>

									<h3 class="turquesa-alameda-text f16 f16m">Exposição Bíblica 2 – O Antigo Testamento</h3>
									<ul>
										<li>- Introdução ao Antigo Testamento</li>
										<li>- Gênesis: a criação</li>
										<li>- Dos patriarcas ao Êxodo</li>
										<li>- A Lei</li>
										<li>- Da conquista de Canaã à Monarquia (Josué, Juízes e Rute)</li>
										<li>- A era de ouro da Monarquia (Davi e Salomão)</li>
										<li>- Os livros sapienciais e a Poesia Hebraica</li>
										<li>- A divisão dos reinos e a história do reino do Norte</li>
										<li>- A história do reino do Sul</li>
										<li>- Cativeiro babilônico</li>
										<li>- A Restauração</li>
										<li>- Profetas Maiores</li>
										<li>- Profetas Menores</li>
										<li>- Período Intertestamentário</li>
									</ul>

									<h3 class="turquesa-alameda-text f16 f16m">Exposição Bíblica 3 – O Novo Testamento</h3>
									<ul>
										<li>- Introdução ao Novo Testamento</li>
										<li>- Evangelhos Sinóticos</li>
										<li>- Evangelho de João</li>
										<li>- Atos dos Apóstolos</li>
										<li>- O apóstolo Paulo</li>
										<li>- Cartas Paulinas</li>
										<li>- Romanos, Gálatas e Hebreus</li>
										<li>- Cartas da Prisão</li>
										<li>- Cartas Pastorais</li>
										<li>- Cartas Gerais</li>
										<li>- Cartas de Pedro</li>
										<li>- Cartas de João</li>
										<li>- Tiago e Judas</li>
										<li>- Apocalipse</li>
									</ul>

									<h3 class="turquesa-alameda-text f16 f16m">Classe de Adolescentes</h3>
									<ul>
										<li>- Temas anuais</li>
									</ul>

					    		</div>
					    	</li>
					    	<li>
					    		<div class="collapsible-header"><i class="material-icons">school</i>Formação Específica</div>
					    		<div class="collapsible-body">
									<p>Programas voltados para a formação específica de pessoas que trabalham ou estão sendo treinados para trabalharem em Ministérios da Igreja:</p>

									<h3 class="turquesa-alameda-text f16 f16m">Formação de Intercessores</h3>
									<h3 class="turquesa-alameda-text f16 f16m">Formação para Libertação e Cura</h3>
									<h3 class="turquesa-alameda-text f16 f16m">Formação de Discipuladores</h3>
									<ul>
										<li>- Propósito</li>
										<li>- Funcionamento</li>
										<li>- Ética</li>
										<li>- Emancipação</li>
									</ul>

									<h3 class="turquesa-alameda-text f16 f16m">Capacitação Kids</h3>
									<h3 class="turquesa-alameda-text f16 f16m">Capacitação Acessível</h3>
									<h3 class="turquesa-alameda-text f16 f16m">Programa de Voluntariado</h3>
					    		</div>
					    	</li>
					    	<li>
					    		<div class="collapsible-header"><i class="material-icons">record_voice_over</i>Líderes de Células</div>
					    		<div class="collapsible-body">					    			
									<p>Programas direcionados para Líderes de Células e para a formação de Líderes em Treinamento:</p>
									<h3 class="turquesa-alameda-text f16 f16m">Modulo I – Oração e Intercessão</h3>
									<h3 class="turquesa-alameda-text f16 f16m">Módulo II – Uns aos outros no contexto do maior mandamento</h3>
									<h3 class="turquesa-alameda-text f16 f16m">Módulo III – Somos um só corpo com muitos membros</h3>
									<h3 class="turquesa-alameda-text f16 f16m">Módulo IV – Aconselhamento</h3>
									<ul>
										<li>- Amor diferencial</li>
										<li>- A escuta diferenciada</li>
										<li>- O sigilo vital</li>
									</ul>

									<h3 class="turquesa-alameda-text f16 f16m">Módulo V – Relações Interpessoais</h3>
									<ul>
										<li>Competências Intrapessoais – “EU”</li>
										<li>Competências Interpessoais – “OS OUTROS”</li>
									</ul>
					    		</div>
					    	</li>
					    	<li>
					    		<div class="collapsible-header"><i class="material-icons">announcement</i>Universidade da Família</div>
					    		<div class="collapsible-body">
									<p>Programas direcionados a casais que queiram construir suas famílias dentro do modelo estabelecido por Deus:</p>

									<h3 class="turquesa-alameda-text f16 f16m">Educação de Filhos à Maneira de Deus</h3>
									<ul>
										<li>- Fundamentos</li>
										<li>- Como criar uma criança moral</li>
										<li>- Começando certo</li>
										<li>- Como dizer eu te amo</li>
										<li>- O mandato do pai</li>
										<li>- A consciência de seu filho</li>
										<li>- O respeito pelas autoridades</li>
										<li>- O respeito pelos mais velhos</li>
										<li>- Princípios de obediência</li>
										<li>- Disciplina com encorajamento</li>
										<li>- Disciplina com correção</li>
										<li>- As consequências e a punição</li>
										<li>- Arrependimento, perdão e restauração</li>
										<li>- Questões da disciplina</li>
										<li>- Construindo uma família saudável</li>
									</ul>

									<h3 class="turquesa-alameda-text f16 f16m">Curso Crow de Finanças para Adultos</h3>
									<ul>
										<li>- Introdução</li>
										<li>- A Parte de Deus</li>
										<li>- Nossa Parte</li>
										<li>- Dívida</li>
										<li>- Conselho</li>
										<li>- Honestidade</li>
										<li>- Contribuição</li>
										<li>- Trabalho</li>
										<li>- Investimento</li>
										<li>- Filhos</li>
										<li>- Perspectiva</li>
										<li>- Eternidade</li>
									</ul>

									<h3 class="turquesa-alameda-text f16 f16m">Veredas Antigas</h3>
									<ul>
										<li>- A Pergunta</li>
										<li>- Abençoando Gerações</li>
										<li>- Aliança: Amor Incondicional</li>
										<li>- Fortalecendo Relacionamentos</li>
										<li>- Romance à Maneira de Deus</li>
										<li>- Transformando Corações</li>
										<li>- Treinamento para Ministração</li>
										<li>- Treinamento Unificado</li>
										<li>- Vencendo a Ira</li>
										<li>- Veredas Antigas</li>
									</ul>
					    		</div>
					    	</li>
					    	<li>
					    		<div class="collapsible-header"><i class="material-icons">sentiment_satisfied</i>Programas Comportamentais</div>
					    		<div class="collapsible-body">
					    			<p>Programas de desenvolvimento para Líderes de Ministérios de tempo integral:</p>
									<h3 class="turquesa-alameda-text f16 f16m">- Relacionamentos Saudáveis 1</h3>
									<h3 class="turquesa-alameda-text f16 f16m">- Relacionamentos Saudáveis 2 </h3>
									<h3 class="turquesa-alameda-text f16 f16m">- Comunicação com Excelência </h3>
									<h3 class="turquesa-alameda-text f16 f16m">- Liderança Facilitadora</h3>
									<h3 class="turquesa-alameda-text f16 f16m">- Equipes produtivas</h3>
									<h3 class="turquesa-alameda-text f16 f16m">- Gestão do Tempo.</h3>
					    		</div>
					    	</li>
					    </ul>
					</div>
				</div>
			</div>
		<?php endwhile;?>
		<!-- FIM DO WHILE -->
</article>

<?php get_footer(); ?>