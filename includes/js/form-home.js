
$(function(){
	//FORM SUBMIT
	$(".solicite-orcamento form").submit(function(event){
    	event.preventDefault();
		
	
		//RESETA AVISOS
		$(".solicite-orcamento input:text, .solicite-orcamento input:radio, .solicite-orcamento textarea, .solicite-orcamento select").css("background","#FFF");
		$(".errohome").hide();
		
		var nomehome=$("input[name='nomehome']").val();
		var telefonehome=$("input[name='telefonehome']").val();
		var emailhome=$("input[name='emailhome']").val();
		var servicoshome=$("select[name='servicoshome']").val();
		var mensagemhome=$("textarea[name='mensagemhome']").val();
		var action=$("input[name='action']").val();

		$.post("includes/php/validacao_home.php",{nomehome:nomehome,telefonehome:telefonehome,emailhome:emailhome,servicoshome:servicoshome,mensagemhome:mensagemhome,action:action,method:"ajax"},function(data){																									
			var retorno=data.split("|||");
			var campo=retorno[0];
			var mensagem=retorno[1];
			if(campo=="ok"){
				alert(mensagem);
				document.location.assign("obrigado-home.php");
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
		$(".solicite-orcamento textarea[name='"+campo+"']").css("background","#FFFF99").focus();
	else if(campo=="servicoshome")
		$(".solicite-orcamento select[name='"+campo+"']").css("background","#FFFF99").focus();
	else
		$(".solicite-orcamento input[name='"+campo+"']").css("background","#FFFF99").focus();
	$(".errohome").html(mensagem).fadeIn("fast");
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