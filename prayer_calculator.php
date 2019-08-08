<?php
header('Content-type:application/json;charset=utf-8');

	$bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=526");

	$big_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=532");

	$dragon_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=536");

	$frost_dragon_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=18832");

	$airut_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=30209");

	$bat_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=530");

	$burnt_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=528");

	$dagannoth_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=6729");

	$fayrg_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=4830");

	//$dinosaur_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=4830");

	//$hardened_dragon_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=4830");

	//$reinforced_dragon_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=4830");

	$jogre_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=3125");

	$monkey_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=3183");

	$ourg_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=4834");

	$raurg_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=4832");

	$shaikahan_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=3123");

	$wolf_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=2859");

	$wyvern_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=6812");

	$zogre_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=4812");

	$hardened_dragon_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=35008");

	$reinforced_dragon_bones = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=35010");

	//ashes

	$accursed_ashes = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=20266");

	$impious_ashes = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=20264");

	$infernal_ashes = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=20268");

	$tortured_ashes = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=33260");

	$searing_ashes = file_get_contents("http://services.runescape.com/m=itemdb_rs/api/catalogue/detail.json?item=34159");

	$allbones = array();
	array_push($allbones, $dragon_bones);
	array_push($allbones, $frost_dragon_bones);
	array_push($allbones, $bones);
	array_push($allbones, $big_bones);
	array_push($allbones, $airut_bones);
	array_push($allbones, $bat_bones);
	array_push($allbones, $burnt_bones);
	array_push($allbones, $dagannoth_bones);
	array_push($allbones, $fayrg_bones);
	array_push($allbones, $jogre_bones);
	array_push($allbones, $monkey_bones);
	array_push($allbones, $ourg_bones);
	array_push($allbones, $raurg_bones);
	array_push($allbones, $shaikahan_bones);
	array_push($allbones, $wolf_bones);
	array_push($allbones, $wyvern_bones);
	array_push($allbones, $zogre_bones);
	array_push($allbones, $hardened_dragon_bones);
	array_push($allbones, $reinforced_dragon_bones);


	//ashes
	array_push($allbones, $accursed_ashes);
	array_push($allbones, $impious_ashes);
	array_push($allbones, $infernal_ashes);
	array_push($allbones, $tortured_ashes);
	array_push($allbones, $searing_ashes);

	echo json_encode($allbones, JSON_UNESCAPED_SLASHES);


?>
