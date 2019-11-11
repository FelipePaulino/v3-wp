<?php
	if($_SERVER['REQUEST_METHOD']=="POST"&&$_POST['actionfooter']=="enviaFormfooter"){	
	
		$nomefooter=trim(addslashes($_POST['nomefooter']));
		$telefonefooter=trim(addslashes($_POST['telefonefooter']));
		$emailfooter=trim(addslashes($_POST['emailfooter']));
		$enderecofooter=trim(addslashes($_POST['enderecofooter']));
		$numerofooter=trim(addslashes($_POST['numerofooter']));
		$servicosfooter=trim(addslashes($_POST['servicosfooter']));
		$mensagemfooter=trim(addslashes($_POST['mensagemfooter']));
				
		if($nomefooter=="")
			$retornofooter=$_POST['method']=="ajax"?"nomefooter|||Campo Nome em branco":"Campo Nome em branco";
												
		else if($telefonefooter=="")
			$retornofooter=$_POST['method']=="ajax"?"telefonefooter|||Campo Telefone em branco":"Campo Telefone em branco";	

				else if($emailfooter==""||!preg_match("/^[0-9a-zA-Z_.-]{1,64}@([a-z0-9_]{2,64}\.)([a-z]{3}(\.[a-z]{2})?|[a-z]{2})$/",$emailfooter)){
			if($emailfooter=="")
				$retornofooter=$_POST['method']=="ajax"?"emailfooter|||Campo E-mail em branco":"Campo E-mail em branco";
			else
				$retornofooter=$_POST['method']=="ajax"?"emailfooter|||O E-mail digitado não é válido":"O E-mail digitado não é válido";
		}	

		else if($enderecofooter=="")
			$retornofooter=$_POST['method']=="ajax"?"enderecofooter|||Campo Endereço em branco":"Campo Endereço em branco";	


		else if($numerofooter=="")
			$retornofooter=$_POST['method']=="ajax"?"numerofooter|||Campo  Numero em branco":"Campo Numero em branco";	

		else if($servicosfooter=="")
			$retornofooter=$_POST['method']=="ajax"?"servicosfooter|||Campo Tipos de Serviços em branco":"Campo Tipos de Serviços em branco";	

			
		
		else if($mensagemfooter=="")
			$retornofooter=$_POST['method']=="ajax"?"mensagemfooter|||Campo Mensagem em branco":"Campo Mensagem em branco";		
		else{
			/* PARÂMETROS GERAIS */
			$paraNome="V3 Technology";
			$para="carlos@v3technology.com.br";
			
			/* Cabeçalho da mensagem */
			$headersfooter = "MIME-Version: 1.1\n";
			$headersfooter .= "Content-type: text/html; charset=UTF-8\n";
			$headersfooter .= "To: ".$paraNome."<".$para.">\n";
			$headersfooter .= "From: ".$paraNome."<".$para.">\n"; // remetente
			$headersfooter .= "Return-Path: ".$para."\n"; // return-path
			$headersfooter .= "Reply-To: ".$email."\n";
			$headersfooter .= "Bcc: contato@v3technology.com.br\n";
		
		
			
			$mensagemToSendfooter = '
				'.$nomefooter.' enviou uma mensagem através do site<br /><br />
				Email = '.$emailfooter.'<br />
				Telefone = '.$telefonefooter.'<br />
				Endereço = '.$enderecofooter.'<br />
				Numero = '.$numerofooter.'<br />
				Tipos de Serviços = '.$servicosfooter.'<br />
				Mensagem = '.$mensagemfooter.'<br />

			';

			if(@mail($para, "Contato solicitado pelo do Site", $mensagemToSendfooter, $headersfooter))
				$retornofooter=$_POST['method']=="ajax"?"ok|||Mensagem enviada com sucesso.":"Mensagem enviada com sucesso.";	
			else
				$retornofooter=$_POST['method']=="ajax"?"falha|||Falha na tentativa de envio da mensagem.":"Falha na tentativa de envio da mensagem.";
		}
	}
		
	if($_POST['method']=="ajax")
		echo $retornofooter;
	else
		$retornofooter_php=$retornofooter;
?>