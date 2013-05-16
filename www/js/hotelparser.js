parser = function(){
	this.kill = function(){
		console.log('kill');
	}
	
	this.attachHotel = function(params){
		$.ajax({
			url:"/engine/hotelParser.php",
			type:"get",
			data: {
				action:"assign",
				luxaID:params['luxaID'],
				hotelID:params['hotelID']
			},
			dataType:"json",
			success:function(data){
				console.log(data);
			}
		})
	}
	
	return this;
}();


