<?php
	if($_SERVER['REQUEST_METHOD']=="POST"&&$_POST['action']=="enviaForm"){	
	
		$nome=trim(addslashes($_POST['nome']));
		$email=trim(addslashes($_POST['email']));
		$telefone=trim(addslashes($_POST['telefone']));
		$celular=trim(addslashes($_POST['celular']));
		$cidade=trim(addslashes($_POST['cidade']));
		$empresa=trim(addslashes($_POST['empresa']));
		$endereco=trim(addslashes($_POST['endereco']));
		$numero=trim(addslashes($_POST['numero']));
		$servicos=trim(addslashes($_POST['servicos']));
		$mensagem=trim(addslashes($_POST['mensagem']));
				
		if($nome=="")
			$retorno=$_POST['method']=="ajax"?"nome|||Campo Nome em branco":"Campo Nome em branco";
												
		else if($telefone=="")
			$retorno=$_POST['method']=="ajax"?"telefone|||Campo Telefone em branco":"Campo Telefone em branco";	

				else if($email==""||!preg_match("/^[0-9a-zA-Z_.-]{1,64}@([a-z0-9_]{2,64}\.)([a-z]{3}(\.[a-z]{2})?|[a-z]{2})$/",$email)){
			if($email=="")
				$retorno=$_POST['method']=="ajax"?"email|||Campo E-mail em branco":"Campo E-mail em branco";
			else
				$retorno=$_POST['method']=="ajax"?"email|||O E-mail digitado não é válido":"O E-mail digitado não é válido";
		}	

		else if($empresa=="")
			$retorno=$_POST['method']=="ajax"?"empresa|||Campo Empresa em branco":"Campo Empresa em branco";	

		else if($celular=="")
			$retorno=$_POST['method']=="ajax"?"celular|||Campo Celular em branco":"Campo Celular em branco";	

		else if($cidade=="")
			$retorno=$_POST['method']=="ajax"?"cidade|||Campo Cidade em branco":"Campo Cidade em branco";	

		else if($endereco=="")
			$retorno=$_POST['method']=="ajax"?"endereco|||Campo Endereço em branco":"Campo Endereço em branco";	


		else if($numero=="")
			$retorno=$_POST['method']=="ajax"?"numero|||Campo  Numero em branco":"Campo Numero em branco";	

		else if($servicos=="")
			$retorno=$_POST['method']=="ajax"?"servicos|||Campo Tipos de Serviços em branco":"Campo Tipos de Serviços em branco";	

			
		
		else if($mensagem=="")
			$retorno=$_POST['method']=="ajax"?"mensagem|||Campo Mensagem em branco":"Campo Mensagem em branco";		
		else{
			/* PARÂMETROS GERAIS */
			$paraNome="V3 Technology";
			$para="carlos@v3technology.com.br";
			
			/* Cabeçalho da mensagem */
			$headers = "MIME-Version: 1.1\n";
			$headers .= "Content-type: text/html; charset=UTF-8\n";
			$headers .= "To: ".$paraNome."<".$para.">\n";
			$headers .= "From: ".$paraNome."<".$para.">\n"; // remetente
			$headers .= "Return-Path: ".$para."\n"; // return-path
			$headers .= "Reply-To: ".$email."\n";
			$headers .= "Bcc: contato@v3technology.com.br\n";
		
		
			
			$mensagemToSend = '
				'.$nome.' enviou uma mensagem através do site<br /><br />
				Empresa = '.$empresa.'<br />
				Email = '.$email.'<br />
				Telefone = '.$telefone.'<br />
				Celular = '.$celular.'<br />
				Cidade = '.$cidade.'<br />
				Endereço = '.$endereco.'<br />
				Numero = '.$numero.'<br />
				Tipos de Serviços = '.$servicos.'<br />
				Mensagem = '.$mensagem.'<br />

			';

			if(@mail($para, "Contato solicitado pelo do Site", $mensagemToSend, $headers))
				$retorno=$_POST['method']=="ajax"?"ok|||Mensagem enviada com sucesso.":"Mensagem enviada com sucesso.";	
			
			else
				$retorno=$_POST['method']=="ajax"?"falha|||Falha na tentativa de envio da mensagem.":"Falha na tentativa de envio da mensagem.";
		}
	}
		
	if($_POST['method']=="ajax")
		echo $retorno;
	else
		$retorno_php=$retorno;
?>