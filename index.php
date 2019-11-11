<?php
	include_once "includes/php/validacao_home.php";
	include_once "includes/php/validacao_footer.php";
	?>
<!DOCTYPE html>

<?php
    $title = 'Soluções para projetos, Consultoria e Implantação';
    $description = 'Desenvolvemos soluções que atendem às necessidades de seu negócio, que comportem a demanda atual e a demanda crescente. Conheça nossos serviços.';
    $canonnical = 'http://www.v3technology.com.br';
    ?>
    

	
	
<?php include('header.php') ?>
	<style type="text/css">
	/* Set a size for our map container, the Google Map will take up 100% of this container */
		#map {
		width: 100%;
		height: 500px;
		}
		body{
			background: #f0f0f0;
		}

	</style>
	<div class="carrosel">
		<div>
			<div class="banner banner1">
				<div class="container">
					<h2>CABEAMENTO ESTRUTURADO</h2>
					<p>Oferecemos todos os tipos de cabeamentos estruturados para a sua empresa.</p>
					<a href="cabeamento-estruturado" alt="Ir para Cabeamento estruturados" title="Ir para Cabeamento estruturados">Saiba Mais</a>
				</div>
			</div>
		</div>
		<div>
			<div class="banner banner2">
				<div class="container">
					<h2>FIBRA <br>ÓPTICA</span></h2>
					<p>Para o projeto de fibra óptica, é necessário atentar para aspectos importantes, como local da instalação, entre outros. Desenvolvemos desde o projeto até a implantação da solução adotada.</p>
					<a href="fibra-optica" alt="Ir para Fibra Óptica" title="Ir para Fibra Óptica">Saiba Mais</a>
				</div>
			</div>
		</div>
		<div>
			<div class="banner banner3">	
				<div class="container">
					<h2>SISTEMAS DE SEGURANÇA</span></h2>
					<p>CFTV, Biometria e Controle de Acesso.</p>
					<a href="cftv" alt="Ir para CFTV" title="Ir para CFTV">Saiba Mais</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="solicite-orcamento">
			<div class="box-branco">
				<h3>SOLICITE UM <span>ORÇAMENTO</span></h3>
				<form method="post" action="">
					<label>Nome:</label>
					<input name="nomehome" type="text">
					<label>Telefone:</label>
					<input type="text" name="telefonehome">
					<label>E-mail:</label>
					<input type="text" name="emailhome">
					<label>Tipo de Serviço:</label>
					<select name="servicoshome" value="" >
						<option selected="selected" value="">Selecione</option>
						<option value="Cabeamento Estruturado">Cabeamento Estruturado</option>
						<option value="CFTV">CFTV</option>
						<option value="Fibra Optica">Fibra Optica</option>
						<option value="Rede Elétrica">Rede Elétrica</option>
						<option value="Gerenciamento de Projetos">Gerenciamento de Projetos</option>
						<option value="Gerenciamento de Redes">Gerenciamento de Redes</option>
					</select>
					<label>Mensagem:</label>
					<textarea name="mensagemhome"></textarea>
					<input type="hidden" name="action" value="enviaForm" />
					<input type="submit" name="" value="ENVIAR" class="bt-enviar">
					<span class="errohome">
                    <?php
                    if($retorno_php!=""){
                    echo $retorno_php;
                    }
                    ?>
                </span>
				</form>
			</div>
		</div>
		<div class="alguma-duvida">
			<div class="box-branco">
				<h3>Tem alguma dúvida?<span>Entre em Contato</span></h3>
				<div class="box-duvidas">
					<img src="images/sprytes.jpg"  class="telefone" width="73" height="73" alt="Entre em contato" title="Entre em contato" style="object-position: -42px -1527px;">
					<p><a href="tel:01123110455">11 2311.0455</a>
					<a href="https://api.whatsapp.com/send?phone=5511940237105" alt="Ir para WhatsApp" title="Ir para WhatsApp">11 94023.7105</a></p>
				</div>
				<h3>Suporte<span>Técnico</span></h3>
				<div class="box-duvidas">
					<img src="images/sprytes.jpg" class="relogio" alt="Suporte Técnico" title="Suporte Técnico" style="object-position: -140px -1527px;">
					<p class="texto-horario">Seg a Sex
					das 09h às 18h</p>
				</div>
				<h3>precisa de <span>Mais Detalhes?</span></h3>
				<div class="box-duvidas">
					<img src="images/sprytes.jpg" class="envelope" alt="Enviar E-mail" title="Enviar E-mail" style="object-position: -341px -1527px;">
					<p class="texto-email"><a href="mailto:contato@v3technology.com.br" alt="Enviar E-mail" title="Enviar E-mail">contato@v3technology.com.br</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid solucoes-infinito">
		<div class="container solucoes">
			<div class="textos-solucoes">
				<h1>soluções para
					projetos, consultoria
					e implantação</h1>
				<p>Desenvolvemos soluções que atendem às necessidades de seu negócio, que comportem a demanda atual e a demanda crescente.</p>

				<p>Conheça nossos serviços.</p>
			</div>
			<img src="images/homem-solucoes.png" alt="Soluções para Projetos" title="Soluções para Projetos">
		</div>
	</div>	



	<div class="container-fluid bloco-servicos bloco-servicos-home">
		<nav class="menu menu--valentine">
			<ul class="menu__list">
			<div class="parent">
					<div class="box"> 	
						<li class="menu__item menu__item--current">
							<h2>Gerenciamento de Projetos</h2>
							<p>Aplicação de conhecimentos, habilidades e técnicas na elaboração de atividades para atingir um conjunto de processos pré-definidos.</p>
							<a href="#" class="saiba">SAIBA MAIS</a>
							<a href="gerenciamento-projetos" class="menu__link" alt="Ir para Gerenciamento de Projetos" title="Ir para Gerenciamento de Projetos">
								

							</a>							
						</li>
						<a href="gerenciamento-projetos" class="projetos child bg-three" alt="Ir para Gerenciamento de Projetos" title="Ir para Gerenciamento de Projetos"><a href="#" class="mapear"></a></a>
					</div>
				</div>
				
				<div class="parent">
					<div class="box"> 	
						<li class="menu__item">
							<h2>Gerenciamento de Redes</h2>
							<p>As tarefas básicas da gerência em redes são: obter informações, diagnosticar e solucionar os problemas.</p>
							<a href="#" class="saiba">SAIBA MAIS</a>
							<a href="gerenciamento-redes" class="menu__link" alt="Ir para Gerenciamento de Redes" title="Ir para Gerenciamento de Redes"></a>							
						</li>
						<a href="gerenciamento-redes"  class="redes child bg-three" alt="Ir para Gerenciamento de Redes" title="Ir para Gerenciamento de Redes"><a href="#" class="mapear"></a></a>
					</div>
				</div>
				<div class="parent">
					<div class="box"> 	
						<li class="menu__item">
							<h2>Fibra Óptica</h2>
							<p>Desenvolvemos desde o projeto até a implantação da solução adotada.</p>
							<a href="#" class="saiba">SAIBA MAIS</a>
							<a href="fibra-optica"  class="menu__link" alt="Ir para Fibra Óptica" title="Ir para Fibra Óptica"><a href="#" class="mapear"></a></a>							
						</li>
						<a href="fibra-optica" class="optica child bg-three" alt="Ir para Fibra Óptica" title="Ir para Fibra Óptica"></a>
					</div>
				</div>
				<div class="parent">
					<div class="box"> 	
						<li class="menu__item">
							<h2>Sistemas de Segurança</h2>
							<p>CFTV é um sistema de transmissão dos sinais de câmeras colocadas em locais específicos.</p>
							<a href="#" class="saiba">SAIBA MAIS</a>
							<a href="cftv" class="menu__link" alt="Ir para CFTV" title="Ir para CFTV"><a href="#" class="mapear"></a></a>							
						</li>
						<a href="cftv" class="seguranca child bg-three" alt="Ir para CFTV" title="Ir para CFTV"></a>
					</div>
				</div>
				<div class="parent">
					<div class="box"> 	
						<li class="menu__item">
							<h2>Cabeamento Estruturado</h2>
							<p>Oferecemos serviços voltados para a consultoria e desenvolvimento de projetos.</p>
							<a href="#" class="saiba">SAIBA MAIS</a>
							<a href="cabeamento-estruturado" class="menu__link"  alt="Ir para Cabeamento Estruturado" title="Ir para Cabeamento Estruturado"><a href="#" class="mapear"></a></a>							
						</li>
						<a href="cabeamento-estruturado" class="cabeamento-home child bg-three" alt="Ir para Cabeamento Estruturado" title="Ir para Cabeamento Estruturado"></a>
					</div>
				</div>
				<div class="parent">
					<div class="box"> 	
						<li class="menu__item">
							<h2>Rede Elétrica</h2>
							<p>O método de prestação de serviço que mais tem crescido nos últimos anos, tornando-se muito eficiente na redução de custos.</p>
							<a href="#" class="saiba">SAIBA MAIS</a>
							<a href="rede-eletrica" class="menu__link"  alt="Ir para Rede Elétrica" title="Ir para Rede Elétrica"><a href="#" class="mapear"></a></a>							
						</li>
						<a href="rede-eletrica" class="eletrica child bg-three"  alt="Ir para Rede Elétrica" title="Ir para Rede Elétrica"></a>
					</div>
				</div>
			</ul>
		</nav>
	</div>
	<div class="container-fluid depoimentos">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>o que nossos clientes dizem sobre nós</h2>
					<p>Conheça um pouco dos nossos clientes e saiba o que eles pensam sobre a <span>V3 Technology</span>, nossos produtos, serviços e atendimento</p>
					<div class="back-clientes">
					<div class="clientes">
						<!--<a href="#"><img src="images/logo-casas-bahia.jpg"></a>-->
						<a ><img style="object-position: -238px -366px;" src="images/sprytes.jpg" alt="4linus" title="4linus"></a>
						<a ><img style="object-position: -238px -291px;" src="images/sprytes.jpg" alt="Altran" title="Altran"></a>
						<a ><img style="object-position: -238px -203px;" src="images/sprytes.jpg" alt="Boticário" title="Boticário"></a>
						<a ><img style="object-position: -238px -116px;" src="images/sprytes.jpg" alt="Bralyx" title="Bralyx"></a>
						<a ><img style="object-position: -238px -8px;" src="images/sprytes.jpg" alt="Caesar-Park" title="Caesar-Park"></a>
						<a ><img style="object-position: 0px -1385px;" src="images/sprytes.jpg" alt="Eletromidia" title="Eletromidia"></a>
						<a ><img style="object-position: 0px -1258px;" src="images/sprytes.jpg" alt="EP-Engenharia" title="EP-Engenharia"></a>
						<a ><img style="object-position: 0px -1133px;" src="images/sprytes.jpg" alt="Grupo-Forum" title="Grupo-Forum"></a>
						<a ><img style="object-position: 0px -1032px;" src="images/sprytes.jpg" alt="Impsa" title="Impsa"></a>
						<a ><img style="object-position: 0px -929px;" src="images/sprytes.jpg" alt="Jovem-Pan" title="Jovem-Pan"></a>
						<a ><img style="object-position: 0px -808px;" src="images/sprytes.jpg" alt="Labet" title="Labet"></a>
						<a ><img style="object-position: 0px -695px;" src="images/sprytes.jpg" alt="Legrand" title="Legrand"></a>
						<a ><img style="object-position: 0px -587px;" src="images/sprytes.jpg" alt="Pactum" title="Pactum"></a>
						<a ><img style="object-position: 0px -459px;" src="images/sprytes.jpg" alt="Promoarte" title="Promoarte"></a>
						<a ><img style="object-position: 0px -395px;" src="images/sprytes.jpg" alt="Rede-TV" title="Rede-TV"></a>
						<a ><img style="object-position: 0px -293px;"  src="images/sprytes.jpg" alt="Sorridents" title="Sorridents"></a>
						<a ><img style="object-position: 29px -193px;" src="images/sprytes.jpg" alt="Super-Finishing" title="Super-Finishing"></a>
						<a ><img style="object-position: 20px -89px;"  src="images/sprytes.jpg" alt="TLC-Marketing" title="TLC-Marketing"></a>
						<a ><img style="object-position: 13px 0;" src="images/sprytes.jpg" alt="Unimed" title="Unimed"></a>

					</div>
					</div>
				</div>
				<div class="col-md-6 depointe-infinito">
					<div class="depointe ">
						<div class="pessoa">
							<div class="box-pessoa">
								<img src="images/sprytes.png" alt="Pactum" title="Pactum" style="object-position: -23px -351px">
							</div>
							<h5>Sócrates Dimitrios</h5>
							<p>Pactum Consultoria Empresarial Ltda.</p>
						</div>
						<div class="box-texto">
							<img src="images/sprytes.png" class="pedaco" >
							<p>Em setembro de 2014, tínhamos uma demanda grande e um tempo curto para a mudança física de nosso escritório. Foi quando encontramos a V3 Technology. O trabalho foi realizado com qualidade e preço justo, os prazos combinados também foram cumpridos.</p>

							<p>A empresa acabou não só fazendo os trabalhos de que precisávamos, como também hoje são nossos assessores quando o assunto é T.I. e telefonia.</p>
						</div>	
					</div>
					<div class="depointe">
						<div class="pessoa">
							<div class="box-pessoa">
							<img src="images/sprytes.png"  alt="Citilab" title="Citilab" style="object-position: -23px -459px;">
							</div>
							<h5>Renato Cima</h5>
							<p>Citilab Diagnósticos LTDA(Labet).</p>
						</div>
						<div class="box-texto">
							<img src="images/sprytes.png" class="pedaco">
							<p>Estamos satisfeitos com os serviços prestados da V3 Technology, após buscarmos no mercado um serviço de qualidade a V3 junto com a sua equipe fizeram o trabalho que precisávamos.</p>
						</div>	
					</div>
					<div class="depointe">
						<div class="pessoa">
							<div class="box-pessoa">
							<img src="images/sprytes.png"  alt="Metalinox" title="Metalinox" style="object-position: -23px -566px">
							</div>
							<h5>Marcos Araujo</h5>
							<p>Metalinox Aços Inoxidáveis Especiais</p>
						</div>
						<div class="box-texto">
							<img src="images/sprytes.png" class="pedaco" >
							<p>Contratamos o serviço da V3 para reparo de fibra ótica e sempre quando possuímos alguma necessidade de infraestrutura procuramos a V3. A equipe da V3 possui profissionalismo nos seus serviços.</p>
						</div>	
					</div>
					<div class="depointe">
						<div class="pessoa">
							<div class="box-pessoa">
							<img src="images/sprytes.png"  alt="Boticario" title="Boticario" style="object-position: -26px -671px">
							</div>
							<h5>Paulo Littieri</h5>
							<p>Hannan Produtos Naturais Ltda(O Boticario)</p>
						</div>
						<div class="box-texto">
							<img src="images/sprytes.png" class="pedaco" >
							<p>Estamos extremamente satisfeitos com os serviços prestados, da empresa V3 Technology ! Após buscarmos no mercado um serviço de qualidade, a empresa V3 Technology superou a nossa expectativa com sua equipe altamente qualificada e prestativa!</p>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>

				<?php include('form-footer.php') ?>
			<?php include('footer.php') ?>
			<script type="text/javascript">
// MENU VIRA FIXO DEPOIS DE MARGIN-TOP 1000PX NO DESKTOP //
$(function(){
	var x = $(window).width()
	if(x > 480){
		$(function() {

			var sticky_navigation_offset_top = $('.menu-infinito').offset().top;
		    var sticky_navigation = function(){

		        var scroll_top = $(window).scrollTop()> 1000; 

		        if (scroll_top > sticky_navigation_offset_top) { 
		            $('.menu-infinito').addClass('menu-fixed');
		            $('.logo').attr('src','images/logo-fixed.png')
		            $('.contatos').addClass('contatos-fixo')
		            $('.menu-links').addClass('menu-fixo')
		            $('.border-menu').addClass('border-menu-fixo')
		        } 
		        else {
		            $('.menu-infinito').removeClass('menu-fixed'); 
		            $('.logo').attr('src','images/logo-v3-technology.png')
		            $('.contatos').removeClass('contatos-fixo')
		            $('.menu-links').removeClass('menu-fixo')
		            $('.border-menu').removeClass('border-menu-fixo')
		        }   
		    };

		    sticky_navigation();     

		    $(window).scroll(function() {

		         sticky_navigation();

		    });

		});
	}
});
</script>
<script type="text/javascript">
	

</script>
			
