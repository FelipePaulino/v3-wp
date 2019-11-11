<div id="map">

</div>
<div class=" container-fluid endereco">
<address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
	<p itemprop="streetAddress"> Rua Manoel Coelho, 694 - Sala 3 Centro – <b itemprop="addressLocality">São Caetano do Sul</b> – <b itemprop="addressRegion">SP</b></p>
</div>
<div class="container-fluid footer">
	<div class="container">
		<!--<a href="https://www.google.com.br/maps/place/R.+Manoel+Coelho,+694+-+3+-+Centro,+S%C3%A3o+Caetano+do+Sul+-+SP,+09510-102/@-23.615615,-46.5748244,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce5ceceec67319:0x7112acaf9623141e!8m2!3d-23.615615!4d-46.57263570" target="_blank" class="link-google"></a> -->
		<div class="sociais">
			<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
		</div>
		<p>© 2017 - V3 Technology. Todos os Direitos Reservados.</p>
		<span class="assinatura">
            <a href="https://www.3xceler.com.br/criacao-de-sites" title="Criação de Sites: Agência 3xceler" class="pull-left" target="_blank" style="color:#fff;">Criação de sites</a> 
            : 
            <img src="images/logo-3xceler.png"  alt="Logo Agência 3xceler" title="Logo Agência 3xceler">
        </span>
	</div>
</div>
		
		
</body>
</html>


<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="includes/slick/slick.min.js"></script>


<script type="text/javascript" src="includes/js/form-orcamento.js"></script>

<script src="includes/js/classie.js"></script>
<script type="text/javascript">
// ANCORA ANIMA PARA FORMULÁRIO DE CONTATO //
	 jQuery(document).ready(function($) { 
	    $(".scroll").click(function(event){        
	        event.preventDefault();
	        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
	   });
	});
</script>
<script type="text/javascript">
$(function(){
	var x = $(window).width()
	if(x < 480){
		$('.parent').css({'width': x , 'height': x})
	}
})
</script>


<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-Wc8uF7xBXm4zVLVScUaiRTcybf_VHFE&callback=initMap">
    //MAPA DO GOOGLE//
 </script>
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    //MAPA DO GOOGLE//

    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 16,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(-23.615615, -46.5726357), // New York

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{"featureType":"all","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#c4c4c4"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#707070"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21},{"visibility":"on"}]},{"featureType":"poi.business","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#be2026"},{"lightness":"0"},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"labels.text.stroke","stylers":[{"visibility":"off"},{"hue":"#ff000a"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#575757"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.stroke","stylers":[{"color":"#2c2c2c"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#999999"}]},{"featureType":"road.local","elementType":"labels.text.stroke","stylers":[{"saturation":"-52"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
          var image = 'http://serv3xceler.com.br/v3/images/marcador-mapa.png';
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-23.615615, -46.5726357),
            map: map,
            icon: image
        });
        
    }
</script>

<script type="text/javascript">
//ANIMAÇÃO MENU //
$(function(){
	var y = $(window).width()
	if(y > 480){
		(function() {
		[].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
			var menuItems = menu.querySelectorAll('.menu__link'),
				setCurrent = function(ev) {
					ev.preventDefault();

					var item = ev.target.parentNode; // li

					// return if already current
					if (classie.has(item, 'menu__item--current')) {
						return false;
					}
					// remove current
					classie.remove(menu.querySelector('.menu__item--current'), 'menu__item--current');
					// set current
					classie.add(item, 'menu__item--current');
				};

			[].slice.call(menuItems).forEach(function(el) {
				el.addEventListener('mouseover', setCurrent);
			});
		});

		[].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
			link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
			new Clipboard(link);
			link.addEventListener('mouseover', function() {
				classie.add(link, 'link-copy--animate');
				setTimeout(function() {
					classie.remove(link, 'link-copy--animate');
				}, 300);
			});
		});
		})(window);
	}
})
</script>

<script type="text/javascript">
	$(function(){
	$('.menu-infinito').addClass('menu-fixed');
	$('.logo').attr('src','images/logo-fixed.png')
	$('.contatos').addClass('contatos-fixo')
	$('.menu-links').addClass('menu-fixo')
	$('.border-menu').addClass('border-menu-fixo')
})

</script>