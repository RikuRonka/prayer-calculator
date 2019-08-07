<?php
header('Content-type:application/json;charset=utf-8');

	if(isset($_POST['nimi']))
    $name = $_POST['nimi'];

	$content = file_get_contents("https://secure.runescape.com/m=hiscore/index_lite.ws?player=".$name."");

	$myArray = explode(',', $content);

	$exploud = preg_split("/\s/", $myArray[14]);

	print_r($exploud[0]);

?>
