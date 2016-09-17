/*javascript for project on google api*/


//prompt("welcome");
		var directionsDisplay;
		var directionsService = new google.maps.DirectionsService();
		var map;
		var marker;

		function initialize() {
			  directionsDisplay = new google.maps.DirectionsRenderer();
			  var myarea = new google.maps.LatLng(27.669573,85.32819);
			  var mapOptions = {
				zoom:7,
				center: myarea,
			  }
			  map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);
			  directionsDisplay.setMap(map);
			  
			  marker=new google.maps.Marker({
				position:myarea,
				animation:google.maps.Animation.BOUNCE,
				title:'My Home(Sundhara,Lalitpur)'
				});

			marker.setMap(map);
			
		}
			
			
		function getRoute() {
				//alert("TEsting");
			  var start = document.getElementById('startvalue').value;
			  var end = document.getElementById('endvalue').value;

			start = start + ", Nepal";
			end = end + ", Nepal";

			  console.log(start);
 			 console.log(end);
			  var request = {
				  origin:start,
				  destination:end,
				  travelMode: google.maps.TravelMode.DRIVING
			  };
			  directionsService.route(request, function(response, status) {
				if (status == google.maps.DirectionsStatus.OK) {
				  directionsDisplay.setDirections(response);
				}
			  });
		}

		google.maps.event.addDomListener(window, 'load', initialize);
