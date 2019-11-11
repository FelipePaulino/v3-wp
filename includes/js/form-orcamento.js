
$(function(){
	//FORM SUBMIT
	$(".form-contato form").submit(function(event){
    	event.preventDefault();
		
	
		//RESETA AVISOS
		$(".form-contato input:text,.form-contato input:radio,.form-contato textarea,.form-contato select").css("background","#FFF");
		$("span.erro").hide();
		
		var nome=$("input[name='nome']").val();

		var telefone=$("input[name='telefone']").val();
		var celular=$("input[name='celular']").val();
		var email=$("input[name='email']").val();
		var empresa=$("input[name='empresa']").val();
		var cidade=$("input[name='cidade']").val();
		var endereco=$("input[name='endereco']").val();
		var numero=$("input[name='numero']").val();
		var servicos=$("select[name='servicos']").val();
		var mensagem=$("textarea[name='mensagem']").val();
		var action=$("input[name='action']").val();

		$.post("includes/php/validacao_orcamento.php",{nome:nome,telefone:telefone,celular:celular,email:email,empresa:empresa,cidade:cidade, endereco:endereco,numero:numero,servicos:servicos,mensagem:mensagem,action:action,method:"ajax"},function(data){																									
			var retorno=data.split("|||");
			var campo=retorno[0];
			var mensagem=retorno[1];
			if(campo=="ok"){
				alert(mensagem);
				document.location.assign("obrigado-orcamento.php");
			}
			else if(campo=="falha")
				alert(mensagem);
			else{
				erros(campo,mensagem);
				return false;
			}
		});
	});
});

function erros(campo, mensagem){
	if(campo=="mensagem")
		$(".form-contato textarea[name='"+campo+"']").css("background","#FFFF99").focus();
	else if(campo=="servicos")
		$(".form-contato select[name='"+campo+"']").css("background","#FFFF99").focus();
	else
		$(".form-contato input[name='"+campo+"']").css("background","#FFFF99").focus();
	$("span.erro").html(mensagem).fadeIn("fast");
}

function soNum(inputData, e){
	if(document.all) // Internet Explorer
		var tecla = event.keyCode;
	else //Outros Browsers
		var tecla = e.which;
	
	if(!(tecla > 47 && tecla < 58)&&tecla!=8&&tecla!=0){
		alert("Digite somente números");
		return false;
	}
}