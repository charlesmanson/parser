<!DOCTYPE html>
<META http-equiv="Content-Type" Content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/style.css"/>
<?
require_once ('engine/hotelDb.php');

$path = dirname($_SERVER['REQUEST_URI']);
$page = isset($_GET['page']) ? $_GET['page'] : 0;

$hDb = new hotelDb();

$list = $hDb -> getLuxaList($page);
?>
<div id="main-block">
	
<? foreach ($list as $key => $hotel) : ?>
	<div id="luxa<?=$key; ?>" data-assign="<?=$hotel['assignID']; ?>" class="hotel-node">
		<h6 class="luxa-name"><? $tmp = explode(',', $hotel['name']); echo $tmp[0]; ?></h6>
		<span class="address"><?=$hotel['address']; ?></span>
		<div class="matches"></div>
	</div>
<? endforeach; ?>

</div>
<a href="index.php?page=<?=$page + 1; ?>">Next</a>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/hotelparser.js"></script>
<script>
	
	$(document).ready(function() {

		$.each($('div.hotel-node'), function(i, elm) {
			var hBlk = $(elm);
			$.ajax({
				type : "get",
				url : "/engine/hotelParser.php",
				dataType : "json",
				data : {
					action : "search",
					luxaID : hBlk[0].id.substring(4),
					req : $(hBlk.children('.luxa-name'))[0].innerHTML,
					assignID : hBlk[0].dataset['assign']
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
							var hDiv = $('<div class=' + data[key]['hotelID'] + '>Загрузка...</div>');
							$(hBlk.children('.matches')).append(hDiv);
							data[key]['action'] = 's_info';
							$.ajax({
								type : "get",
								url : "/engine/hotelParser.php",
								dataType : "json",
								data : data[key],
								success : function(data) {
									console.log(data);
									$('div#luxa' + data['luxaID'] + ' div.' + data['hotelID']).html(data['name'] + '<br>' + data['city'] + ', ' + data['street'] + '<a class="hotel-assign" onclick="parser.attachHotel({luxaID:'+data['luxaID']+',hotelID:'+"'"+data['hotelID']+"'"+'}); return false;" href="#" >связать</a>');
								}
							});
						}
					}
				}
			});
		})
	}); 
</script>
