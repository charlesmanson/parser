$(document).ready(function(){
	
	function getReviews(params){
		$.ajax({
			type: "get",
			dataType: "json",
			url: "/engine/hParser.php",
			data: params,
			success: function(data){
				console.log(data['href']);
				if (data['href'] !== false){
					getReviews({action: 'reviews', href: data['href']});
				}
			}
		})
	}
	
	$('form#hotel-search').submit(function(evt){
		evt.preventDefault();
		//console.log()
		$('div#main-block').empty();
		$.ajax({
			type: "get",
			dataType: "json",
			url: evt.target.attributes['action'].value,
			data: $(evt.target).serialize(),
			success: function(data){
				//console.log(data);
				for (var key in data) {
					var hInfo = data[key];
					var hBlock = $('<div id="'+hInfo['hotelId']+'" data-location="'+hInfo['locationId']+'" data-hotel="'+hInfo['hotelId']+'" data-link="'+hInfo['link']+'">Loading...</div>');
					$('div#main-block').append(hBlock);
					$.ajax({
						type: "get",
						dataType: "json",
						url: "/engine/hParser.php",
						data: {'action':'s_info', 'hotelId': hInfo['hotelId'], 'locationId': hInfo['locationId']},
						success: function(data){
							$('div#'+data['hotelId']).html(data['name']);
							getReviews({action: 'reviews', hotelId: data['hotelId']});
						}
					})
				}
			}			
		});
	});
});
