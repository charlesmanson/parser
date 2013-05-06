$(document).ready(function(){
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
						url: "/engine/hParser.php",
						data: {'action':'s_info', 'link': hInfo['link']},
						success: function(data){
							hBlock.html(data);
						}
					})
				}
			}			
		});
	});
});
