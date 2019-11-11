
$(document).ready(function(){ 
  $('#backgroud-carousel').carousel({
    //interval: 1000
  });
//Função menu responsivo
$('.menu-abrir').click(function() {
	if($('body').hasClass('menu-ativo')){
		$('body').removeClass('menu-ativo');
	}else{
		$('body').addClass('menu-ativo');
	}

});
$('.background-menu').click(function(){
 $('body').removeClass('menu-ativo');
});
//Validar Campo Telefone
$('.telefone').mask('(00) 0000-00009');
$('.telefone').blur(function(event) {
   if($(this).val().length == 15){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
    $('.telefone').mask('(00) 00000-0009');
  } else {
    $('.telefone').mask('(00) 0000-0009');
  }
});
//Valida Formulário
jQuery.validator.addMethod("testEmail", function(value, element) {
  return this.optional(element) || /[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}/i.test(value);
}, "Digite e-mail valido.");

$('#form-middle').validate({
  rules: {
    nome_middle: {
      required: true,
      minlength: 2
    },
    email_middle: {
      required: true,
      email: true,
      testEmail: true
    },
    mensagem_middle: {
      required: true,
      minlength: 10
    }
  },messages: {
    nome_middle: {
      required: "Digite seu nome.",
      minlength: "Digite seu nome completo."
    },
    email_middle: {
      required: "Digite um email.",
      email: "Digite e-mail valido."
    },
    mensagem_middle: {
      required: "Digite uma mensagem.",
      minlength: "A mensagem deve ter no mínimo 10 caracteres."
    }
  },submitHandler: function( form ){
    var dados = $( form ).serialize();
    var host =  "/includes/envia.php";
    var actBtn = $(form).find('button[type="submit"]');
    var oldText = actBtn.text();

    actBtn.text('Enviando...');
    actBtn.attr('disabled', true);
    
    $.ajax({
      type: "POST",
      url: host,
      async: true,
      data: dados,
      success: function( data ){
        var result = data == '' ? data : JSON.parse(data);
        if(result.status == '200'){
          window.location ="/sucesso-consultorio/";
        }else {
          actBtn.text(oldText);
          actBtn.attr('disabled', false);
        }
      },
      error: function (data) {
        actBtn.text(oldText);
        actBtn.attr('disabled', false);
      }
    });

    return false;
  }
});

$('#form-topo').validate({
  rules: {
    nome_topo: {
      required: true,
      minlength: 2
    },
    email_topo: {
      required: true,
      email: true,
      testEmail: true
    },
    telefone_topo: {
      required: true,
      minlength: 2
    },
    mensagem_topo: {
      required: true,
      minlength: 10
    }
  },messages: {
    nome_topo: {
      required: "Digite seu nome.",
      minlength: "Digite seu nome completo."
    },
    telefone_topo: {
      required: "Digite seu telefone.",
      minlength: "Digite seu telefone completo."
    },
    email_topo: {
      required: "Digite um email.",
      email: "Digite e-mail valido."
    },
    mensagem_topo: {
      required: "Digite uma mensagem.",
      minlength: "A mensagem deve ter no mínimo 10 caracteres."
    }
  },submitHandler: function( form ){
    var dados = $( form ).serialize();
    var host =  "/includes/envia.php";
    var actBtn = $(form).find('button[type="submit"]');
    var oldText = actBtn.text();

    actBtn.text('Enviando...');
    actBtn.attr('disabled', true);
    
    $.ajax({
      type: "POST",
      url: host,
      async: true,
      data: dados,
      success: function( data ){
        var result = data == '' ? data : JSON.parse(data);
        if(result.status == '200'){
          window.location ="/sucesso-consultorio/";
        }else {
          actBtn.text(oldText);
          actBtn.attr('disabled', false);
        }
      },
      error: function (data) {
        actBtn.text(oldText);
        actBtn.attr('disabled', false);
      }
    });

    return false;
  }
});

$('#form-unidade').validate({
  rules: {
    nome_topo: {
      required: true,
      minlength: 2
    },
    email_topo: {
      required: true,
      email: true,
      testEmail: true
    },
    telefone_topo: {
      required: true,
      minlength: 2
    },
    mensagem_topo: {
      required: true,
      minlength: 10
    }
  },messages: {
    nome_topo: {
      required: "Digite seu nome.",
      minlength: "Digite seu nome completo."
    },
    telefone_topo: {
      required: "Digite seu telefone.",
      minlength: "Digite seu telefone completo."
    },
    email_topo: {
      required: "Digite um email.",
      email: "Digite e-mail valido."
    },
    mensagem_topo: {
      required: "Digite uma mensagem.",
      minlength: "A mensagem deve ter no mínimo 10 caracteres."
    }
  },submitHandler: function( form ){
    var dados = $( form ).serialize();
    var host =  "/includes/envia.php";
    var actBtn = $(form).find('button[type="submit"]');
    var oldText = actBtn.text();

    actBtn.text('Enviando...');
    actBtn.attr('disabled', true);

    $.ajax({
      type: "POST",
      url: host,
      async: true,
      data: dados,
      success: function( data ){
        var result = data == '' ? data : JSON.parse(data);
        if(result.status == '200'){
          window.location ="/sucesso-consultorio/";
        }else {
          actBtn.text(oldText);
          actBtn.attr('disabled', false);
        }
      },
      error: function (data) {
        actBtn.text(oldText);
        actBtn.attr('disabled', false);
      }
    });

    return false;
  }
});

$('#form-principal').validate({
  rules: {
    nome_principal: {
      required: true,
      minlength: 2
    },
    email_principal: {
      required: true,
      email: true,
      testEmail: true
    },
    telefone_principal: {
      required: true,
      minlength: 2
    },
    mensagem_principal: {
      required: true,
      minlength: 10
    }
  },messages: {
    nome_principal: {
      required: "Digite seu nome.",
      minlength: "Digite seu nome completo."
    },
    telefone_principal: {
      required: "Digite seu telefone.",
      minlength: "Digite seu telefone completo."
    },
    email_principal: {
      required: "Digite um email.",
      email: "Digite e-mail valido."
    },
    mensagem_principal: {
      required: "Digite uma mensagem.",
      minlength: "A mensagem deve ter no mínimo 10 caracteres."
    }
  },submitHandler: function( form ){
    var dados = $( form ).serialize();
    var host =  "/includes/envia.php";
    var actBtn = $(form).find('button[type="submit"]');
    var oldText = actBtn.text();

    actBtn.text('Enviando...');
    actBtn.attr('disabled', true);
    
    $.ajax({
      type: "POST",
      url: host,
      async: true,
      data: dados,
      success: function( data ){
        var result = data == '' ? data : JSON.parse(data);
        if(result.status == '200'){
          window.location ="/sucesso-doutor/";
        }else {
          actBtn.text(oldText);
          actBtn.attr('disabled', false);
        }
      },
      error: function (data) {
        actBtn.text(oldText);
        actBtn.attr('disabled', false);
      }
    });

    return false;
  }
});

function initialize() {
  var myLatlng = new google.maps.LatLng(lat,long);
  var mapOptions = {
    zoom: 19,
    zoomControl: false,
    scaleControl: false,
    scrollwheel: false,
    disableDoubleClickZoom: true,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = mensagem;

  var infowindow = new google.maps.InfoWindow({
    content: contentString,
    maxWidth: 190
  });

  var marker = new google.maps.Marker({
    position: myLatlng,
    map: map,
    title: 'Dr. Wendell Uguetto - Cirurgia Plástica'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
  infowindow.open(map,marker);
}

google.maps.event.addDomListener(window, 'load', initialize);
});
