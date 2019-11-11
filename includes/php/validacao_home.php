<?php
	if($_SERVER['REQUEST_METHOD']=="POST"&&$_POST['action']=="enviaForm"){	
	
		$nomehome=trim(addslashes($_POST['nomehome']));
		$telefonehome=trim(addslashes($_POST['telefonehome']));
		$emailhome=trim(addslashes($_POST['emailhome']));
		$servicoshome=trim(addslashes($_POST['servicoshome']));
		$mensagemhome=trim(addslashes($_POST['mensagemhome']));
				
		if($nomehome=="")
			$retorno=$_POST['method']=="ajax"?"nomehome|||Campo Nome em branco":"Campo Nome em branco";
												
		else if($telefonehome=="")
			$retorno=$_POST['method']=="ajax"?"telefonehome|||Campo Telefone em branco":"Campo Telefone em branco";	

				else if($emailhome==""||!preg_match("/^[0-9a-zA-Z_.-]{1,64}@([a-z0-9_]{2,64}\.)([a-z]{3}(\.[a-z]{2})?|[a-z]{2})$/",$emailhome)){
			if($emailhome=="")
				$retorno=$_POST['method']=="ajax"?"emailhome|||Campo E-mail em branco":"Campo E-mail em branco";
			else
				$retorno=$_POST['method']=="ajax"?"emailhome|||O E-mail digitado não é válido":"O E-mail digitado não é válido";
		}	

		else if($servicoshome=="")
			$retorno=$_POST['method']=="ajax"?"servicoshome|||Campo Tipos de Serviços em branco":"Campo Tipos de Serviços em branco";	
			
		
		else if($mensagemhome=="")
			$retorno=$_POST['method']=="ajax"?"mensagemhome|||Campo Mensagem em branco":"Campo Mensagem em branco";		
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
				'.$nomehome.' enviou uma mensagem através do site<br /><br />
				Email = '.$emailhome.'<br />
				Telefone = '.$telefonehome.'<br />
				Tipos de Serviços = '.$servicoshome.'<br />
				Mensagem = '.$mensagemhome.'<br />

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