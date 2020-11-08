window.onload = function(){

	var map;
	function initialize(){
		var mapProp = {
			center: new google.maps.LadtLng(-27.648598,-48.577423),
			scrollWheel:false,
			zoom:12,
			MapTypeId:google.maps.MapTypeId.ROADMAP
		}

		map = new google.maps.Map(document.getElementsById("mapa"),mapProp);

	}

	initialize();

}