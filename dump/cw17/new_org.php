<!DOCTYPE html>
<html>
	<head>
		<title>Landas - New Organization</title>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>

		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"/>
		<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
		
		<script src="leaflet-gplaces-autocomplete.js"></script>
		<link rel="stylesheet" href="leaflet-gplaces-autocomplete.css" />

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVhS3zPjsr7X4khkY8GN7Er6qs7D63Im8&libraries=places"></script>

		<script type='text/javascript'>
			function Branch(address, operate, lat, lng) {
				this.address = address
				this.operating = operate
				this.coords = [lat, lng]
			}

			function validate_main() {
				if(document.new_org.orgname.value == "") {
					alert("What is the name of your organization?")
					return false
				}

				if(document.new_org.desc.value == "") {
					alert("Describe your organization.")
					return false
				}

				if(document.new_org.type.value == "") {
					alert("Please select a type.\nYou may refer to the type ranking chart.")
					return false
				}
				return true
			}

			function validate_map() {
				if(document.locations.address.value == "") {
					alert("Please indicate the full address of the branch.")
					return false
				}
				if(document.locations.operating.value == "") {
					alert("Please indicate this branch's operating hours.")
					return false
				}
			}
		</script>

		<style>
			#inputmap {
				width: 700px;
				height: 500px;
				z-index: 0;
			}

			.modal {
				display: none;
				position: fixed;
				z-index: 1; 
				padding-top: 100px;
				left: 0;
				top: 0;
				width: 100%; 
				height: 100%;
				overflow: auto;
				background-color: rgba(0, 0, 0, 0.4);
			}

			.modal-content {
				background-color: #FEFEFE;
				margin: auto;
				padding: 30px;
				border-radius: 30px;
				width: 500px;
				font-family: "Oxygen";
			}

			.close {
				color: #AAAAAA;
				font-size: 28px;
				float: right;
				font-weight: bold;
				font-family: "Oxygen";
			}

			.close:hover,
			.close:focus {
				color: #000000;
				text-decoration: none;
				cursor: pointer;
			}

			#report-content {
				text-align: center;
			}

			#desc-link {
				text-decoration: none;
			}

			.report_entry {
				width: 200px;
				border: 1px solid #AAAAAA;
				border-radius: 10px;
				padding: 10px;
			}
		</style>
	</head>

	<body>
		<form name="new_org" action="update_org.php" method="post" onsubmit="return validate_main()" enctype="multipart/form-data">
			<input class='textbox' type="text" name="orgname" id='org_name' placeholder="Organization Name"/><br/><br/>
			
			Upload your logo: <br/>
			<input type="file" name="fileToUpload" id="fileToUpload"><br/><br/>
			
			<textarea name="desc" placeholder="Description - Services, area of focus, scope of work."/></textarea><br/><br/>
			
			<input type="radio" name="type" id="fundraiser" value="fundraiser">
			<label for="fundraiser">
				Fundraiser
			</label>

			<input type="radio" name="type" id="goods" value="goods">
			<label for="goods">
				Goods Packaging
			</label>

			<input type="radio" name="type" id="relief" value="relief">
			<label for="relief">
				Relief Operation (eg. Medical Mission)
			</label><br/><br/>

			<textarea name="goods" placeholder="Item, Priority (low/med/high) - Separate by linebreak."/></textarea><br/><br/>

			Bank Deposit Details<br/>
			<input class='textbox' type="text" name="bank" placeholder="Bank (eg. BDO, BPI)"/><br/>
			<input class='textbox' type="text" name="target_name" placeholder="Account Name"/><br/>
			<input class='textbox' type="text" name="account_number" placeholder="Account Number"/><br/><br/>
			<input type="submit" id="submit_button"/><br/>
		</form>

		<div id="inputmap"></div><br/>
		<div id="report" class="modal">
			<div id="report-content" class="modal-content">
				<span id="report-close" class="close">&times;</span><br/><br/>
				<form name="locations" action="new_location.php" method="post" onsubmit="return validate_map();">
					<input class='textbox' type="text" name="name" id="map_marker_name" placeholder="Organization Name"/><br/>
					<input class='textbox' type="text" name="address" placeholder="Complete Address"/><br/>
					<input class='textbox' type="text" name="operating" placeholder="Operating Hours (eg. 7:00 AM - 8:00 PM"/><br/><br/>

					<input class='textbox' type="text" name="lat" id='lat' placeholder="Latitude"/><br/>
					<input class='textbox' type="text" name="lng" id='lng' placeholder="Longitude"/><br/><br/>
					<input type="submit" id="submit_button"/><br/>
				</form>
			</div>
		</div>
		
		<div id="desc" class="modal">
			<div id="desc-content" class="modal-content">
				<span id="desc-close" class="close">&times;</span><br/><br/>
				<div id="desc-internal">
				</div>
			</div>
		</div>

		<script>
			var report_popup = document.getElementById('report')
			var report_close = document.getElementById("report-close")
			
			var desc_popup = document.getElementById('desc')
			var desc_internal = document.getElementById('desc-internal')
			var desc_close = document.getElementById("desc-close")
			
			report_close.onclick = function() {
				report_popup.style.display = "none"
			}

			window.onclick = function(event) {
				if (event.target == report_popup) {
					report_popup.style.display = "none"
				}
			}
			
			desc_close.onclick = function() {
				desc_popup.style.display = "none"
			}

			window.onclick = function(event) {
				if (event.target == desc_popup) {
					desc_popup.style.display = "none"
				}
			}

			var map = L.map('inputmap').setView([14.421538, 121.030319], 13)
			map.locate({setView : true, enableHighAccuracy : true})

			L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
				maxZoom: 18,
				attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
					'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
					'Imagery © <a href="http://mapbox.com">Mapbox</a>',
				id: 'mapbox.streets'
			}).addTo(map)

			function report(e) {
				report_popup.style.display = "block"
				document.getElementById('lat').value = e.latlng.lat
				document.getElementById('lng').value = e.latlng.lng
			}
			map.on('click', report)
		</script>
	</body>
</html>
