<?
require_once('engine/hotelDb.php');
$page = isset($_GET['page']) ? $_GET['page'] : 0;

$hDb = new hotelDb();

$list = $hDb->getLuxaList($page);
?>
<div id="main-block">
	
<? foreach ($list as $key => $hotel) : ?>
	<div id="luxa<?=$key;?>" class="hotel-node">
		<h6 class="luxa-name"><?=$hotel['name'];?></h6>
		<div class="matches"></div>
	</div>
<? endforeach; ?>

</div>

<script src="js/jquery-1.9.1.min.js"></script>
<script>
	$(document).ready(function(){
		$.each($('div.hotel-node'),function(i,elm){
			var hBlk = $(elm);
			$.ajax({
				type:"get",
				url: "/engine/hotelParser.php",
				dataType: "json",
				data: {
					action: "search",
					luxaId: hBlk[0].id.substring(4),
					req: $(hBlk.children('.luxa-name'))[0].innerHTML
				},
				beforeSend: function(){
					$(hBlk.children('.matches')).html('Загрузка...');
				},
				success: function(data){
					$(hBlk.children('.matches')).empty();
					for (var key in data) {
						var hDiv = $('<div class='+data[key]['hotelId']+'>Загрузка...</div>');
						$(hBlk.children('.matches')).append(hDiv);
						data[key]['action'] = 's_info';
						$.ajax({
							type:"get",
							url:"/engine/hotelParser.php",
							dataType: "json",
							data: data[key],
							success:function(data){
								console.log(data);
								$('div#luxa'+data['luxaId']+' div.'+data['hotelId']).html(data['name']);
							}
						});
					}
				}
			});
		})
	});
</script>
