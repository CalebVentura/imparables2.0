var api = 'AIzaSyBkbccefDgWy8HV4WLZcnXg2v-askQaY6I';

      function initMap() {
      	var latLng = {
      		lat: -12.0098926,
      		lng: -76.842069
      	};

        var map = new google.maps.Map(document.getElementById('mapa'), {
          'center': latLng,
          'zoom': 16,
          'mapTypeId': google.maps.MapTypeId.HIBRID // SATELLITE / TERRAIN / HIBRID / ROADMAP
        });

        var contenido = '<h3 style="color:#3A4A69; text-aling:center">LOCAL - LOS SEGADORES</h3>' +
        				'<h4 style="color:#1B3E59; text-aling:center" > Imparables 2018 : Del 6 al 20 de Febrero</h4>'+
        				'<h4 style="color:#1B3E59; text-aling:center"> ¡¡¡¡ Te esperamos !!!!</h4>';

        var informacion = new google.maps.InfoWindow({
        	content: contenido
        });

        var marker = new google.maps.Marker({
        	position: latLng,
        	map: map,
        	tittle: 'IMPARABLES'
        });

        marker.addListener('click', function(){
			informacion.open(map, marker);        	
        });
      }
          //'draggable': false,    para no hacer zoom 
          //'scrollwheel': false    para no mover el mapa 


$(function(){

	// Lettering
	$('.nombre-sitio').lettering();

	// Agregar clase a menu
	$('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
	$('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');
	$('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');

	// Menu fijo

	var windowHeight = $(window).height();
	var barraAltura = $('.barra').innerHeight();

	$(window).scroll(function(){
		var scroll = $(window).scrollTop();
		if (scroll > windowHeight) {
			$('.barra').addClass('fixed');
			$('body').css({'margin-top': barraAltura + 'px'});
		}else{
			$('.barra').removeClass('fixed');
			$('body').css({'margin-top': '0px'});
		}
	});

	// Navegacion movil
	$('.menu-movil').on('click',function(){
		$('.navegacion-principal').slideToggle();
	});

	//programa de conferencias PROGRAMA EVENTO 

	$('.programa-evento .info-curso:first ').show();
	$('.menu-programa a:first ').addClass('activo');

	$('.menu-programa a').on('click', function(){
		$('.menu-programa a').removeClass('activo'); // 20 minutos buscando el punto .. XD
		$(this).addClass('activo');

		$('.ocultar').hide();
		var enlace = $(this).attr('href');
		$(enlace).fadeIn(1000);
		return false;
	});

	// Animaciones para los numeros 
	var resumenLista = jQuery('.resumen-evento');
	if (resumenLista.length>0) {
		$('.resumen-evento').waypoint(function(){
			$('.resumen-evento li:nth-child(1) p').animateNumber({number:8},1200);
			$('.resumen-evento li:nth-child(2) p').animateNumber({number:12},1200);
			$('.resumen-evento li:nth-child(3) p').animateNumber({number:14},1500);
			$('.resumen-evento li:nth-child(4) p').animateNumber({number:7},1200);			
		},{
			offset:'55%'
		});
	}


	// Cuenta regresiva 
	$('.cuenta-regresiva').countdown('2018/03/08 08:00:00', function(event){
		$('#dias').html(event.strftime('%D'));
		$('#horas').html(event.strftime('%H'));
		$('#minutos').html(event.strftime('%M'));
		$('#segundos').html(event.strftime('%S'));
	});
	$('.cuenta-regresiva-header').countdown('2018/03/06 07:00:00', function(event){
		$('#dias1').html(event.strftime('%D'));
		$('#horas1').html(event.strftime('%H'));
		$('#minutos1').html(event.strftime('%M'));
		$('#segundos1').html(event.strftime('%S'));
	});
	// Colorbox
	$('.invitado-info').colorbox({inline:true, width:"95%"});
	$('.boton_newsletter').colorbox({inline:true, width:"50%"});

});



























