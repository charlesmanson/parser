<!DOCTYPE html>
<META http-equiv="Content-Type" Content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/style.css"/>
<?
require_once ('engine/hotelDb.php');
$page = isset($_GET['page']) ? $_GET['page'] : 0;

$hDb = new hotelDb();

$list = $hDb -> getLuxaList($page);
?>
<div id="main-block">
	
<? foreach ($list as $key => $hotel) : ?>
	<div id="luxa<?=$key; ?>" data-assign="<?=$hotel['assignId']; ?>" class="hotel-node">
		<h6 class="luxa-name"><?=$hotel['name']; ?></h6>
		<span class="address"><?=$hotel['address']; ?></span>
		<div class="matches"></div>
	</div>
<? endforeach; ?>

</div>
<a href="index.php?page=<?=$page + 1; ?>">Next</a>
<script src="js/jquery-1.9.1.min.js"></script>
<script>
	function rvwQuery(params){
		$.ajax({
			type : "get",
			url : "/engine/hotelParser.php",
			dataType : "json",
			data : params,
			success : function(data) {
				if (data.href !== false) {
					console.log(data);
					rvwQuery({
						action: "loadRvw", 
						href: data.href,
						hotelId : data.hotelId
					})
				}
			}
		});
	}
	function loadReviews(hotelId) {
		rvwQuery({
			action : "loadRvw",
			hotelId : hotelId
		});
	}


	$(document).ready(function() {

		$('a.hotel-assign').on("click", function(evt) {
			evt.preventDefault();
			console.log(this);
		});
		$.each($('div.hotel-node'), function(i, elm) {
			var hBlk = $(elm);
			$.ajax({
				type : "get",
				url : "/engine/hotelParser.php",
				dataType : "json",
				data : {
					action : "search",
					luxaId : hBlk[0].id.substring(4),
					req : $(hBlk.children('.luxa-name'))[0].innerHTML,
					assignId : hBlk[0].dataset['assign']
				},
				beforeSend : function() {
					$(hBlk.children('.matches')).html('Загрузка...');
				},
				success : function(data) {
					$(hBlk.children('.matches')).empty();
					if (data['type'] == 'html') {
						$(hBlk.children('.matches')).html(data['html']);
					} else {
						for (var key in data) {
							var hDiv = $('<div class=' + data[key]['hotelId'] + '>Загрузка...</div>');
							$(hBlk.children('.matches')).append(hDiv);
							data[key]['action'] = 's_info';
							$.ajax({
								type : "get",
								url : "/engine/hotelParser.php",
								dataType : "json",
								data : data[key],
								success : function(data) {
									console.log(data);
									$('div#luxa' + data['luxaId'] + ' div.' + data['hotelId']).html(data['name'] + '<br>' + data['locality'] + ', ' + data['street'] + '<a class="hotel-assign" href="/engine/hotelParser.php?action=assign&luxaId=' + data['luxaId'] + '&hotelId=' + data['hotelId'] + '">связать</a>');
								}
							});
						}
					}
				}
			});
		})
	}); 
</script>
