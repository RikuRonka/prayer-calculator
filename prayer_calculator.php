<?php
header('Content-type:application/json;charset=utf-8');

	$bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=526");

	$big_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=532");

	$dragon_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=536");

	$frost_dragon_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=18832");

	$airut_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=30209");

	$allbones = array();
	array_push($allbones, $dragon_bones);
	array_push($allbones, $frost_dragon_bones);
	array_push($allbones, $bones);
	array_push($allbones, $big_bones);
	array_push($allbones, $airut_bones);

	echo json_encode($allbones, JSON_UNESCAPED_SLASHES);


?>
