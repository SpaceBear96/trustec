function initMap () {
	const ubicacion = new Localizacion ( () => {

		//Point #1:

		const myLatLng = {lat: -12.0440213, lng: -76.95289309999998};
		const myLatLngBiblioteca = {lat: -12.045017007877895, lng: -76.95283082199546};
		const myLatLngPolideportivo = {lat: -12.043725851993985, lng: -76.95348222952333};
		const myLatLngComedor = {lat: -12.044959286428407, lng: -76.95240788087932};
		const myLatLngCafeteria = {lat: -12.04402043356737, lng: -76.95221827879493};
				

		var texto = '<h1>Lugar de Prestamos: Central Tecsup</h1>' + '<p>En este lugar se podran realizar los prestamos, desde las 8:00 am hasta las 2:00 pm</p>';
		var texto2 = '<h1>Lugar de Prestamos: Biblioteca</h1>' + '<p>En este lugar se podran realizar los prestamos, desde las 8:00 am hasta las 2:00 pm</p>';
		var texto3 = '<h1>Lugar de Prestamos: Polideportivo</h1>' + '<p>En este lugar se podran realizar los prestamos, desde las 8:00 am hasta las 2:00 pm</p>';
		var texto4 = '<h1>Lugar de Prestamos: Comedor</h1>' + '<p>En este lugar se podran realizar los prestamos, desde las 8:00 am hasta las 2:00 pm</p>';
		var texto5 = '<h1>Lugar de Prestamos: Cafeteria</h1>' + '<p>En este lugar se podran realizar los prestamos, desde las 8:00 am hasta las 2:00 pm</p>';
					

		const options = {
			center: myLatLng,
			zoom: 20
			}

			var map = document.getElementById('map');
			const mapa = new google.maps.Map(map, options);
        	var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';

			const marcador1 = new google.maps.Marker({
				position: myLatLng,
				map: mapa,
				title: 'Lugar de prestamos',
				icon: image
			});

			const marcador2 = new google.maps.Marker({
				position: myLatLngBiblioteca,
				map: mapa,
				title: 'Lugar de prestamos',
				icon: image
			});
			
			const marcador3 = new google.maps.Marker({
				position: myLatLngPolideportivo,
				map: mapa,
				title: 'Lugar de prestamos',
				icon: image
			});

			const marcador4 = new google.maps.Marker({
				position: myLatLngComedor,
				map: mapa,
				title: 'Lugar de prestamos',
				icon: image
			});

			const marcador5 = new google.maps.Marker({
				position: myLatLngCafeteria,
				map: mapa,
				title: 'Lugar de prestamos',
				icon: image
			});

			var informacion = new google.maps.InfoWindow({
				content: texto

			});

			var informacion2 = new google.maps.InfoWindow({
				content: texto2

			});

			var informacion3 = new google.maps.InfoWindow({
				content: texto3

			});

			var informacion4 = new google.maps.InfoWindow({
				content: texto4

			});

			var informacion5 = new google.maps.InfoWindow({
				content: texto5

			});

			marcador1.addListener('click', function () {
				informacion.open(mapa, marcador1);
			});
			marcador2.addListener('click', function () {
				informacion2.open(mapa, marcador2);
			});
			marcador3.addListener('click', function () {
				informacion3.open(mapa, marcador3);
			});
			marcador4.addListener('click', function () {
				informacion4.open(mapa, marcador4);
			});
			marcador5.addListener('click', function () {
				informacion5.open(mapa, marcador5);
			});
	});
}