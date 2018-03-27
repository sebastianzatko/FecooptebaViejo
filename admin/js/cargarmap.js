var markersArray = [];


function clearOverlays() {
  for (var i = 0; i < markersArray.length; i++ ) {
    markersArray[i].setMap(null);
  }
  markersArray.length = 0;
}


geocoder=new google.maps.Geocoder();;
function buscar(address,callback){
	var coordenadas;
	geocoder.geocode({address:address},function(results,status){
		console.log(results);
		cooderdenadas=results[0].geometry.location;
		clearOverlays();
		var marker=new google.maps.Marker({
			
			position:{
				lat:results[0].geometry.location.lat(),
				lng:results[0].geometry.location.lng()
			},
			map:map,
			draggable:true
		});
		
		markersArray.push(marker);
		var centro=new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng());
		map.panTo(centro);
		document.getElementById("lat").value = results[0].geometry.location.lat();
		document.getElementById("long").value = results[0].geometry.location.lng();
		google.maps.event.addListener(marker,'dragend',function(event) {
			document.getElementById("lat").value =  marker.position.lat().toFixed(6);
			document.getElementById("long").value = marker.position.lng().toFixed(6);
			var latlong2={lat:parseFloat(marker.position.lat().toFixed(6)),lng:parseFloat(marker.position.lng().toFixed(6))};
			geocoder.geocode({'location': latlong2}, function(results, status) {
			        if (status === 'OK') {
						console.log(results);
						document.getElementById("address").value =" ";
						document.getElementById("address").value =results[0].formatted_address;
					}
			});
        });
		callback(cooderdenadas);
	})
}

$("#geobusca").click(function(){
	var dirreccion=document.getElementById("address").value;
	buscar(dirreccion,function(coordenadas){console.log(coordenadas)})
});

$("#mas").click(function(){
		clearOverlays();
		var newMapCenter = map.getCenter();
		var latitude = newMapCenter.lat();
		var longitude = newMapCenter.lng();
		var marker=new google.maps.Marker({
			
			position:{
				lat:latitude,
				lng:longitude
			},
			map:map,
			draggable:true
		});
		var latlong={lat:latitude,lng:longitude}
		geocoder.geocode({'location': latlong}, function(results, status) {
			        if (status === 'OK') {
						console.log(results);
						document.getElementById("address").value =results[0].formatted_address;
					}
		});
		document.getElementById("lat").value = latitude;
		document.getElementById("long").value = longitude;
		google.maps.event.addListener(marker,'dragend',function(event) {
			document.getElementById("lat").value =  marker.position.lat().toFixed(6);
			document.getElementById("long").value = marker.position.lng().toFixed(6);
			var latlong2={lat:parseFloat(marker.position.lat().toFixed(6)),lng:parseFloat(marker.position.lng().toFixed(6))};
			geocoder.geocode({'location': latlong2}, function(results, status) {
			        if (status === 'OK') {
						console.log(results);
						document.getElementById("address").value =" ";
						document.getElementById("address").value =results[0].formatted_address;
					}
			});
        });
		markersArray.push(marker);
		

});

$("#menos").click(function(){
		clearOverlays()
		document.getElementById("lat").value = " ";
		document.getElementById("long").value = " ";
		document.getElementById("address").value = " ";
	});
	
	
	
	
	
	
	
	
	
	
	
