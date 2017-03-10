function mapaEmpresa() {

	var myLatLng = {lat:-7.854609, lng:-34.909588};

	var map = new google.maps.Map(document.getElementById('googleMap'), {
		zoom: 16,
		center: myLatLng,
		mapTypeId: google.maps.MapTypeId.HYBRID
	});

	 var contentString = '<div style="color: green; text-align: center">'+
	 						'<h3>Guepard Labs</h3>'
	 						+'<img src="imagens/logo.png" width="75" height="55">'
	 					+'</div>';

  	var infoWindow = new google.maps.InfoWindow({
    	content: contentString
  	});

	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		title: 'Guepard Labs'
	});
	
    infoWindow.open(map, marker);
  	

}
