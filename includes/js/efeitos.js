$(document).ready(function(){
	$('.carrosel').slick({
		dots: false,
		arrows:true,      
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		fade: true,
		 cssEase: 'linear',
		autoplaySpeed: 8000,
  responsive: [
    {
      breakpoint: 480,
      settings: {
		dots: false,
		arrows:true,      
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		fade: true,
		 cssEase: 'linear',
		autoplaySpeed: 5000,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
});

$('.clientes').slick({
	infinite:true,
	arrows:true,
	slidesToShow:1,
	variableWidth:true,
	slidesToScroll:1,

		responsive:[
		{
		breakpoint:768,
		settings:{
			infinite:true,
			arrows:true,

			slidesToShow:1,
			variableWidth:true,
			slidesToScroll:1
			}
		}
	]
});
$('.depointe-infinito').slick({
		dots: false,
		arrows:true,      
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		fade: true,
		 cssEase: 'linear',
		responsive:[
		{
		breakpoint:768,
		settings:{
			infinite:true,
			arrows:true,
			slidesToShow:1,
			variableWidth:true,
			slidesToScroll:1
			}
		}
	]
});
$(function(){	
	//PRE-LOADER ----------------------------------------------------------------------------------------------------------------------
	pic=new Image(279,207); pic.src="images/logo-v3-technology.png";
	pic=new Image(57,26); pic.src="images/logo-fixed.png";

}) 

$(function(){
	$('.menu-infinito').addClass('menu-fixed');
	$('.logo').attr('src','images/logo-fixed.png')
	$('.contatos').addClass('contatos-fixo')
	$('.menu-links').addClass('menu-fixo')
	$('.border-menu').addClass('border-menu-fixo')
})


$(function(){
$('.parallax-contador').parallax({imageSrc: 'images/back-contador.jpg'});
$('.parallax-cabeamento').parallax({imageSrc: 'images/back-cabeamento.jpg'});
$('.parallax-cftv').parallax({imageSrc: 'images/back-cftv-parallax.jpg'});
$('.parallax-fibra').parallax({imageSrc: 'images/back-fibra-parallax.jpg'});
$('.parallax-projetos').parallax({imageSrc: 'images/back-projetos-parallax.jpg'});
$('.parallax-redes').parallax({imageSrc: 'images/back-redes-parallax.jpg'});


})

//ANIMAÇÃO DE SAIDA QUANDO FECHA WHATSAPP
 $(function(){
	$( ".fa-times" ).click(function() {
	  $( ".box-whatsapp" ).animate({
	    right: "-110px"
	  }, 500 );
	});

});


//ANIMAÇÃO DO ICONE DE MENU PARA CELULAR//
 $(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});


//MENU CELULAR E DROP MENU//

$(function(){
		var x = $(window).width()
	if(x < 480){
	var windowHeight = window.innerHeight;
	$('#nav-icon1').click(function(){
		$('.menu').toggleClass('entrada-por-cima')
		$('.menu').css('height', windowHeight);
		$('body').toggleClass('trava')
	})
	$('.lista-servicos').click(function(){
		$('.menu-links .drop').toggleClass('entrada-pela-esquerda')
		$('.menu-links .drop').css('height', windowHeight);
	})
}
})



$(function(){


$('.mapear').mouseover(function(){
var index = $( ".mapear" ).index( this );
	$('.saiba').eq(index).css('background','#000');
})
$('.mapear').mouseout(function(){
	$('.saiba').css('background','#c4161c');
})

})

// CAROSSEL DE SERVIÇOS MOBILE //
$(function(){
	var x = $(window).width()
	if(x < 480){
		//$('.parent').css({'width': x , 'height': x})
		//$('.bloco-servicos .slick-list').css('height', x)
		$( ".menu-completo .menu" ).prepend( "<div class='telefones-topo'><p>Telefones: <span>11 2311.0455</span></p><p>Whatsapp:<span>11 94023.7105</span></p></div>");
		$( " a.menu-servicos" ).append( "<span>></span>");
		$( ".drop" ).prepend( "<li class='drop-servicos'>SERVIÇOS</li>");
		$( ".drop" ).prepend( "<li class='drop-voltar'>VOLTAR<span><</span></li>")
		$('.menu-completo').append( "<a href='index.php' class='link-logo-celular'><img src='images/logo-v3-celular.png' class='logo'></a>")
		//$('div.contador').attr("data-image-src","url('images/back-contador-celular.jpg')")
		$('div.contador').css("background-image","url('images/back-contador-celular.jpg')")
		$('div.cabeamento').css("background-image","url('images/back-cabeamento-celular.jpg')")
		$('div.cptv').css("background-image","url('images/back-cftv-parallax-celular.jpg')")
		$('div.parallax-fibra').css("background-image","url('images/back-fibra-parallax-celular.jpg')")
		$('div.parallax-projetos').css("background-image","url('images/back-projetos-parallax-celular.jpg')")
		$('div.parallax-redes').css("background-image","url('images/back-redes-parallax-celular.jpg')")
		//$('.menu--ferdinand .menu__item--current .menu__link').css('color','#fff')
			$('.box li').addClass('menu__item--current')


		


		$(function(){  	
			$('.bloco-servicos-home .menu__list').slick({
				dots: false,
				arrows:true,      
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,	
			});
		}); 

		$(function(){  	
			$('.pai-contador').slick({
				dots: false,
				arrows:true,      
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,	
			});
		});   
	}
})