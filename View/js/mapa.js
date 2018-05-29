
/*------------------------------mapa------------------------------*/
localize();
function localize()
		{
		 	if (navigator.geolocation)
			{
                navigator.geolocation.getCurrentPosition(mapa,error);
            }
            else
            {
                alert('Tu navegador no soporta geolocalizacion.');
            }
		}


 
		function mapa(pos)
		{
			var latitud = pos.coords.latitude;
			var longitud = pos.coords.longitude;
			var precision = pos.coords.accuracy;
 
			var contenedor = document.getElementById("mapa_div")
 
			var centro = new google.maps.LatLng(latitud,longitud);
 
			var propiedades =
			{
                zoom: 15,
                center: centro,
                mapTypeId: google.maps.MapTypeId.ROADMAP
			};
 
			var map = new google.maps.Map(contenedor, propiedades);
 
			var marcador = new google.maps.Marker({
                position: centro,
                map: map,
                title: "Tu posicion actual"
            });
		}
 

 		
		function error(errorCode)
		{
			if(errorCode.code == 1)
				alert("No has permitido buscar tu localizacion")
			else if (errorCode.code==2)
				alert("Posicion no disponible")
			else
				alert("Ha ocurrido un error")
		}