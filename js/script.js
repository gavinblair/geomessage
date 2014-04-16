/* Author:

*/
var lat;
var lng;
var accuracy;
var p;
var checker;
$(document).ready(function(){
	setInterval(function(){
		navigator.geolocation.getCurrentPosition(GetLocation);
	}, 500);
	
	if(window.location.hash) {
		p = window.location.hash;
		$(".current").removeClass("current");
		$("#hotcold").addClass("current");
		
		//get coords of p
		p = p.substring(1); //remove the #
		$.ajax({
			type: 'get',
			url: 'data.php',
			data: 'p='+p,
			dataType: 'json',
			success: function(point){
				$("h2").text(point.name);
				checker = setInterval(function(){
					//calculate distance
					var dist = getDistance(point.lat, point.lng);
					$("#dist").text(dist);
					
					if(dist.indexOf("km") < 0) {
						//metres
						dist = parseInt(dist.slice(0,strLen-1));
						
						if(dist < 10) {//within 10m
							//we're there!
							clearInterval(checker);
							$("h1").text(point.message);
						}
					}
				}, 500);
			}
		});
	}
	
	$(".current .btn").live("click", function(){
		if($(this).attr("data-to").length > 0) {
			$(".current").removeClass("current");
			$("#"+$(this).attr("data-to")).addClass("current");
		}
		return true;
	});
	
	$("#save").click(function(){
		$.ajax({
			type: 'get',
			url: 'data.php',
			data: 'i=true&name='+$("#name").val()+'&message='+$("#message")+'&lat='+lat+'&lng='+lng,
			dataType: 'text',
			success: function(p){
				window.location.hash = "";
				$("#link").val(window.location.href+"#"+p);
			}
		});
		return true;
	});
});
function GetLocation(location) {
	lat = location.coords.latitude;
    lng = location.coords.longitude;
    accuracy = location.coords.accuracy;
	
	$("#location").text(lat+", "+lng);
}

function getDistance(dest_lat, dset_lng){
	var R = 6371; // Radius of the earth in km
	var dLat = (lat-dest_lat).toRad();  // Javascript functions in radians
	var dLon = (lng-dest_lng).toRad(); 
	var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
			Math.cos(dest_lat.toRad()) * Math.cos(lat.toRad()) * 
			Math.sin(dLon/2) * Math.sin(dLon/2); 
	var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
	var d = R * c; // Distance in km
	var ret = d+"km";
	if(d < 1) {
		ret = (d*1000)+"m";
	}
	return ret;
}
