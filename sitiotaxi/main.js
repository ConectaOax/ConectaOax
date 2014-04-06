var cordUno;
var cordDos;

function call(cad){
	var idOne = $("#one").attr("id");
	var idTwo = $("#two").attr("id");
	var idThree = $("#three").attr("id");
	var idFour = $("#four").attr("id");
	var idFive = $("#five").attr("id");
	var idSix = $("#six").attr("id");

	if (idOne == cad) {
		$("#description").html("<p> INDEPENDENCIA S/N, CENTRO, OAXACA DE JUAREZ, C.P 68000, OAX TEL: (951)516-2190 + info Categoria: Taxis </p>");
		cordUno = 17.0606113;
		cordDos = -96.7178765;
		var alameda = document.getElementById("one");
		google.maps.event.addDomListener(alameda,'click',drawMap);
	} else if(idTwo == cad){
		$("#description").html("<p> Avenida Reforma Agraria 225, 5 Señores 88120 Oaxaca </p>");
		cordUno = 17.051364;
		cordDos = -96.706231;
		var valle = document.getElementById("two");
		google.maps.event.addDomListener(valle,'click',drawMap);
	} else if(idThree == cad){
		$("#description").html("<p> Calle Naranjos S/N Reforma, Oaxaca 01 951 515 6575 </p>");
		cordUno = 17.081683;
		cordDos = -96.71877;
		var feb = document.getElementById("three");
		google.maps.event.addDomListener(feb,'click',drawMap);
	} else if(idFour == cad){
		$("#description").html("<p> Porfirio Díaz 50 Centro, Asunción Nochixtlán, Oaxaca 01 951 522 0675 </p>");
		cordUno = 17.4531911;
		cordDos = -97.2284833;
		var nochix = document.getElementById("four");
		google.maps.event.addDomListener(nochix,'click',drawMap);
	} else if(idFive == cad){
		$("#description").html("<p> Avenida Universidad 200 Fraccionamiento Trinidad de las Huertas 68120 Oaxaca </p>");
		cordUno = 17.0530841;
		cordDos = -96.7132679;
		var univ = document.getElementById("five");
		google.maps.event.addDomListener(univ,'click',drawMap);
	} else if(idSix == cad){
		$("#description").html("<p> 16 de Septiembre 117 Fernando Gómez Sandoval 68129 Oaxaca </p>");
		cordUno = 17.053765;
		cordDos = -96.706984;
		var sept = document.getElementById("six");
		google.maps.event.addDomListener(sept,'click',drawMap);
	}
}


function drawMap(){
	var mapa;
	var opcionesMapa = {
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	mapa = new google.maps.Map(document.getElementById('canvasGoogle'),opcionesMapa);
	navigator.geolocation.getCurrentPosition(function(posicion){
		var geolocalizacion = new google.maps.LatLng(posicion.coords.latitude, posicion.coords.longitude);
		var marcador = new google.maps.Marker({
			map: mapa,
			draggable: false,
			position:geolocalizacion,
			visible: true
		});
		mapa.setCenter(geolocalizacion);
		calcRoute(geolocalizacion,mapa);
	});
}

function calcRoute(inicioRuta,mapa){
	var directionsService = new google.maps.DirectionsService();
	var directionsRenderer = new google.maps.DirectionsRenderer();
	directionsRenderer.setMap(mapa);
	//EN ESTA PARTE PONES LA LATITUD Y LONGITUD DEL LUGAR A DONDE VAS A IR, TU UBICACION YA ES CALCULADA
	//EN AUTOMATICO
	var posicionSitioTaxis = new google.maps.LatLng(cordUno,cordDos);
	var marcador = new google.maps.Marker({
		map: mapa,
		draggable: false,
		position:posicionSitioTaxis,
		visible: true
	});
	var request = {
		origin: inicioRuta,
		destination: posicionSitioTaxis,
		travelMode: google.maps.DirectionsTravelMode.DRIVING
	}
	directionsService.route(request,function(response, status){
		if(status == google.maps.DirectionsStatus.OK){
			directionsRenderer.setDirections(response);
		}
	});
}

function change(cad){
	
}
