class Localizacion {
	constructor (callback) {
		if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition( (position) => {
				callback();
			});
		} else {
			alert('Tu navegador no soporta geolocalizacion');
		}
	}
}