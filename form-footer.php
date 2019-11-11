<div class="container-fluid entre-contato">
  <div class="container">
   <h3>ENTRE EM CONTATO</h3>
   <p id="footer" name="footer">Disponibilizamos um canal exclusivo para atendimento de nossos clientes. Veja como é fácil chegar em nosso escritório ou, se preferir, utilize um outro canal de contato abaixo.</p>
   <div class="box-contato home-contato col-md-3">
    <h5>Tem alguma dúvida? <span>Entre em Contato</span></h5>
    <img src="images/sprytes.png" style="object-position: -171px -522px;" width="40" height="40">
    <p itemprop="telephone">11 2311.0455 </p><p itemprop="telephone">11 94023.7105</p>
   </div>
   <div class="box-contato home-email col-md-3"">
    <h5>precisa de <span>mais detalhes?</span></h5>
    <img src="images/sprytes.png" style="object-position: -237px -522px;">
    <p>contato@v3technology.com.br</p>
   </div>
   <div class="box-contato home-suporte col-md-3"">
    <h5>suporte <span>técnico</span></h5>
 <img src="images/sprytes.png" style="object-position: -309px -522px;">
    <p>Temos um canal de atendimento e suporte
    focado em atender suas
    necessidades e resolver seu
    problema</p>
   </div>
   <div class="box-contato home-horario col-md-3"">
    <h5>Horário de <span>funcionamento</span></h5>
    <img src="images/sprytes.png" style="object-position: -376px -523px;">
    <p>Seg a Sex <br>das <span>09h as 18h</span></p>
   </div>
<br class="quebra" >
			<div class="form-contato" >
				<form method="post">
					<div class="campo col-md-4">
						<label>Nome:</label>
						<input type="text" name="nomefooter">
					</div>
					<div class="campo col-md-4">
						<label>Telefone:</label>
						<input type="text" name="telefonefooter">
					</div>
					<div class="campo col-md-4 sem-margem">
						<label>E-mail:</label>
						<input type="text" name="emailfooter">
					</div>
					<div class="campo col-md-4">
						<label>Endereço</label>
						<input type="text" name="enderecofooter">
					</div>
					<div class="campo col-md-4">
						<label>Número:</label>
						<input type="text" name="numerofooter">
					</div>
					<div class="campo col-md-4 sem-margem">
						<label>Tipo de Serviço</label>
						<select name="servicosfooter" value="" >
						<option selected="selected" value="">Selecione</option>
						<option value="Cabeamento Estruturado">Cabeamento Estruturado</option>
						<option value="CFTV">CFTV</option>
						<option value="Fibra Optica">Fibra Optica</option>
						<option value="Rede Elétrica">Rede Elétrica</option>
						<option value="Gerenciamento de Projetos">Gerenciamento de Projetos</option>
						<option value="Gerenciamento de Redes">Gerenciamento de Redes</option>
						</select>
					</div>
					<label>Mensagem:</label>
					<textarea name="mensagemfooter"></textarea>
					<input type="hidden" name="actionfooter" value="enviaFormfooter" />
					<input type="submit" name="" value="ENVIAR" class="bt-enviar">
					<span class="errofooter">
                    <?php
                    if($retornofooter_php!=""){
                    echo $retornofooter_php;
                    }
                    ?>
                </span>
				</form>
			</div>
		</div>
	</div>