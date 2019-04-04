
<!DOCTYPE html>
<html>
  <head>
    <style>
           #map {
        height: 400px;
        width: 100%;
       }
    </style>
    <script>
			function Report(color, name, guy, lat, lng) {
				this.color = color
				this.name = name
				this.guy = guy
				this.coords = [lat, lng]
			}

			locations = [new Report('red', "Explosion at Alabang Town Center, possible terrorist attack.", "Keith Leonardo", 14.421538, 121.030319), new Report('yellow', "Blah", "Potek", 14.540000, 121.049556)]


      var map;

      function initialize() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: new google.maps.LatLng(14.440712,120.9940758),
styles: [
										{
											featureType: 'all',
											elementType: 'all',
											stylers: [
												{visibility: "off"}
											]
										},

										{
											featureType: 'road',
											elementType: 'geometry',
											stylers: [
												{color: "#FFFFFF"},
												{visibility: 'on'}
											]
										},

										{
											featureType: 'road',
											elementType: 'labels.text.fill',
											stylers: [
												{color: "#000000"},
												{visibility: 'on'}
											]
										},

										{
											featureType: 'road',
											elementType: 'labels.text.stroke',
											stylers: [
												{color: "#FFFFFF"},
												{visibility: 'on'}
											]
										}
									]

        });

// icons!!
var black = 'http://i.imgur.com/c6K9gJZ.png';
var red = 'http://i.imgur.com/mZhgsaH.png';
var yellow = 'http://i.imgur.com/oRMyo75.png';
var green = 'http://i.imgur.com/0WqEgaF.png';
var white = 'http://i.imgur.com/nhRbxn6.png';

var locatifons = [
  ["<strong>Red</strong> - SINAKSAK SI BOY ABUNDA IDOL KO NAMATAY!<br />Submitted by <em>Clark Dominic Alipasa</em>",     14.540000, 121.049556, red],
  ["<strong>White</strong> - may nag tae po sa wave pool... sobrang dami po.. <br />Submitted by <em>Iggy Ignacio</em>",    14.326056, 121.057722, white],
  ["<strong>Yellow</strong> - Multi-car pileup along Daang Reyna. <br />Submitted by <em>Dr. Hugh Janus</em>",    14.362778, 121.009778, yellow],
  ["<strong>Red</strong> -  Terrorist bombing along residential street <br />Submitted by <em>Anonymous</em>",    14.559250, 120.990472, red],
  ["<strong>White</strong> - i saw a siyokoy in the water uhm be careful <br />Submitted by <em>Mike Hawk</em>",    14.589639, 121.014472, white],
  ["<strong>Green</strong> -  student mosh pit with knives<br />Submitted by <em>Gina Cole</em>",    14.654222, 121.066750, green],
  ["<strong>Red</strong> - Driveby shooting in Datu Unsay marketplace<br />Submitted by <em>Rica Blanco</em>",    6.914368,124.448607, red],
  ["<strong>Green</strong> -  Tikbalang tribe found<br />Submitted by <em>Anonymous</em>",    8.193713,124.889665, green],
  ["<strong>Red</strong> - Woman's corpse found in forest, possibly drug-related <br />Submitted by <em>Anonymous</em>",    16.297952,121.115467, red],
  ["<strong>White</strong> -  Statue of Jesus crying oil and water<br />Submitted by <em>Carlos Dolor</em>",    14.618014,120.967712, white],
  ["<strong>Red</strong> -  NPA bandits attack fishermen, seize up to 12 small watercrafts, managed to escape before police arrived.<br />Submitted by <em>Edwin Magbanua</em>",    11.646860,122.433983, white],
  ["<strong>Red</strong> -  SALVAGE VICTIM natagpuan sa tabi ng ilog Cagayan<br />Submitted by <em>Anonymous</em>",    17.151853,121.998199, red],
  ["<strong>Red</strong> -  Pangkat ng NPA napuksa sa sagupaan, 15 patay<br />Submitted by <em>Gringo Dela Rosa</em>",    16.675287,121.707505, red],
  ["<strong>Green</strong> -  Suntukan sa Ace Hardware, SM City Naga<br />Submitted by <em>Anonymous</em>",    13.621108,123.190430, green],
  ["<strong>Green</strong> -  NANAKAWAN AKO NG PATATAS HINUGOT  SA LUPA MISMO!<br />Submitted by <em>Andres Agbayani</em>",    17.592631,120.634704, green]
];

// Fetch coordiantes

google.maps.event.addListener(map, 'rightclick', function(event) {
  document.getElementById('displayLat').value = event.latLng.lat();
  document.getElementById('displayLong').value = event.latLng.lng();
  placeMarker(event.latLng);
});

if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(function(position) {
																	var pos = {
																		lat: position.coords.latitude,
																		lng: position.coords.longitude
																	}
																	map.setCenter(pos)
															 }, function() {
																	locationError(true)
															})
				}
				else {
					// Browser doesn't support Geolocation
					locationError(false)
				}

				infoWidget = new google.maps.InfoWindow()
				function addMarker(data) {
					var latLng = new google.maps.LatLng(data.coords[0], data.coords[1])
					var marker = new google.maps.Marker({position: latLng, icon: 'http://batid.chiaski.com/'+data.color+'.png', map: map})

					var text_format = data.name+"<br/>Submitted by <em>"+data.guy+"</em>"
					google.maps.event.addListener(marker, 'click', function(){
																	infoWidget.close()
																	infoWidget.setContent(text_format)
																	infoWidget.open(map, marker)
												 })
				}

				function addFeed(data) {
					var latLng = new google.maps.LatLng(data.coords[0], data.coords[1])
					var marker = new google.maps.Marker({position: latLng, icon: 'http://batid.chiaski.com/'+data.color+'.png', map: map})

					var text_format = data.name+"<br/>Submitted by <em>"+data.guy+"</em>"
					google.maps.event.addListener(marker, 'click', function(){
																	infoWidget.close()
																	infoWidget.setContent(text_format)
																	infoWidget.open(map, marker)
												 })
				}

				for(i = 0; i < locations.length; i++) {
					addMarker(locations[i])
				}
			}

			function locationError(browserSupport) {
				if(browserSupport) {
					alerft("Error: Geolocation service failed.")
				}
				else {
					alerft("Error: Your browser doesn't support geolocation.")
				}
			}



    </script>
  </head>
  <body>
<div id="submit">
Lat 1:<input type="text" size="20" maxlength="50" name="displayLat" id="displayLat" value=""><br />
Long 1:<input type="text" size="20" maxlength="50" name="displayLong" id="displayLong"><br />
</div>
<div id="feed" style="height:100px;">
<script>document.write(locations[0]);</script>
</div>
    <div id="map"></div>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDn3hbuuErh3pRlRbcr7fbhk5WEm4-16uk&callback=initialize">
    </script>
  </body>
</html>
