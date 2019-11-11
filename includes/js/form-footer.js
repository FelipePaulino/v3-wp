
$(function(){
	//FORM SUBMIT
	$(".form-contato form").submit(function(event){
    	event.preventDefault();
		
	
		//RESETA AVISOS
		$(".form-contato input:text,.form-contato input:radio,.form-contato textarea,.form-contato select").css("background","#FFF");
		$("span.errofooter").hide();
		
		var nomefooter=$("input[name='nomefooter']").val();

		var telefonefooter=$("input[name='telefonefooter']").val();
		var emailfooter=$("input[name='emailfooter']").val();
		var enderecofooter=$("input[name='enderecofooter']").val();
		var numerofooter=$("input[name='numerofooter']").val();
		var servicosfooter=$("select[name='servicosfooter']").val();
		var mensagemfooter=$("textarea[name='mensagemfooter']").val();
		var actionfooter=$("input[name='actionfooter']").val();

		$.post("includes/php/validacao_footer.php",{nomefooter:nomefooter,telefonefooter:telefonefooter,emailfooter:emailfooter,enderecofooter:enderecofooter,numerofooter:numerofooter,servicosfooter:servicosfooter,mensagemfooter:mensagemfooter,actionfooter:actionfooter,method:"ajax"},function(data){																									
			var retorno=data.split("|||");
			var campofooter=retorno[0];
			var mensagemfooter=retorno[1];
			if(campofooter=="ok"){
				alert(mensagemfooter);
				document.location.assign("obrigado-footer.php");
			}
			else if(campofooter=="falha")
				alert(mensagemfooter);
			else{
				errosfooter(campofooter,mensagemfooter);
				return false;
			}
		});
	});
});

function errosfooter(campofooter, mensagemfooter){
	if(campofooter=="mensagemfooter")
		$(".form-contato textarea[name='"+campofooter+"']").css("background","#FFFF99").focus();
	else if(campofooter=="servicosfooter")
		$(".form-contato select[name='"+campofooter+"']").css("background","#FFFF99").focus();
	else
		$(".form-contato input[name='"+campofooter+"']").css("background","#FFFF99").focus();
	$("span.errofooter").html(mensagemfooter).fadeIn("fast");
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