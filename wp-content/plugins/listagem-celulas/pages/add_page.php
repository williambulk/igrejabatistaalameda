<form id="addCelulaForm" method="post" action="" style="padding: 50px; background: #f9f9f9; margin-left: -20px; box-shadow: inset 0px 1px 7px #aaa;">
	<table style="width: 100%;">
			<tr>
				<th><label for="liderCelula">Líder(es) da Célula</label></th>
				<th><label for="numeroCelula">Número da Célula</label></th>
				<th><label for="telefone">Telefone</label></th>
				<th><label for="bairro">Bairro</label></th>
				<th><label for="diaCelula">Dia da Reunião</label></th>
				<th><label for="horaCelula">Horário da Reunião</label></th>
				<th><label for="juventude">É da Juventude?</label></th>
				<th rowspan="2">
					<div class="btn" style="margin: 0 30px 0;" onClick="javascript:this.parentNode.parentNode.parentNode.parentNode.parentNode.submit();">
						<div class="gradientOverlay"></div>
						<div class="btnWrapper">
							<span>Adicionar</span>
						</div>
					</div>
				</th>
			</tr>
			<tr>
				<td><input id="liderCelula" name="liderCelula" type="text" /></td>
				<td><input id="numeroCelula" name="numeroCelula" type="text" /></td>
				<td><input id="telefone" name="telefone" type="text" /></td>
				<td>
					<select id="bairro" name="bairro" >
						<option value="Abranches">Abranches</option>
						<option value="Água Verde">Água Verde</option>
						<option value="Almirante Tamandaré">Almirante Tamandaré</option>
						<option value="Ahú">Ahú</option>
                        <option value="Alto Boqueirão">Alto Boqueirão</option>
                        <option value="Alto da Glória">Alto da Glória</option>
                        <option value="Alto da XV">Alto da XV</option>
                        <option value="Atuba">Atuba</option>
                        <option value="Augusta">Augusta</option>
                        <option value="Bacacheri">Bacacheri</option>
                        <option value="Bairro Alto">Bairro Alto</option>
                        <option value="Barreirinha">Barreirinha</option>
                        <option value="Batel">Batel</option>
                        <option value="Bigorrilho">Bigorrilho</option>
                        <option value="Boa Vista">Boa Vista</option>
                        <option value="Bom Retiro">Bom Retiro</option>
                        <option value="Boqueirão">Boqueirão</option>
                        <option value="Butiatuvinha">Butiatuvinha</option>
                        <option value="Cabral">Cabral</option>
                        <option value="Cachoeira">Cachoeira</option>
                        <option value="Cajuru">Cajuru</option>
                        <option value="Campina do Siqueira">Campina do Siqueira</option>
                        <option value="Campo Comprido">Campo Comprido</option>
                        <option value="Campo de Santana">Campo de Santana</option>
                        <option value="Capão da Imbuia">Capão da Imbuia</option>
                        <option value="Capão Raso">Capão Raso</option>
                        <option value="Cascatinha">Cascatinha</option>
                        <option value="Centro" selected>Centro</option>
                        <option value="Centro Histórico">Centro Histórico</option>
                        <option value="Caximba">Caximba</option>
                        <option value="Centro Cívico">Centro Cívico</option>
                        <option value="Champagnat">Champagnat</option>
                        <option value="Cidade Industrial">Cidade Industrial</option>
                        <option value="Colombo">Colombo</option>
                        <option value="Cristo Rei">Cristo Rei</option>
                        <option value="Fanny">Fanny</option>
                        <option value="Fazendinha">Fazendinha</option>
                        <option value="Ganchinho">Ganchinho</option>
                        <option value="Guabirotuba">Guabirotuba</option>
                        <option value="Guaíra">Guaíra</option>
                        <option value="Hauer">Hauer</option>
                        <option value="Hugo Lange">Hugo Lange</option>
                        <option value="Jardim Botânico">Jardim Botânico</option>
                        <option value="Jardim Social">Jardim Social</option>
                        <option value="Jardim das Américas">Jardim das Américas</option>
                        <option value="Juvevê">Juvevê</option>
                        <option value="Lamenha Pequena">Lamenha Pequena</option>
                        <option value="Lapa">Lapa</option>
                        <option value="Lindoia">Lindoia</option>
                        <option value="Mercês">Mercês</option>
                        <option value="Mossunguê">Mossunguê</option>
                        <option value="Novo Mundo">Novo Mundo</option>
                        <option value="Orleans">Orleans</option>
                        <option value="Parolin">Parolin</option>
                        <option value="Pilarzinho">Pilarzinho</option>
                        <option value="Pinhais">Pinhais</option>
                        <option value="Pinheirinho">Pinheirinho</option>
                        <option value="Portão">Portão</option>
                        <option value="Prado Velho">Prado Velho</option>
                        <option value="Rebouças">Rebouças</option>
						<option value="Riviera">Riviera</option>
						<option value="Santa Cândida">Santa Cândida</option>
						<option value="Santa Felicidade">Santa Felicidade</option>
						<option value="Santa Quitéria">Santa Quitéria</option>
						<option value="Santo Inácio">Santo Inácio</option>
						<option value="São Braz">São Braz</option>
						<option value="São Francisco">São Francisco</option>
						<option value="São João">São João</option>
						<option value="São Lourenço">São Lourenço</option>
						<option value="São Miguel">São Miguel</option>
						<option value="Seminário">Seminário</option>
						<option value="Sítio Cercado">Sítio Cercado</option>
						<option value="Taboão">Taboão</option>
						<option value="Tarumã">Tarumã</option>
						<option value="Tatuquara">Tatuquara</option>
						<option value="Tingui">Tingui</option>
						<option value="Uberaba">Uberaba</option>
						<option value="Umbará">Umbará</option>
						<option value="Vila Izabel">Vila Izabel</option>
						<option value="Vista Alegre">Vista Alegre</option>
						<option value="Xaxim">Xaxim</option>
					</select>
				</td>
				<td>
					<select id="diaCelula" name="diaCelula">
						<option value="Domingo">Domingo</option>
						<option value="Segunda">Segunda</option>
						<option value="Terça">Terça</option>
						<option value="Quarta" selected>Quarta</option>
						<option value="Quinta">Quinta</option>
						<option value="Sexta">Sexta</option>
						<option value="Sábado">Sábado</option>
					</select>
				</td>
				<td><input id="horaCelula" name="horaCelula" type="text" /></td>
				<td><input id="juventude" name="juventude" type="checkbox" value="0" /></td>
			</tr>
	</table>
    <input id="insertType" name="insertType" value="add" style="display: none;"/>
</form>