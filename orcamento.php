<?php
	include_once "includes/php/validacao_orcamento.php";
	?>
<!DOCTYPE html>

<?php
    $title = 'Orçamento';
    $description = 'Orçamento - Disponibilizamos um canal para orçamentos. Na V3 Technology, é muito prático e rápido solicitar um serviço ou atendimento especializado.';
    $canonnical = 'http://www.v3technology.com.br/orcamento';
    ?>

	<style type="text/css">
	/* Set a size for our map container, the Google Map will take up 100% of this container */
		#map {
		width: 100%;
		height: 500px;
		}
		.servicos ul{
			padding: 0;
			width: 100%;
		}
		@media (max-width: 480px) {
			.entre-contato h3{
				margin-top: 30%;
				margin-bottom: 10%;
			}
			.entre-contato .box-contato{
				margin-top: 10%;
			}
		}
	</style>
	

<?php include('header.php') ?>
	<div class="container-fluid entre-contato">
		<div class="container">
			<h3>ORÇAMENTO</h3>
			<p>Disponibilizamos um canal exclusivo para orçamentos. Na <span>V3 Technology</span>, é muito prático e rápido solicitar um serviço ou atendimento especializado. Preencha o formulário abaixo ou, se preferir, utilize outro canal atendimento.</p>
			<div class="box-contato home-contato col-md-3">
				<h5>Tem alguma dúvida? <span>Entre em Contato</span></h5>
				<img src="images/sprites2.png" width="40" height="40"  alt="Entre em Contato" title="Entre em Contato">
				<p>11 2311.0455 <br>11 94023.7105</p>
			</div>
			<div class="box-contato home-email col-md-3"">
				<h5>precisa de <span>mais detalhes?</span></h5>
				<img src="images/sprites2.png" alt="Enviar E-mail" title="Enviar E-mail">
				<p>contato@v3technology.com.br</p>
			</div>
			<div class="box-contato home-suporte col-md-3"">
				<h5>suporte <span>técnico</span></h5>
				<img src="images/sprites2.png" alt="Suporte Técnico" title="Suporte Técnico">
				<p>Temos um canal de atendimento e suporte
				focado em atender suas
				necessidades e resolver seu
				problema</p>
			</div>
			<div class="box-contato home-horario col-md-3"">
				<h5>Horário de <span>funcionamento</span></h5>
				<img src="images/sprites2.png" alt="Horário de funcionamento" title="Horário de funcionamento">
				<p>Seg a Sex <br>das <span>09h as 18h</span></p>
			</div>
			<br class="quebra" >
			<div class="form-contato" >
				<form >
					<div class="campo col-md-4">
						<label>Nome:</label>
						<input type="text" name="nome">
					</div>
					<div class="campo col-md-4">
						<label>E-mail:</label>
						<input type="text" name="email">
					</div>
					<div class="campo col-md-4 sem-margem">
						<label>Empresa:</label>
						<input type="text" name="empresa">
					</div>
					<div class="campo col-md-4">
						<label>Telefone:</label>
						<input type="text" name="telefone">
					</div>
					<div class="campo col-md-4">
						<label>Celular:</label>
						<input type="text" name="celular">
					</div>
					<div class="campo col-md-4 sem-margem">
						<label>Tipo de Serviço:</label>
						<select name="servicos" value="" >
						<option selected="selected" value="">Selecione</option>
						<option value="Cabeamento Estruturado">Cabeamento Estruturado</option>
						<option value="CFTV">CFTV</option>
						<option value="Fibra Optica">Fibra Optica</option>
						<option value="Rede Elétrica">Rede Elétrica</option>
						<option value="Gerenciamento de Projetos">Gerenciamento de Projetos</option>
						<option value="Gerenciamento de Redes">Gerenciamento de Redes</option>
						</select>
					</div>
					<div class="campo col-md-4">
						<label>Endereço</label>
						<input type="text" name="endereco">
					</div>
					<div class="campo col-md-4">
						<label>Numero:</label>
						<input type="text" name="numero">
					</div>
					<div class="campo col-md-4 sem-margem">
						<label>Cidade:</label>
						<input type="text" name="cidade">
					</div>
					<label>Mensagem:</label>
					<textarea name="mensagem"></textarea>
					<input type="hidden" name="action" value="enviaForm" />
					<input type="submit" name="" value="ENVIAR" class="bt-enviar">
					<span class="erro">
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
<?php include('footer-orcamento.php') ?>
